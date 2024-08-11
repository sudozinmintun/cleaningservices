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