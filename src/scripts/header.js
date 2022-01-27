const header = document.getElementById('header');
const sectionNav = header.querySelector('.nav__additional .nav__list');

if (sectionNav) {
  sectionNav.innerHTML = '';

  const sections = document.querySelectorAll('[data-name]');
  _.forEach(sections, (section) => {
    const name = section.dataset.name;
    const href = '#' + section.id;

    sectionNav.innerHTML += `<li class="nav__item"><a class="nav__link" href="${href}">${name}</a></li>`
  });
}

const widget = document.getElementById('widget');
const widgetIcons = document.querySelectorAll('.widget__link--hide')

widget.addEventListener('click', () => {
  _.forEach(widgetIcons, icon => {
    icon.classList.toggle('widget__link--hide');
  })
});

_.forEach(['click', 'touchstart'], evt => {
  window.addEventListener(evt, (e) => {
    if (!widget.contains(e.target))
      _.forEach(widgetIcons, icon => icon.classList.add('widget__link--hide'));
  })
});


const heroBlock = document.getElementById('hero');

let scrollPosition = window.pageYOffset;
window.addEventListener('scroll',
  () => {
    scrollPosition = window.pageYOffset;
    const heroHeight = heroBlock ? heroBlock.offsetHeight : null;

    if (window.scrollY >= heroHeight) header.classList.add('header-scroll--shadow');
    else header.classList.remove('header-scroll--shadow')
  });

/* Логика для мобильного меню */
const mobileMenuButton = document.querySelector('.header__mobile');
const mobileBurger = mobileMenuButton.querySelector('.hamburger')
const mobileMenu = document.getElementById('mobile-menu');
const mobileOverlay = mobileMenu.querySelector('.mobile-menu__overlay');
const mobileCallback = mobileMenu.querySelector('button');

const mobileClasses = {
  "open": "mobile-menu--open",
  "burger": "is-active",
  "header": "header-scroll--shadow",
  "overflow": "body-overflow",
}

mobileMenuButton.addEventListener('click', () => {
  mobileBurger.classList.toggle(mobileClasses.burger);
  mobileMenu.classList.toggle(mobileClasses.open);

  if (header.classList.contains(mobileClasses.header)) {
    setTimeout(() => {
      header.classList.toggle(mobileClasses.header)
      document.body.classList.toggle(mobileClasses.overflow);
    }, 500);
  }

  else {
    header.classList.toggle(mobileClasses.header)
    document.body.classList.toggle(mobileClasses.overflow);
  }
});

mobileOverlay.addEventListener('click', () => {
  mobileBurger.classList.remove(mobileClasses.burger);
  mobileMenu.classList.remove(mobileClasses.open);

  if (header.classList.contains(mobileClasses.header)) {
    setTimeout(() => {
      header.classList.remove(mobileClasses.header)
      document.body.classList.remove(mobileClasses.overflow);
    }, 500);
  }

  else {
    header.classList.remove(mobileClasses.header)
    document.body.classList.remove(mobileClasses.overflow);
  }
});
