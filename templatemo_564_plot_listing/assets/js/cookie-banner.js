// Cookie Banner JavaScript
document.addEventListener('DOMContentLoaded', function() {
  const cookieBanner = document.getElementById('cookieBanner');
  const acceptCookiesBtn = document.getElementById('acceptCookies');
  const rejectCookiesBtn = document.getElementById('rejectCookies');

  // Check if user has already made a choice
  const cookieConsent = localStorage.getItem('cookieConsent');
  
  if (!cookieConsent) {
    // Show banner if no previous choice
    cookieBanner.classList.add('show');
  }

  // Accept cookies
  if (acceptCookiesBtn) {
    acceptCookiesBtn.addEventListener('click', function() {
      localStorage.setItem('cookieConsent', 'accepted');
      cookieBanner.classList.remove('show');
      
      // Here you can initialize analytics or other tracking
      console.log('Cookies accepted');
    });
  }

  // Reject cookies
  if (rejectCookiesBtn) {
    rejectCookiesBtn.addEventListener('click', function() {
      localStorage.setItem('cookieConsent', 'rejected');
      cookieBanner.classList.remove('show');
      console.log('Cookies rejected');
    });
  }
});
