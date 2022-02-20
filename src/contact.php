<?php include_once('partials/header.php'); ?>

<main>
  <section style="background-image: url('img/page/contact/hero/background.svg');" id="hero" class="position-relative section section--primary">
    <div class="container">
      <div class="hero position-static">
        <div class="hero__content">
          <h1 class="hero__title hero__title--big section__title page__title">
            Свяжитесь
            <br>
            с нами
          </h1>

          <h2 class="hero__subtitle section__subtitle page__subtitle">
            <span class="d-block mb-2">Основной: <a href="tel:+79671014433" class="link link--nav">+7 (967) 101 44 33</a></span>
            <span class="d-block mb-2">Дополнительный: <a href="tel:+79671014433" class="link link--nav">+7 (925) 461 80 83</a></span>
            <a href="mailto:workprofi@site.ru" class="d-block mb-2 link link--nav">applicant@dial-personal.ru</a>
            <a href="https://yandex.ru/maps/-/CCU5VPRHKA" target="_blank" class="d-block mb-2 link link--nav">г. Москва, м. Новые Черёмушки, ул. Профсоюзная, <br> д.56, БЦ "Cherry Taue"</a>
            <span>Работаем: Пн. - Пт. 10.00 - 18.00 </span>
          </h2>

          <div class="hero__action">
            <button data-micromodal-trigger="modal-callback" class="button button-primary me-2">Написать нам</button>
          </div>
          <!-- /.hero__action -->
        </div>
        <!-- /.hero__content -->

        <div class="hero__map lazy" data-lazy-function="map">
          <img src="img/misc/preloader.svg" class="preloader" alt="">
        </div>
        <!-- /.map -->
      </div>
      <!-- /.hero -->
    </div>
    <!-- /.container -->
  </section>

  <section data-name="Как добраться" id="path" class="section">
    <div class="container">
      <div class="section__header">
        <h2 class="section__title section__title--underline">Как до нас добраться</h2>
      </div>
      <!-- /.section__header -->

      <div class="path">
        <ul class="list list--big">
          <div class="row">
            <div class="col-12 col-lg-5 mb-3 mb-lg-4">
              <li class="list__item">Заселение в день обращения. Бесплатное проживание в общежитии, в 2 минутах от работы</li>
            </div>
            <!-- /.col-5 -->

            <div class="col-12 col-lg-5 offset-lg-1 mb-3 mb-lg-4">
              <li class="list__item">4-х местные комнаты с деревянными кроватями (новое постельное белье, новые матрасы)</li>
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-lg-5 mb-3 mb-lg-0">
              <li class="list__item">Вся бытовая техника (холодильник, стиральные машина)</li>
            </div>
            <!-- /.col-5 -->

            <div class="col-12 col-lg-5 offset-lg-1">
              <li class="list__item">Индивидуальные шкафчики для рабочих</li>
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </ul>
      </div>
      <!-- /.path -->
    </div>
    <!-- /.container -->
  </section>

  <section data-name="Написать нам" id="callback" class="section section--last">
    <div class="container">
      <div class="callback">
        <div class="row">
          <div class="col-12 mb-5 mb-lg-0">
            <div class="section__header">
              <h2 class="section__title section__title--underline">
                Напишите нам
              </h2>
            </div>
            <!-- /.section__header -->

            <p class="about__description">
              Мы специализируемся на предоставлении услуг аутстафинга и аутсорсинга, организации бригад работников для складской логистики, общественного питания, торговли, производства и оперативном управлении этими бригадами.
            </p>

            <form action="php/mail.php" data-target="message" data-subject="Поступило сообщение" class="callback__form form form-message">
              <div class="row mb-5">
                <div class="col-12 col-lg-5 mb-3 mb-lg-0">
                  <div class="input mb-3 mb-md-4">
                    <input data-required placeholder="Ваш номер телефона" autocomplete="off" type="tel" name="user_phone" class="input__field">
                    <img data-tippy-content="Номер телефона не указан или указан с ошибками" class="input__warning" src="img/icons/other/warning.svg" alt="">
                  </div>
                  <!-- /.input -->

                  <div class="input mb-3 mb-md-4">
                    <input data-required placeholder="Как к вам обращаться" autocomplete="off" type="text" name="user_name" class="input__field">
                    <img data-tippy-content="Имя не указано или указано с ошибками" class="input__warning" src="img/icons/other/warning.svg" alt="">
                  </div>
                  <!-- /.input -->

                  <div class="input">
                    <input data-required placeholder="Какую компанию представляете" autocomplete="off" type="text" name="user_company" class="input__field">
                    <img data-tippy-content="Имя не указано или указано с ошибками" class="input__warning" src="img/icons/other/warning.svg" alt="">
                  </div>
                  <!-- /.input -->
                </div>
                <!-- /.col-6 -->

                <div class="col-12 col-lg-7">
                  <div class="input input--box mb-4 mb-md-5">
                    <textarea rows="6" data-required placeholder="Опишите вопрос или предложение" autocomplete="off" name="user_message" class="input__field"></textarea>
                    <img data-tippy-content="Имя не указано или указано с ошибками" class="input__warning" src="img/icons/other/warning.svg" alt="">
                  </div>
                  <!-- /.input -->
                </div>
                <!-- /.col-6 -->
              </div>
              <!-- /.row -->

              <button data-sending="Отправка..." class="form__button button button-primary" type="submit">Отправить</button>
            </form>
          </div>
          <!-- /.col-9 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.col-6 -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.callback -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include_once('partials/footer.php'); ?>