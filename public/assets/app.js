const animateProductCards = () => {
  const cards = document.querySelectorAll('[data-product-card]');
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (!cards.length) {
    return;
  }

  if (prefersReduced) {
    cards.forEach((card) => {
      card.style.opacity = 1;
      card.style.transform = 'none';
    });
    return;
  }

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('product-card--visible');
          obs.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.2,
      rootMargin: '0px 0px -50px 0px'
    }
  );

  cards.forEach((card, index) => {
    card.style.transitionDelay = `${index * 80}ms`;
    observer.observe(card);
  });
};

window.addEventListener('DOMContentLoaded', animateProductCards);
