<?php
/* ==========================================================================
   Maya Devi University — "MX" redesign kit (shared by the redesign pages)
   Used by : new-home-4.php
             new-best-computer-engineering-college-in-dehradun-uttarakhand.php
             new-bachelor-of-computer-application-ai-and-ml.php
   Assets  : assets/css/mx.css + assets/js/mx.js
   Nothing in the live site includes this file.
   ========================================================================== */

if (!function_exists('mx_icon')) {

/* Inline stroke icons, so the pages don't depend on an icon font */
function mx_icon($name, $class = '') {
    static $p = [
        'arrow'    => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'arrow-ur' => '<path d="M7 17 17 7M8 7h9v9"/>',
        'arrow-d'  => '<path d="M12 5v14M6 13l6 6 6-6"/>',
        'prev'     => '<path d="M19 12H5M11 6l-6 6 6 6"/>',
        'plus'     => '<path d="M12 5v14M5 12h14"/>',
        'play'     => '<path d="M7 4.5v15l12-7.5z" fill="currentColor" stroke="none"/>',
        'clock'    => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'credit'   => '<path d="M12 3 3 8l9 5 9-5z"/><path d="m3 13 9 5 9-5"/>',
        'seat'     => '<circle cx="12" cy="8" r="4"/><path d="M4 21c1-4 4-6 8-6s7 2 8 6"/>',
        'sem'      => '<rect x="3" y="4" width="18" height="17" rx="1"/><path d="M3 9h18M8 2v4M16 2v4"/>',
        'file'     => '<path d="M14 3H6v18h12V7z"/><path d="M14 3v4h4M9 13h6M9 17h6"/>',
        'check'    => '<path d="m5 12.5 4.5 4.5L19 7.5"/>',
        'cpu'      => '<rect x="6" y="6" width="12" height="12" rx="1"/><path d="M10 10h4v4h-4zM9 2v4M15 2v4M9 18v4M15 18v4M2 9h4M2 15h4M18 9h4M18 15h4"/>',
        'shield'   => '<path d="M12 21s7-3.5 7-9.5V5l-7-2.5L5 5v6.5C5 17.5 12 21 12 21z"/><path d="m9 12 2 2 4-4"/>',
        'code'     => '<path d="m8 7-5 5 5 5M16 7l5 5-5 5M14 4l-4 16"/>',
        'globe'    => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.5 3.7 5.5 3.7 9s-1.2 6.5-3.7 9c-2.5-2.5-3.7-5.5-3.7-9S9.5 5.5 12 3z"/>',
        'mic'      => '<rect x="9" y="2" width="6" height="12" rx="3"/><path d="M5 11a7 7 0 0 0 14 0M12 18v4"/>',
        'cube'     => '<path d="m12 2 9 5v10l-9 5-9-5V7z"/><path d="m3 7 9 5 9-5M12 12v10"/>',
        'rocket'   => '<path d="M5 15c-1.5 1.5-2 5-2 5s3.5-.5 5-2M9 15l-3-3c1-4 4.5-9 13-9 0 8.5-5 12-9 13z"/><circle cx="14.5" cy="9.5" r="1.5"/>',
        'gem'      => '<path d="M6 3h12l3 6-9 12L3 9z"/><path d="M3 9h18M12 21 8 9l4-6 4 6z"/>',
        'building' => '<path d="M4 21V4h11v17M15 9h5v12M2 21h20M8 8h3M8 12h3M8 16h3"/>',
        'chart'    => '<path d="M3 3v18h18"/><path d="m7 15 4-4 3 3 6-7"/>',
        'brain'    => '<path d="M9 4a3 3 0 0 0-3 3 3 3 0 0 0-2 5 3 3 0 0 0 2 5 3 3 0 0 0 3 3h1V4z"/><path d="M15 4a3 3 0 0 1 3 3 3 3 0 0 1 2 5 3 3 0 0 1-2 5 3 3 0 0 1-3 3h-1V4z"/>',
        'eye'      => '<path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/>',
        'db'       => '<ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"/>',
        'text'     => '<path d="M4 6h16M4 12h10M4 18h13"/>',
        'layers'   => '<path d="m12 3 9 5-9 5-9-5z"/><path d="m3 13 9 5 9-5"/>',
        'pin'      => '<path d="M12 21s-7-6.2-7-12a7 7 0 0 1 14 0c0 5.8-7 12-7 12z"/><circle cx="12" cy="9" r="2.5"/>',
        'quote'    => '<path d="M9 7H5v6h4v-1c0 2-1 4-4 4M19 7h-4v6h4v-1c0 2-1 4-4 4"/>',
    ];
    return '<svg class="mx-i ' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . ($p[$name] ?? '') . '</svg>';
}

/* Compact WebP copy from assets/uploads/h3d/ when one exists, otherwise the original file */
function mx_img($path) {
    $info = pathinfo($path);
    /* computer.jpg and computer.webp are different photos: only map when the name is unambiguous */
    if (strtolower($info['extension'] ?? '') !== 'webp' && is_file(dirname(__DIR__) . '/' . $info['dirname'] . '/' . $info['filename'] . '.webp')) {
        return $path;
    }
    $copy ='assets/uploads/h3d/' . pathinfo($path, PATHINFO_FILENAME) . '.webp';
    return is_file(dirname(__DIR__) . '/' . $copy) ? $copy : $path;
}

/* Cache-busted asset URL */
function mx_asset($path) {
    return $path . '?v=' . @filemtime(dirname(__DIR__) . '/' . $path);
}

/* Proxima Nova is a licensed font. Drop its .woff2 files into assets/fonts/proxima-nova/
   (names below) and every redesign page switches to it automatically. */
function mx_proxima() {
    $dir = 'assets/fonts/proxima-nova/';
    $faces = [
        ['ProximaNova-Regular.woff2', 400, 'normal'],
        ['ProximaNova-Semibold.woff2', 600, 'normal'],
        ['ProximaNova-Bold.woff2', 700, 'normal'],
        ['ProximaNova-Extrabold.woff2', 800, 'normal'],
        ['ProximaNova-SemiboldIt.woff2', 600, 'italic'],
        ['ProximaNova-BoldIt.woff2', 700, 'italic'],
    ];
    $css = '';
    foreach ($faces as $f) {
        if (!is_file(dirname(__DIR__) . '/' . $dir . $f[0])) continue;
        $css .= "@font-face{font-family:'Proxima Nova';src:url('" . $dir . $f[0] . "') format('woff2');font-weight:{$f[1]};font-style:{$f[2]};font-display:swap}\n";
    }
    if ($css) echo "<style>\n" . $css . "</style>\n";
}

/* Head tags every redesign page needs (fonts, stylesheet, JS flag) */
function mx_head() {
    ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500;1,700&display=swap" rel="stylesheet">
<?php mx_proxima(); ?>
<link rel="stylesheet" href="<?php echo mx_asset('assets/css/mx.css'); ?>">
<script>
(function () {
  var r = document.documentElement;
  r.classList.add('mx-js');
  try { if (sessionStorage.getItem('mxSeen')) r.classList.add('mx-seen'); } catch (e) {}
  /* if mx.js never runs, show everything anyway */
  setTimeout(function () { if (!window.__mxReady) r.classList.add('mx-fail'); }, 4000);
})();
</script>
<?php
}

/* Closing script tag for the redesign pages */
function mx_foot() {
    echo '<script src="' . mx_asset('assets/js/mx.js') . '" defer></script>' . "\n";
}

/* Admission steps exactly as on application-process.php */
function mx_steps() {
    return [
        ['Registration Form', 'Start by registering your account with basic contact and personal details.'],
        ['Application Form', 'Fill out the information and upload documents for verification.'],
        ['Pay Application Fee', 'Proceed to secure payment to submit your application.'],
        ['Verification &amp; Admission', 'After verification, you will receive detailed admission instructions.'],
    ];
}

}
