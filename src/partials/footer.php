<!-- Подвал -->
<footer id="footer">
  <div class="container">
    <div class="footer">
      <div class="row">
        <div class="col-12 col-lg-3 mb-5 mb-lg-0">
          <div class="footer__logo logo logo--footer">
            <a href="index.php">
              <img src="img/logo.svg" alt="" class="logo__image">
            </a>
          </div>
          <!-- /.footer__logo logo -->
        </div>
        <!-- /.col-3 -->

        <div class="col-6">
          <div class="row">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
              <nav class="nav nav--footer">
                <a class="nav__link nav__link--main">Работодателю</a>
                <ul class="nav__list">
                  <li class="nav__item">
                    <a href="outstaff.php" class="nav__link">Аутстаффинг</a>
                  </li>

                  <li class="nav__item">
                    <a href="outsource.php" class="nav__link">Аутсорсинг</a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-lg-6">
              <nav class="nav nav--footer">
                <a href="applicant.php" class="nav__link nav__link--main">Соискателю</a>
                <ul class="nav__list">
                  <li class="nav__item">
                    <a href="applicant.php#vacancy" class="nav__link">Вакансии</a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-6 -->

        <div class="col-6 col-lg-3 col-xxl-2 offset-xxl-1">
          <div class="footer__contact">
            <a href="tel:+79671014433" class="phone mb-2 link">+7 (967) 101 44 33</a>
            <a href="mailto:dial@site.ru" class="email mb-2 link">Dial@site.ru</a>
            <a href="" class="address link" target="_blank">
              г. Москва, улица Матросская Тишина, д.23/7, корпус 1, помещение 3, комната №7, офис 4
            </a>
          </div>
          <!-- /.footer__contact -->
        </div>
        <!-- /.col-2 -->
      </div>
      <!-- /.row -->

      <div class="footer__copyright">
        <span class="year me-5">2021</span>
        <a href="" class="privacy link">Политика конфиденциальности</a>
      </div>
      <!-- /.footer__copyright -->
    </div>
    <!-- /.footer -->
  </div>
  <!-- /.container -->
</footer>

<div class="modal modal-callback micromodal-slide" id="modal-employer" aria-hidden="true">
  <div class="modal__overlay" data-micromodal-close>
    <div class="modal__container" role="dialog" aria-modal="true">
      <header class="modal__header">
        <svg data-micromodal-close class="modal__close" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect data-micromodal-close x="12.6836" y="44.6875" width="45" height="9.42038" transform="rotate(-45 12.6836 44.6875)" fill="white" />
          <rect data-micromodal-close x="19.3457" y="12.6582" width="45" height="9.42038" transform="rotate(45 19.3457 12.6582)" fill="white" />
        </svg>
      </header>

      <main class="modal__content">
        <div class="modal__wrapper">
          <div class="section__header">
            <h2 class="section__title section__title--underline">
              Оставьте заявку
              <br>
              на подбор персонала
            </h2>
          </div>
          <!-- /.section__header -->

          <div class="row">
            <div class="col-12 col-xxl-9">
              <form action="" data-trigger="callback" data-subject="Заявка на подбор персонала" class="callback__form form form-callback">
                <div class="input mb-4">
                  <input data-required placeholder="Ваш номер телефона" autocomplete="off" type="tel" name="user_phone" class="input__field">
                  <img data-tippy-content="Номер телефона не указан или указан с ошибками" class="input__warning" src="img/icons/other/warning.svg" alt="">
                </div>
                <!-- /.input -->

                <div class="input mb-5">
                  <input data-required placeholder="Вас зовут" autocomplete="off" type="text" name="user_name" class="input__field">
                  <img data-tippy-content="Имя не указано или указано с ошибками" class="input__warning" src="img/icons/other/warning.svg" alt="">
                </div>
                <!-- /.input -->

                <button data-sending="Отправка..." class="form__button button button-primary" type="submit">Подобрать персонал</button>
              </form>
            </div>
            <!-- /.col-9 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.modal__wrapper -->

        <div class="modal__picture">
          <img src="img/other/modal/callback.png" alt="" class="modal__image image">
        </div>
        <!-- /.modal__picture -->
      </main>
    </div>
    <!-- /.modal__container -->
  </div>
  <!-- /.modal__overlay -->
</div>
<!-- /.modal -->

<div class="modal modal-callback micromodal-slide" id="modal-callback" aria-hidden="true">
  <div class="modal__overlay" data-micromodal-close>
    <div class="modal__container" role="dialog" aria-modal="true">
      <header class="modal__header">
        <svg data-micromodal-close class="modal__close" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect data-micromodal-close x="12.6836" y="44.6875" width="45" height="9.42038" transform="rotate(-45 12.6836 44.6875)" fill="white" />
          <rect data-micromodal-close x="19.3457" y="12.6582" width="45" height="9.42038" transform="rotate(45 19.3457 12.6582)" fill="white" />
        </svg>
      </header>

      <main class="modal__content">
        <div class="modal__wrapper">
          <div class="section__header">
            <h2 class="section__title section__title--underline">
              Оставьте заявку
              <br>
              и мы перезвоним
            </h2>
          </div>
          <!-- /.section__header -->

          <div class="row">
            <div class="col-12 col-xxl-9">
              <form action="" data-trigger="callback" data-subject="Заявка на подбор персонала" class="callback__form form form-callback">
                <div class="input mb-3 mb-md-4">
                  <input data-required placeholder="Ваш номер телефона" autocomplete="off" type="tel" name="user_phone" class="input__field">
                  <img data-tippy-content="Номер телефона не указан или указан с ошибками" class="input__warning" src="img/icons/other/warning.svg" alt="">
                </div>
                <!-- /.input -->

                <div class="input mb-4 mb-md-5">
                  <input data-required placeholder="Вас зовут" autocomplete="off" type="text" name="user_name" class="input__field">
                  <img data-tippy-content="Имя не указано или указано с ошибками" class="input__warning" src="img/icons/other/warning.svg" alt="">
                </div>
                <!-- /.input -->

                <button data-sending="Отправка..." class="form__button button button-primary" type="submit">Отправить</button>
              </form>
            </div>
            <!-- /.col-9 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.modal__wrapper -->

        <div class="modal__picture">
          <img src="img/other/modal/callback.png" alt="" class="modal__image image">
        </div>
        <!-- /.modal__picture -->
      </main>
    </div>
    <!-- /.modal__container -->
  </div>
  <!-- /.modal__overlay -->
</div>
<!-- /.modal -->

<!-- Скрипты -->
<!-- build:js js/script.min.js -->
<script src="scripts/libraries/lazyload.js"></script>
<script src="scripts/libraries/lodash.js"></script>
<script src="scripts/libraries/handorgel.min.js"></script>
<script src="scripts/libraries/swiper.js"></script>
<script src="scripts/libraries/smoothScroll.js"></script>
<script src="scripts/libraries/micromodal.min.js"></script>
<script src="scripts/libraries/popper.min.js"></script>
<script src="scripts/libraries/tippy.min.js"></script>
<script src="scripts/libraries/imask.js"></script>
<script src="scripts/libraries/forms.js"></script>
<script src="scripts/libraries/aos.min.js"></script>

<script src="scripts/base.js"></script>
<script src="scripts/init.js"></script>
<script src="scripts/main.js"></script>
<script src="scripts/header.js"></script>
<script src="scripts/slider.js"></script>
<!-- endbuild -->
</body>

</html>