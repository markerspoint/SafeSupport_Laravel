import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const faders = document.querySelectorAll('.fade');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        } else {
          entry.target.classList.remove('visible');  // Remove this line if you want fade-in only
        }
      });
    }, {
      threshold: 0.1 // Trigger when 10% visible
    });

    faders.forEach(fader => {
      observer.observe(fader);
    });
  });
