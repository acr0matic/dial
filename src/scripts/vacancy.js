const vacancies = document.querySelectorAll('.vacancy__item');
const vacancyModal = document.getElementById('modal-vacancy');

if (vacancies && vacancyModal) {
  const form = vacancyModal.querySelector('.form');

  _.forEach(vacancies, (vacancy) => {
    const title = vacancy.querySelector('.vacancy__title')
    const button = vacancy.querySelector('.button-primary');

    button.addEventListener('click', () => {
      form.dataset.additional = title.innerHTML;
    });
  })
}