'use strict';
(() => {
  if (!document.querySelector('link[data-xlx-support-style]')) {
    const style = document.createElement('link');
    style.rel = 'stylesheet';
    style.href = 'assets/support-native.css?v=20260901_public';
    style.dataset.xlxSupportStyle = '1';
    document.head.appendChild(style);
  }
  document.querySelectorAll('.support-page a[href^="#"]').forEach(link => {
    link.addEventListener('click', event => {
      const target = document.querySelector(link.getAttribute('href'));
      if (!target) return;
      event.preventDefault();
      target.scrollIntoView({behavior:'smooth', block:'start'});
    });
  });
})();
