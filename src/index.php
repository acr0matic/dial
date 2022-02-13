<?php include_once('partials/header.php'); ?>

<!-- Основной контент -->
<main>
  <section style="background-image: url('img/page/main/hero/background.svg');" id="hero" class="section section--primary">
    <div class="container">
      <div class="hero">
        <div class="hero__content">
          <h1 class="hero__title section__title page__title">
            Требуется нанять персонал, <br>
            но нет времени на оформление <br>
            и ведение бухгалтерии?
          </h1>

          <h2 class="hero__subtitle section__subtitle page__subtitle">
            Найм персонала от 10-ти человек –
            <br>
            через 3 дня первые собеседования
          </h2>

          <div class="hero__action">
            <button data-micromodal-trigger="modal-callback" class="button button-primary me-2">Подобрать персонал</button>
            <button onclick="window.location.href='applicant.php#vacancy'" class="button button-outline">Вакансии</button>
          </div>
          <!-- /.hero__action -->
        </div>
        <!-- /.hero__content -->

        <div class="hero__picture">
          <img class="hero__image hero__image--animated image" src="img/page/main/hero/illustration.png" alt="">
        </div>
        <!-- /.hero__picture -->
      </div>
      <!-- /.hero -->
    </div>
    <!-- /.container -->
  </section>

  <section data-name="Задачи" id="textblock" class="section">
    <div class="container">
      <div class="textblock">
        <div class="row flex-column-reverse flex-lg-row">
          <div class="col-12 col-lg-7 position-relative">
            <div class="textblock__picture">
              <img src="img/page/main/textblock/picture.png" alt="" class="textblock__image image">
            </div>
            <!-- /.textblock__picture -->

            <div class="tooltip tooltip--animated tooltip-employer tooltip-employer--hr" data-tippy-content="Я сотрудник кадрового отдела, нахожу кандидатов на ваши вакансии, провожу собеседования и координирую сотрудников до места работы"></div>
            <div class="tooltip tooltip--animated tooltip-employer tooltip-employer--hr2" data-tippy-content="А я занимаюсь рекламой, размещаю вакансии на самых разных площадках, чтобы соискатели находили самые лучшие вакансии!"></div>
            <div class="tooltip tooltip--animated tooltip-employer tooltip-employer--hr3" data-tippy-content="Привет! А я менеджер объекта, в мои обязанности входит: составление графика работы и контроль его исполнения; ведение табелей учета рабочего времени и контроль качества работы персонала!"></div>
            <div class="tooltip tooltip--animated tooltip-employer tooltip-employer--hr4" data-tippy-content="А я сотрудник офиса! Я веду деловые переписки с представителями объектов и решаю все вытекающие вопросы. "></div>
          </div>
          <!-- /.col-7 -->

          <div class="col-12 col-lg-5 ps-lg-5 ps-xxl-0">
            <div class="section__header">
              <h2 class="section__title section__title--underline">
                Какие задачи мы
                <br>
                берем на себя?
              </h2>
            </div>
            <!-- /.section__header -->

            <div class="textblock__content">
              <ul class="textblock__list list list--big">
                <li class="list__item">
                  Массовый подбор
                  <br>
                  персонала
                </li>

                <li class="list__item">
                  Координация,
                  <br>
                  контроль персонала
                </li>

                <li class="list__item">
                  Подготовка бюджета
                  <br>
                  и бизнес плана проекта
                </li>

                <li class="list__item">
                  Взаимодействие
                  <br>
                  с подразделениями компании
                </li>

                <li class="list__item">
                  Учёт рабочего времени,
                  <br>
                  ведение реестров/таблиц,
                </li>

                <li class="list__item">
                  Адаптация, мотивация,
                  <br>
                  аттестация персонала
                </li>
              </ul>
            </div>
            <!-- /.textblock__content -->
          </div>
          <!-- /.col-5 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.textblock -->
    </div>
    <!-- /.container -->
  </section>

  <section data-name="Этапы" id="step" class="section">
    <div class="container">
      <div class="step">
        <div class="section__header">
          <h2 class="section__title section__title--underline">Этапы работы</h2>
        </div>
        <!-- /.section__header -->

        <div class="swiper swiper--mobile slider-step">
          <div class="swiper-wrapper row">
            <div class="swiper-slide col-12 col-lg-6 step__col">
              <div class="step__item card">
                <div class="step__content">
                  <h3 class="step__title">Заявка</h3>
                  <p class="step__description">
                    Вы оставляете заявку
                    о сотрудничестве на нашем сайте - мы свяжемся с вами в удобное для вас время, чтобы уточнить детали - сколько персонала вам требуется, под какие задачи и прочее
                  </p>
                </div>
                <!-- /.step__content -->

                <div class="step__picture">
                  <img src="img/page/main/step/1.png" alt="" class="step__image image">
                </div>
                <!-- /.step__picture -->
              </div>
              <!-- /.step__item -->
            </div>
            <!-- /.col-6 -->

            <div class="swiper-slide col-12 col-lg-6 step__col">
              <div class="step__item card">
                <div class="step__content">
                  <h3 class="step__title">Встреча</h3>
                  <p class="step__description">
                    Встретимся с Вами в любом удобном, для вас месте для обсуждения всех деталей проекта
                  </p>
                </div>
                <!-- /.step__content -->

                <div class="step__picture">
                  <img src="img/page/main/step/2.png" alt="" class="step__image image">
                </div>
                <!-- /.step__picture -->
              </div>
              <!-- /.step__item -->
            </div>
            <!-- /.col-6 -->

            <div class="swiper-slide col-12 col-lg-6 step__col">
              <div class="step__item card">
                <div class="step__content">
                  <h3 class="step__title">Подписание договора</h3>
                  <p class="step__description">
                    Составим индивидуальный договор и подпишем его в двухстороннем порядке
                  </p>
                </div>
                <!-- /.step__content -->

                <div class="step__picture">
                  <img src="img/page/main/step/3.png" alt="" class="step__image image">
                </div>
                <!-- /.step__picture -->
              </div>
              <!-- /.step__item -->
            </div>
            <!-- /.col-6 -->

            <div class="swiper-slide col-12 col-lg-6 step__col">
              <div class="step__item card">
                <div class="step__content">
                  <h3 class="step__title">Заявка на количество людей</h3>
                  <p class="step__description">
                    Мы приступаем к набору <br>
                    сотрудников, через 3 дня после <br>
                    подписания договора предоставляем <br>
                    первых работников для <br>
                    собеседования
                  </p>
                </div>
                <!-- /.step__content -->

                <div class="step__picture">
                  <img src="img/page/main/step/4.png" alt="" class="step__image image">
                </div>
                <!-- /.step__picture -->
              </div>
              <!-- /.step__item -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->

          <div class="swiper-pagination"></div>
        </div>
        <!-- /.swiper swiper--mobile -->
      </div>
      <!-- /.step -->
    </div>
    <!-- /.container -->
  </section>

  <section data-name="Услуги" id="service" class="section">
    <div class="container">
      <div class="service">
        <div class="section__wrapper">
          <div class="service__col">
            <div class="service__content">
              <h2 class="service__title section__title">Аутстаффинг</h2>
              <p class="service__description">
                Найм сотрудников в собственную
                <br>
                фирму с трудоустройством в компании
                <br>
                провайдера
              </p>

              <div class="service__action">
                <button onclick="window.location.href='outstaff.php'" class="service__button button button-outline">Подробнее</button>
                <img class="service__icon" src="img/page/main/service/outstaff.svg" alt="">
              </div>
              <!-- /.service__action -->
            </div>
            <!-- /.service__content -->
          </div>
          <!-- /.service__col -->
          <div class="section__picture">
            <img src="img/page/main/service/background/outstaff/circle.svg" alt="" class="section__image image">
            <img src="img/page/main/service/background/outstaff/circle--big.svg" alt="" class="section__image image">
          </div>
          <!-- /.section__picture -->
        </div>
        <!-- /.section__wrapper -->

        <div class="section__wrapper">
          <div class="service__col">
            <div class="service__content">
              <h2 class="service__title section__title">Аутсорсинг</h2>
              <p class="service__description">
                Передача некоторых функций
                <br>
                специалистам другой компании
                <br>
                на основе договора
              </p>

              <div class="service__action">
                <button onclick="window.location.href='outsource.php'" class="service__button button button-outline">Подробнее</button>
                <img class="service__icon" src="img/page/main/service/outsource.svg" alt="">
              </div>
              <!-- /.service__action -->
            </div>
            <!-- /.service__content -->
          </div>
          <!-- /.service__col -->

          <div class="section__picture">
            <img src="img/page/main/service/background/outsource/rectangle.svg" alt="" class="section__image image">
            <img src="img/page/main/service/background/outsource/triangle.svg" alt="" class="section__image image">
          </div>
          <!-- /.section__picture -->
        </div>
        <!-- /.section__wrapper -->
      </div>
      <!-- /.service -->
    </div>
    <!-- /.container -->
  </section>

  <section data-name="О нас" id="about" class="section">
    <div class="about">
      <div class="container">
        <div class="about__logo logo logo--about">
          <img src="img/logo.svg" alt="" class="logo__image">
        </div>
        <!-- /.about__logo -->

        <div class="row">
          <div class="col-12 col-lg-7 col-xxl-6">
            <p class="about__description">
              Мы специализируемся на предоставлении услуг аутстафинга и аутсорсинга, организации бригад работников для складской логистики, общественного питания, торговли, производства и оперативном управлении этими бригадами.
            </p>
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->

      <div class="about__picture">
        <img src="img/page/main/about/picture.jpg" alt="" class="about__image image image--cover">
      </div>
      <!-- /.about__picture -->
    </div>
    <!-- /.about -->
  </section>

  <section data-name="Почему мы" id="advantage" class="section">
    <div class="container">
      <div class="section__header text-center">
        <h2 class="section__title section__title--underline">Почему к нам обращаются?</h2>
      </div>
      <!-- /.section__header -->

      <div class="advantage">
        <div class="row">
          <div class="col-12 col-lg-4 mb-4 mb-lg-5" data-aos="fade-up">
            <div class="advantage__item">
              <img src="img/page/main/advantage/chat.svg" alt="" class="advantage__icon image">
              <h3 class="advantage__title">
                Индивидуальный
                <br>
                менеджер
              </h3>
              <p class="advantage__description">
                Вашим заказом будет заниматься
                <br>
                один менеджер - не будет суеты
                <br>
                и неразберихи в процессе работы
              </p>
            </div>
            <!-- /.advantage__item -->
          </div>
          <!-- /.col-4 -->

          <div class="col-12 col-lg-4 mb-4 mb-lg-5" data-aos="fade-up">
            <div class="advantage__item">
              <img src="img/page/main/advantage/employer.svg" alt="" class="advantage__icon image">
              <h3 class="advantage__title">
                Быстрая замена
                <br>
                сотрудника
              </h3>
              <p class="advantage__description">
                В течение 2 часов. Бесплатная
                <br>
                замена сотрудника в течение
                <br>
                гарантийного срока
              </p>
            </div>
            <!-- /.advantage__item -->
          </div>
          <!-- /.col-4 -->

          <div class="col-12 col-lg-4" data-aos="fade-up">
            <div class="advantage__item">
              <img src="img/page/main/advantage/time.svg" alt="" class="advantage__icon image">
              <h3 class="advantage__title">
                Работаем без
                <br>
                выходных
              </h3>
              <p class="advantage__description">
                Работа не приостановится
                <br>
                в самый важный момент - рабочий
                <br>
                план будет выполнен в срок
              </p>
            </div>
            <!-- /.advantage__item -->
          </div>
          <!-- /.col-4 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.advantage -->
    </div>
    <!-- /.container -->
  </section>

  <section data-name="Партнеры" id="partners" class="section">
    <div class="container">
      <div class="section__header">
        <h2 class="section__title section__title--underline">Нам доверяют</h2>
      </div>
      <!-- /.section__header -->

      <div class="partners">
        <div class="slider">
          <div class="swiper slider-partners partners__slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="partners__item">
                  <div class="partners__picture">
                    <img class="partners__image image" src="img/page/main/partners/1.jpg" alt="">
                  </div>
                  <!-- /.partners__picture -->
                </div>
                <!-- /.partners__item -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="partners__item">
                  <div class="partners__picture">
                    <img class="partners__image image" src="img/page/main/partners/2.jpg" alt="">
                  </div>
                  <!-- /.partners__picture -->
                </div>
                <!-- /.partners__item -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="partners__item">
                  <div class="partners__picture">
                    <img class="partners__image image" src="img/page/main/partners/3.jpg" alt="">
                  </div>
                  <!-- /.partners__picture -->
                </div>
                <!-- /.partners__item -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="partners__item">
                  <div class="partners__picture">
                    <img class="partners__image image" src="img/page/main/partners/4.jpg" alt="">
                  </div>
                  <!-- /.partners__picture -->
                </div>
                <!-- /.partners__item -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="partners__item">
                  <div class="partners__picture">
                    <img class="partners__image image" src="img/page/main/partners/5.jpg" alt="">
                  </div>
                  <!-- /.partners__picture -->
                </div>
                <!-- /.partners__item -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper slider-partners -->

          <div class="swiper__control">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <!-- /.swiper__control -->
        </div>
        <!-- /.partners__slider slider -->
      </div>
      <!-- /.partners -->
    </div>
    <!-- /.container -->
  </section>

  <section data-name="Отзывы" id="feedback" class="section">
    <div class="container">
      <div class="section__header">
        <h2 class="section__title section__title--underline">Что о нас говорят</h2>
      </div>
      <!-- /.section__header -->

      <div class="feedback">
        <div class="swiper swiper--mobile slider-feedback">
          <div class="swiper-wrapper row">
            <div class="swiper-slide col-12 col-lg-6 mb-4">
              <div class="feedback__item card">
                <div class="feedback__content">
                  <p class="feedback__text">
                    Много где оставляли запрос на набор персонала - все доски объявлений, но толку никакого. Тут нам всего за 5 дней подобрали 30 фасовщиков. Что приятно - менеджер Александр все время держал в курсе набора помогал с документами.
                  </p>
                </div>
                <!-- /.feedback__content -->

                <div class="feedback__footer">
                  <div class="feedback__avatar">
                    <img src="img/page/main/feedback/1.jpg" alt="" class="feedback__image image">
                  </div>

                  <div class="feedback__info">
                    <span class="feedback__name">Захаренко Алексей</span>
                    <span class="feedback__company">ООО «КОМАЛЬФА»</span>
                  </div>
                  <!-- /.feedback__info -->
                </div>
                <!-- /.feedback__footer -->
              </div>
              <!-- /.feedback__item -->
            </div>
            <!-- /.col-6 -->

            <div class="swiper-slide col-12 col-lg-6 mb-4">
              <div class="feedback__item card">
                <div class="feedback__content">
                  <p class="feedback__text">
                    Под Новый Год был сезонный загруз. Требовался персонал, но оформлять его к себе в фирму было слишком проблематично из-за бумажной волокиты. Очень быстро набрали сотрудников и подготовили поставку вовремя.
                  </p>
                </div>
                <!-- /.feedback__content -->

                <div class="feedback__footer">
                  <div class="feedback__avatar">
                    <img src="img/page/main/feedback/2.jpg" alt="" class="feedback__image image">
                  </div>

                  <div class="feedback__info">
                    <span class="feedback__name">Коротков Максим</span>
                    <span class="feedback__company">ООО «Алмаз»</span>
                  </div>
                  <!-- /.feedback__info -->
                </div>
                <!-- /.feedback__footer -->
              </div>
              <!-- /.feedback__item -->
            </div>
            <!-- /.col-6 -->

            <div class="swiper-slide col-12 col-lg-6">
              <div class="feedback__item card">
                <div class="feedback__content">
                  <p class="feedback__text">
                    В какой то момент осознала, что почти все время уходит на набор персонала, вместо развития фирмы. Из-за этого начали потихоньку падать объемы продаж. Открыла для себя отличный вариант - аутстаффинг. Освободил меня от лишней головной боли. Спасибо.
                  </p>
                </div>
                <!-- /.feedback__content -->

                <div class="feedback__footer">
                  <div class="feedback__avatar">
                    <img src="img/page/main/feedback/3.jpg" alt="" class="feedback__image image">
                  </div>

                  <div class="feedback__info">
                    <span class="feedback__name">Шельянова Ольга</span>
                    <span class="feedback__company">ООО «Олт»</span>
                  </div>
                  <!-- /.feedback__info -->
                </div>
                <!-- /.feedback__footer -->
              </div>
              <!-- /.feedback__item -->
            </div>
            <!-- /.col-6 -->

            <div class="swiper-slide col-12 col-lg-6">
              <div class="feedback__item card">
                <div class="feedback__content">
                  <p class="feedback__text">
                    Когда юристы показали мне сколько уходит на налоговые вычеты - я была в ужасе. Особенно в разгаре локдауна это серьезно било по бюджету. Обратились в Диал за аутстаффингом. Персонал очень достойный, а главное мы решили основной запрос - легально сократили выплаты.
                  </p>
                </div>
                <!-- /.feedback__content -->

                <div class="feedback__footer">
                  <div class="feedback__avatar">
                    <img src="img/page/main/feedback/4.jpg" alt="" class="feedback__image image">
                  </div>

                  <div class="feedback__info">
                    <span class="feedback__name">Линдер Юлия</span>
                    <span class="feedback__company">ООО «Москва»</span>
                  </div>
                  <!-- /.feedback__info -->
                </div>
                <!-- /.feedback__footer -->
              </div>
              <!-- /.feedback__item -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->

          <div class="swiper-pagination"></div>
        </div>
        <!-- /.swiper swiper--mobile slider-feedback -->
      </div>
      <!-- /.step -->
    </div>
    <!-- /.container -->
  </section>

  <section data-name="Частые вопросы" id="faq" class="section">
    <div class="section__wrapper">
      <div class="faq">
        <div class="container">
          <div class="section__header">
            <h2 class="section__title">Частые вопросы</h2>
          </div>
          <!-- /.section__header -->

          <div class="row">
            <div class="col-12 col-md-6 mb-2 mb-lg-3">
              <div class="handorgel handorgel--block">
                <h3 class="handorgel__header">
                  <button class="handorgel__header__button">
                    <div class="handorgel__header__text">
                      На ком лежит ответственной за персонал
                    </div>
                    <!-- /.handorgel__header__text -->

                    <div class="handorgel__indicator">
                      <img alt="" class="handorgel__arrow" src="img/icons/control/arrow__dropdown.svg">
                    </div>
                    <!-- /.handorgel__indicator -->
                  </button>
                </h3>

                <div class="handorgel__content">
                  <div class="handorgel__content__inner">
                    Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Он большой составитель возвращайся подпоясал на берегу вершину взобравшись мир имеет.
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-md-6 mb-2 mb-lg-3">
              <div class="handorgel handorgel--block">
                <h3 class="handorgel__header">
                  <button class="handorgel__header__button">
                    <div class="handorgel__header__text">
                      Какой персонал вы можете найти
                    </div>
                    <!-- /.handorgel__header__text -->

                    <div class="handorgel__indicator">
                      <img alt="" class="handorgel__arrow" src="img/icons/control/arrow__dropdown.svg">
                    </div>
                    <!-- /.handorgel__indicator -->
                  </button>
                </h3>

                <div class="handorgel__content">
                  <div class="handorgel__content__inner">
                    Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Он большой составитель возвращайся подпоясал на берегу вершину взобравшись мир имеет.
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-md-6 mb-2 mb-lg-3">
              <div class="handorgel handorgel--block">
                <h3 class="handorgel__header">
                  <button class="handorgel__header__button">
                    <div class="handorgel__header__text">
                      Когда нельзя предоставлять сотрудников
                    </div>
                    <!-- /.handorgel__header__text -->

                    <div class="handorgel__indicator">
                      <img alt="" class="handorgel__arrow" src="img/icons/control/arrow__dropdown.svg">
                    </div>
                    <!-- /.handorgel__indicator -->
                  </button>
                </h3>

                <div class="handorgel__content">
                  <div class="handorgel__content__inner">
                    Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Он большой составитель возвращайся подпоясал на берегу вершину взобравшись мир имеет.
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-md-6 mb-2 mb-lg-3">
              <div class="handorgel handorgel--block">
                <h3 class="handorgel__header">
                  <button class="handorgel__header__button">
                    <div class="handorgel__header__text">
                      Какие гарантии на услуги вы даете
                    </div>
                    <!-- /.handorgel__header__text -->

                    <div class="handorgel__indicator">
                      <img alt="" class="handorgel__arrow" src="img/icons/control/arrow__dropdown.svg">
                    </div>
                    <!-- /.handorgel__indicator -->
                  </button>
                </h3>

                <div class="handorgel__content">
                  <div class="handorgel__content__inner">
                    Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Он большой составитель возвращайся подпоясал на берегу вершину взобравшись мир имеет.
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-md-6 mb-2 mb-lg-3">
              <div class="handorgel handorgel--block">
                <h3 class="handorgel__header">
                  <button class="handorgel__header__button">
                    <div class="handorgel__header__text">
                      В чем отличие аутсорсинга
                      от аутстаффинга
                    </div>
                    <!-- /.handorgel__header__text -->

                    <div class="handorgel__indicator">
                      <img alt="" class="handorgel__arrow" src="img/icons/control/arrow__dropdown.svg">
                    </div>
                    <!-- /.handorgel__indicator -->
                  </button>
                </h3>

                <div class="handorgel__content">
                  <div class="handorgel__content__inner">
                    Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Он большой составитель возвращайся подпоясал на берегу вершину взобравшись мир имеет.
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-md-6 mb-3">
              <div class="handorgel handorgel--block">
                <h3 class="handorgel__header">
                  <button class="handorgel__header__button">
                    <div class="handorgel__header__text">
                      Кто имеет право предоставлять аутстаффинг
                    </div>
                    <!-- /.handorgel__header__text -->

                    <div class="handorgel__indicator">
                      <img alt="" class="handorgel__arrow" src="img/icons/control/arrow__dropdown.svg">
                    </div>
                    <!-- /.handorgel__indicator -->
                  </button>
                </h3>

                <div class="handorgel__content">
                  <div class="handorgel__content__inner">
                    Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Он большой составитель возвращайся подпоясал на берегу вершину взобравшись мир имеет.
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.faq -->

      <div class="section__picture">
        <img src="img/page/main/faq/background.svg" alt="" class="section__image image">
      </div>
      <!-- /.section__picture -->
    </div>
    <!-- /.section__wrapper -->
  </section>

  <section data-name="Заявка" id="callback" class="section section--last">
    <div class="container">
      <div class="callback">
        <div class="row">
          <div class="col-12 col-lg-6 mb-5 mb-lg-0">
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

                  <button data-sending="Отправка..." class="form__button button button-primary" type="submit">Подобрать персонал</button>
                </form>
              </div>
              <!-- /.col-9 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.col-6 -->

          <div class="col-12 col-lg-6">
            <div class="callback__picture">
              <img src="img/page/main/callback/picture.png" alt="" class="callback__image image">
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