<?php include_once('partials/header.php'); ?>

<main>
  <section style="background-image: url('img/page/contact/hero/background.svg');" id="hero" class="section section--primary">
    <div class="container">
      <div class="hero">
        <div class="hero__content">
          <h1 class="hero__title hero__title--big section__title page__title">
            Свяжитесь
            <br>
            с нами
          </h1>

          <h2 class="hero__subtitle section__subtitle page__subtitle">
            <a href="tel:+79671014433" class="d-block mb-2 link link--nav">+7 (967) 101 44 33</a>
            <a href="mailto:workprofi@site.ru" class="d-block mb-2 link link--nav">workprofi@site.ru</a>
            <a href="tel:+79671014433" class="d-block link link--nav">г. Москва, улица Матросская Тишина, д.23/7, <br> корпус 1, помещение 3, комната №7, офис 4</a>
          </h2>

          <div class="hero__action">
            <button data-micromodal-trigger="modal-callback" class="button button-primary me-2">Посмотреть проезд</button>
          </div>
          <!-- /.hero__action -->
        </div>
        <!-- /.hero__content -->

        <div class="hero__picture hero__picture--big ">
          <img class="hero__image hero__image--animated image" src="img/page/applicant/hero/illustration.png" alt="">
        </div>
        <!-- /.hero__picture -->
      </div>
      <!-- /.hero -->
    </div>
    <!-- /.container -->
  </section>

  <section id="callback" class="section section--last">
    <div class="container">
      <div class="callback">
        <div class="row">
          <div class="col-12 col-lg-6 mb-5 mb-lg-0">
            <div class="section__header">
              <h2 class="section__title section__title--underline">
                Либо оставьте
                <br>
                свои контакты
              </h2>
            </div>
            <!-- /.section__header -->

            <div class="row">
              <div class="col-12 col-xxl-9">
                <form action="php/mail.php" data-target="callback" data-subject="Заявка на подбор персонала" class="callback__form form form-callback">
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

                  <button data-sending="Отправка..." class="form__button button button-primary" type="submit">Перезвоните мне</button>
                </form>
              </div>
              <!-- /.col-9 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.col-6 -->

          <div class="col-12 col-lg-6">
            <div class="callback__picture">
              <img src="img/page/contact/callback/picture.png" alt="" class="callback__image image">
            </div>
            <!-- /.callback__picture -->
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