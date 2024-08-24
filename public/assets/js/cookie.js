function setCookie(name, value, days) {
    const expires = new Date();
    expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
    const expiresString = "expires=" + expires.toUTCString();
    document.cookie = name + "=" + encodeURIComponent(value) + ";" + expiresString + ";path=/";
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1);
        if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length));
    }
    return null;
}

function showCookieBanner() {
    const banner = document.getElementById('cookie-consent-banner');
    banner.style.display = 'block';
}

function handleCookieConsent() {
    const consentCookie = getCookie('cookie_consent');
    if (!consentCookie) {
        showCookieBanner();
    }

    document.getElementById('accept-cookies').addEventListener('click', function () {
        setCookie('cookie_consent', 'accepted', 365);
        document.getElementById('cookie-consent-banner').style.display = 'none';
    });

    document.getElementById('reject-cookies').addEventListener('click', function () {
        setCookie('cookie_consent', 'rejected', 365);
        document.getElementById('cookie-consent-banner').style.display = 'none';
    });
}

// Initialize cookie consent functionality
handleCookieConsent();















document.addEventListener('DOMContentLoaded', () => {
    // Check if the user has visited before
    if (!localStorage.getItem('modalShown')) {
        // Initialize the Bootstrap modal
        const modalElement = document.getElementById('welcomeModal');
        const modal = new bootstrap.Modal(modalElement);

        // Show the modal
        modal.show();

        // Close button event handler
        document.querySelector('.btn-close').addEventListener('click', () => {
            modal.hide();
            localStorage.setItem('modalShown', 'true');
        });

        // Close the modal if clicking outside of it
        modalElement.addEventListener('hidden.bs.modal', () => {
            localStorage.setItem('modalShown', 'true');
        });
    }
});

