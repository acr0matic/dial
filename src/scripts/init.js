const accordion = document.querySelectorAll('.handorgel')
_.forEach(accordion, (item) => new handorgel(item));

const scrollController = new SmoothScroll('a[href*="#"]', {
  speed: 300,
});

tippy('[data-tippy-content]', {
  allowHTML: true,
  maxWidth: 300,
  theme: 'flat',
  placement: 'left',
});

const forms = document.querySelectorAll('form');
_.forEach(forms, form => new Form(form));

MicroModal.init(modalParams);