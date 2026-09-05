/**
 * UTM Parameter & Source Tracker for Maya Devi University
 * Automatically captures UTM parameters from URL, referrer, or defaults to "website".
 * Persists in sessionStorage, localStorage, and cookies.
 * Synchronizes browser location bar (history.replaceState) and populates all form inputs/widgets.
 */
(function() {
    'use strict';

    if (window.UTM_TRACKER_INITIALIZED) {
        return;
    }
    window.UTM_TRACKER_INITIALIZED = true;

    var UTM_KEYS = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'gclid', 'fbclid', 'msclkid'];
    var DEFAULT_SOURCE = 'website';
    var DEFAULT_MEDIUM = 'referral';
    var DEFAULT_CAMPAIGN = 'website_direct';

    function getCookie(name) {
        var match = document.cookie.match(new RegExp('(?:^|; )' + name + '=([^;]*)'));
        return match ? decodeURIComponent(match[1]) : null;
    }

    function setCookie(name, value, days) {
        days = days || 30;
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = name + '=' + encodeURIComponent(value) + '; path=/; expires=' + date.toUTCString() + '; SameSite=Lax';
    }

    function getStoredParam(key) {
        try {
            return sessionStorage.getItem(key) || localStorage.getItem(key) || getCookie(key);
        } catch (e) {
            return getCookie(key);
        }
    }

    function storeParam(key, value) {
        if (!value) return;
        try {
            sessionStorage.setItem(key, value);
            localStorage.setItem(key, value);
        } catch (e) {}
        setCookie(key, value, 30);
    }

    function getUrlParams() {
        var params = {};
        var search = window.location.search;
        if (!search) return params;
        var pair;
        var query = search.substring(1).split('&');
        for (var i = 0; i < query.length; i++) {
            pair = query[i].split('=');
            if (pair[0]) {
                params[decodeURIComponent(pair[0]).toLowerCase()] = decodeURIComponent(pair[1] || '');
            }
        }
        return params;
    }

    // 1. Capture or Initialize UTM parameters
    var urlParams = getUrlParams();
    var utmValues = {};

    if (urlParams['utm_source']) {
        // User arrived with explicit utm_source in URL
        UTM_KEYS.forEach(function(key) {
            if (urlParams[key]) {
                utmValues[key] = urlParams[key];
                storeParam(key, urlParams[key]);
            }
        });
    } else {
        // Check for stored values from earlier in session
        UTM_KEYS.forEach(function(key) {
            var val = getStoredParam(key);
            if (val) utmValues[key] = val;
        });

        // If no utm_source stored, determine default source (organic referrer vs direct website visit)
        if (!utmValues['utm_source']) {
            var ref = document.referrer;
            if (ref) {
                try {
                    var refHost = new URL(ref).hostname.toLowerCase();
                    var currentHost = window.location.hostname.toLowerCase();
                    if (refHost !== currentHost) {
                        if (/google|bing|yahoo|duckduckgo|baidu|yandex|ecosia/i.test(refHost)) {
                            utmValues['utm_source'] = 'Organic';
                            utmValues['utm_medium'] = 'organic';
                            utmValues['utm_campaign'] = refHost;
                        } else {
                            utmValues['utm_source'] = 'Referral';
                            utmValues['utm_medium'] = 'referral';
                            utmValues['utm_campaign'] = refHost;
                        }
                    }
                } catch(e) {}
            }

            if (!utmValues['utm_source']) {
                utmValues['utm_source'] = DEFAULT_SOURCE;
                utmValues['utm_medium'] = DEFAULT_MEDIUM;
                utmValues['utm_campaign'] = DEFAULT_CAMPAIGN;
            }

            // Persist the default source
            Object.keys(utmValues).forEach(function(key) {
                storeParam(key, utmValues[key]);
            });
        }
    }

    // Expose globally
    window.UTM_PARAMS = utmValues;
    window.utm_source = utmValues['utm_source'];

    // 2. Ensure window.location.search has utm_source using replaceState
    try {
        if (history.replaceState && !urlParams['utm_source']) {
            var currentUrl = new URL(window.location.href);
            Object.keys(utmValues).forEach(function(key) {
                if (!currentUrl.searchParams.has(key)) {
                    currentUrl.searchParams.set(key, utmValues[key]);
                }
            });
            history.replaceState(null, '', currentUrl.toString());
        }
    } catch(e) {}

    // 3. Inject UTM parameters into all forms, inputs, and script widgets
    function injectUtmToForms() {
        var currentSource = utmValues['utm_source'] || getStoredParam('utm_source') || DEFAULT_SOURCE;

        // Populate standard HTML forms
        var forms = document.querySelectorAll('form');
        forms.forEach(function(form) {
            UTM_KEYS.forEach(function(key) {
                var val = utmValues[key] || getStoredParam(key);
                if (!val) return;

                var fieldNames = [key];
                if (key === 'utm_source') {
                    fieldNames = ['utm_source', 'source', 'lead_source', 'src', 'utm_src', 'field_utm_source', 'mx_UTM_Source', 'Raw_UTM_Source', 'ee_utm_source'];
                }

                var matchedInput = false;
                fieldNames.forEach(function(name) {
                    var input = form.querySelector('input[name="' + name + '"], input[id="' + name + '"], select[name="' + name + '"]');
                    if (input) {
                        input.value = val;
                        matchedInput = true;
                    }
                });

                // If no existing input matched for key, create hidden input for main key
                if (!matchedInput && key === 'utm_source') {
                    var hidden = document.createElement('input');
                    hidden.type = 'hidden';
                    hidden.name = 'utm_source';
                    hidden.value = val;
                    form.appendChild(hidden);
                }
            });
        });

        // ExtraaEdge / Dynamic form widget integration
        var eeContainers = document.querySelectorAll('#ee-form-2, .ee-form-widget, .hf-body');
        eeContainers.forEach(function(container) {
            var inputs = container.querySelectorAll('input, select');
            inputs.forEach(function(inp) {
                var attrName = (inp.getAttribute('name') || inp.getAttribute('id') || inp.getAttribute('placeholder') || '').toLowerCase();
                if (attrName.indexOf('utm_source') !== -1 || attrName.indexOf('source') !== -1) {
                    inp.value = currentSource;
                }
            });
        });

        // Set global variables used by widget scripts if any
        window.ee_utm_source = currentSource;
        window.ee_utm = currentSource;

        // Update embedded iframe src attributes if needed
        var iframes = document.querySelectorAll('iframe');
        iframes.forEach(function(iframe) {
            try {
                var src = iframe.getAttribute('src');
                if (src && src.indexOf('http') === 0 && src.indexOf('utm_source=') === -1) {
                    var delimiter = src.indexOf('?') !== -1 ? '&' : '?';
                    iframe.src = src + delimiter + 'utm_source=' + encodeURIComponent(currentSource);
                }
            } catch(e) {}
        });
    }

    // 4. Preserve UTM parameters on internal anchor link clicks
    function preserveUtmOnLinks() {
        document.addEventListener('click', function(e) {
            var anchor = e.target.closest('a');
            if (!anchor) return;
            var href = anchor.getAttribute('href');
            if (!href || href.startsWith('#') || href.startsWith('javascript:') || href.startsWith('tel:') || href.startsWith('mailto:')) return;
            try {
                var targetUrl = new URL(anchor.href, window.location.origin);
                if (targetUrl.hostname === window.location.hostname) {
                    if (!targetUrl.searchParams.has('utm_source')) {
                        Object.keys(utmValues).forEach(function(key) {
                            if (utmValues[key]) {
                                targetUrl.searchParams.set(key, utmValues[key]);
                            }
                        });
                        anchor.href = targetUrl.toString();
                    }
                }
            } catch(e) {}
        }, true);
    }

    // Execute setup
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            injectUtmToForms();
            preserveUtmOnLinks();
        });
    } else {
        injectUtmToForms();
        preserveUtmOnLinks();
    }

    window.addEventListener('load', injectUtmToForms);

    // Watch for dynamic DOM changes (e.g., popups, ExtraaEdge widget loading)
    if (window.MutationObserver) {
        var observer = new MutationObserver(function() {
            injectUtmToForms();
        });
        observer.observe(document.documentElement, { childList: true, subtree: true });
    }

    // Safety interval check
    setInterval(injectUtmToForms, 1500);

})();
