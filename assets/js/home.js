
/**
 * Custom JavaScript for Home Page (home.php)
 */

document.addEventListener('DOMContentLoaded', function () {
    // 1. YouTube Facade Handling (About Us Section)
    const ytFacade = document.getElementById('yt-facade');
    if (ytFacade) {
        ytFacade.addEventListener('click', function () {
            // Replace the facade with an actual iframe when clicked
            const iframe = document.createElement('iframe');
            // Update the URL below with the actual YouTube video ID you want to play
            iframe.setAttribute('src', 'https://www.youtube.com/embed/YOUR_VIDEO_ID?autoplay=1');
            iframe.setAttribute('width', '100%');
            iframe.setAttribute('height', '100%');
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allowfullscreen', 'true');
            iframe.setAttribute('allow', 'autoplay; encrypted-media; picture-in-picture');
            iframe.style.position = 'absolute';
            iframe.style.top = '0';
            iframe.style.left = '0';

            ytFacade.innerHTML = '';
            ytFacade.appendChild(iframe);
            ytFacade.style.border = 'none'; // Remove thick border when playing
        });
    }

    // 2. Accordion Gallery Interactions
    const accordionPanels = document.querySelectorAll('.accordion-panel');

    accordionPanels.forEach(panel => {
        // Expand on hover for desktop, click for mobile
        const expandPanel = () => {
            accordionPanels.forEach(p => p.classList.remove('active'));
            panel.classList.add('active');
        };

        panel.addEventListener('mouseenter', expandPanel);
        panel.addEventListener('click', expandPanel);
    });

    console.log("Home page specific JavaScript loaded successfully.");
});
