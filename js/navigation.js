// Mobile menu toggles. External file (not inline) so a strict CSP needs no 'unsafe-inline'.
document.addEventListener('DOMContentLoaded', function () {
  var mobileMenuButton = document.getElementById('mobile-menu-button');
  var mobileMenu = document.getElementById('mobile-menu');
  var mobileServicesToggle = document.getElementById('mobile-services-toggle');
  var mobileServicesMenu = document.getElementById('mobile-services-menu');

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', function () {
      mobileMenu.classList.toggle('hidden');
    });
  }

  if (mobileServicesToggle && mobileServicesMenu) {
    mobileServicesToggle.addEventListener('click', function () {
      mobileServicesMenu.classList.toggle('hidden');
      var arrow = mobileServicesToggle.querySelector('svg');
      if (arrow) arrow.classList.toggle('rotate-180');
    });
  }
});
