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
