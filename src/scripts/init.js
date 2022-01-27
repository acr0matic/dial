const accordion = document.querySelectorAll('.handorgel')
_.forEach(accordion, (item) => new handorgel(item));

const scrollController = new SmoothScroll('a[href*="#"]', {
  speed: 300,
});

tippy('img[data-tippy-content]', {
  allowHTML: true,
  maxWidth: 300,
  theme: 'flat-black',
  placement: 'left',
});

tippy('div[data-tippy-content]', {
  allowHTML: true,
  maxWidth: 300,
  theme: 'flat-white',
});

const forms = document.querySelectorAll('form');
_.forEach(forms, form => new Form(form));

MicroModal.init(modalParams);

AOS.init({
  once: true,
});