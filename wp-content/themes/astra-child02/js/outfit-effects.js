// Mobile tap-to-reveal overlay (with second-tap navigation)
document.addEventListener('DOMContentLoaded', () => {
  if (window.innerWidth > 768) return; // desktop skip

  document.querySelectorAll('.outfit-card').forEach(card => {
    const link = card.querySelector('a');

    card.addEventListener('click', e => {
      // If overlay not active yet → first tap
      if (!card.classList.contains('is-active')) {
        e.preventDefault(); // stop navigation
        // close other cards
        document.querySelectorAll('.outfit-card.is-active')
          .forEach(c => c.classList.remove('is-active'));

        card.classList.add('is-active');
      }
      // else → second tap → allow link to work normally
    });
  });
});

// Mobile tap-to-toggle overlay
document.addEventListener('DOMContentLoaded', () => {
  if (window.innerWidth > 768) return; // desktop skip

  document.querySelectorAll('.outfit-card').forEach(card => {
    card.addEventListener('click', e => {
      e.preventDefault(); // stop link navigation on first tap

      // Close other open cards
      document.querySelectorAll('.outfit-card.is-active')
        .forEach(c => {
          if (c !== card) c.classList.remove('is-active');
        });

      // Toggle current card
      card.classList.toggle('is-active');
    });
  });
});
