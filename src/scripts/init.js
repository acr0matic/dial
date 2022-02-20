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

const lazyLoadInstance = new LazyLoad({
  elements_selector: '.lazy',
  unobserve_entered: true,
  callback_enter: executeLazyFunction,

  callback_loaded: (trigger) => {
    const container = trigger.closest('div');
    const loader = container.querySelector('.preloader');

    if (loader) loader.classList.add('preloader--hide');
  },
});

function executeLazyFunction(element) {
  const lazyFunctionName = element.getAttribute("data-lazy-function");
  const lazyFunction = window.lazyFunctions[lazyFunctionName];

  if (!lazyFunction) return;

  lazyFunction(element);
}

window.lazyFunctions = {
  map: (element) => {
    const script = document.createElement('script');
    script.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abba9e458779468857cd3b12b19cf2c099ec04ee92926f76c2422f5f8f5348f9f&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=true';

    element.appendChild(script);
  },
};