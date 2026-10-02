// =========================================================================
// TRANSLATOR CONTROLLER (ENGLISH <-> HINDI PERSISTENT TOGGLE)
// =========================================================================

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'en,hi',
        autoDisplay: false
    }, 'google_translate_element');
}

function getActiveLanguage() {
    // 1. Check googtrans cookie
    const cookie = document.cookie.split('; ').find(row => row.startsWith('googtrans='));
    if (cookie) {
        const val = cookie.split('=')[1];
        if (val.includes('/hi')) return 'hi';
        if (val.includes('/en')) return 'en';
    }
    // 2. Check localStorage
    return localStorage.getItem('preferred_site_lang') || 'en';
}

function updateTranslatorUI(lang) {
    const desktopLabel = document.getElementById('currentLangLabel');
    const mobileLabels = document.querySelectorAll('.mobileLangLabel');
    
    if (lang === 'hi') {
        if (desktopLabel) desktopLabel.textContent = 'English';
        mobileLabels.forEach(el => el.textContent = 'English');
    } else {
        if (desktopLabel) desktopLabel.textContent = 'हिंदी (Hindi)';
        mobileLabels.forEach(el => el.textContent = 'हिंदी (Hindi)');
    }
}

function applyLanguage(targetLang) {
    localStorage.setItem('preferred_site_lang', targetLang);

    // Set cookies for Google Translate
    document.cookie = `googtrans=/en/${targetLang}; path=/;`;
    if (window.location.hostname && window.location.hostname !== 'localhost') {
        document.cookie = `googtrans=/en/${targetLang}; domain=${window.location.hostname}; path=/;`;
    }

    // Trigger select change if widget is loaded
    const select = document.querySelector('.goog-te-combo');
    if (select) {
        select.value = targetLang;
        select.dispatchEvent(new Event('change'));
    } else {
        // If Google widget hasn't attached yet, reload with the cookie set
        window.location.reload();
    }

    updateTranslatorUI(targetLang);
}

function toggleLanguage() {
    const current = getActiveLanguage();
    const next = current === 'hi' ? 'en' : 'hi';
    applyLanguage(next);
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', () => {
    const current = getActiveLanguage();
    updateTranslatorUI(current);

    // Check if user preferred Hindi previously, ensure cookie is set
    if (current === 'hi') {
        const cookie = document.cookie.split('; ').find(row => row.startsWith('googtrans='));
        if (!cookie || !cookie.includes('/hi')) {
            document.cookie = `googtrans=/en/hi; path=/;`;
        }
    }
});
