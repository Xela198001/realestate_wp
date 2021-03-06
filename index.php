<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Real Estate</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header header--fixed">
    <div class="container">
      <div class="header__inner">
        <?php the_custom_logo( ) ?>
        <nav class="menu">
          <ul class="menu__list">
            <li class="menu__list-item">
              <a class="menu__list-link" href="#">каталог&nbsp;объектов</a>
            </li>
            <li class="menu__list-item">
              <a class="menu__list-link" href="#">о&nbsp;компании</a>
            </li>
            <li class="menu__list-item">
              <a class="menu__list-link" href="#">отзывы</a>
            </li>
            <li class="menu__list-item">
              <a class="menu__list-link" href="#">услуги</a>
            </li>
            <li class="menu__list-item">
              <a class="menu__list-link" href="#">контакты</a>
            </li>
          </ul>
        </nav>
        <a class="header__phone" href="tel:<?php echo the_field('main_phone') ?>"><?php the_field('main_phone') ?></a>
        <button class="header__button" type="submit">
          <img src="<?php echo get_template_directory_uri() ?>/images/burger.svg" alt="icon-burger" />
        </button>
      </div>
    </div>
  </header>
  <main class="main">
    <section class="hero">
      <div class="container">
        <div class="hero-wrapper">
          <div class="hero__info">
            <h1 class="hero__info-title"><?php the_field('main_title') ?></h1>
            <p class="hero__info-text"><?php the_field('main_description') ?></p>
            <ul class="hero__info-tags">
              <li class="hero__info-tag">
                <a href="#">квартиры в аренду</a>
              </li>
              <li class="hero__info-tag">
                <a href="#">квартиры на продажу</a>
              </li>
              <li class="hero__info-tag">
                <a href="#">новостройки</a>
              </li>
              <li class="hero__info-tag">
                <a href="#">офисы и склады</a>
              </li>
              <li class="hero__info-tag">
                <a href="#">доходная недвижимость</a>
              </li>
            </ul>
          </div>
          <div class="hero__img-wrapper">
            <img class="hero__img" src="<?php echo the_field('main_img') ?>" alt="image" />
          </div>
        </div>
      </div>
    </section>
    <section class="flats">
      <div class="container">
        <div class="flats-info">
          <h2 class="flats__title">Квартиры в новостройках</h2>
          <a href="#" class="flats__link">смотреть все квартиры</a>
        </div>
        <div class="cards">
          <div class="cards-item">
            <div class="cards-item__wrapper">
              <button class="cards-item__heart"></button>
              <a href="#" class="cards__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/flat-1.png" alt="flat-1" class="cards__item-img" />
                <div class="cards__item-info">
                  <span class="cards__item-tag">семейный</span>
                  <span class="cards__item-name">3-комн. кв., 118&nbsp;м², 3/23 этаж</span>
                  <span class="cards__item-house">ЖК «Манхэттен»</span>
                  <span class="cards__item-price">11 121 363 ₽</span>
                  <p class="cards__item-description">Аметьево — 16 минут пешком тракт Оренбургский, 8Д</p>
                </div>
              </a>
            </div>
          </div>
          <div class="cards-item">
            <div class="cards-item__wrapper">
              <button class="cards-item__heart"></button>
              <a href="#" class="cards__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/flat-2.png" alt="flat-1" class="cards__item-img" />
                <div class="cards__item-info">
                  <span class="cards__item-tag cards__item-tag--blue">бизнес-класс</span>
                  <span class="cards__item-name">3-комн. кв., 118&nbsp;м², 3/23 этаж</span>
                  <span class="cards__item-house">ЖК «Манхэттен»</span>
                  <span class="cards__item-price">11 121 363 ₽</span>
                  <p class="cards__item-description">Аметьево — 16 минут пешком тракт Оренбургский, 8Д</p>
                </div>
              </a>
            </div>
          </div>
          <div class="cards-item">
            <div class="cards-item__wrapper">
              <button class="cards-item__heart"></button>
              <a href="#" class="cards__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/flat-3.png" alt="flat" class="cards__item-img" />
                <div class="cards__item-info">
                  <span class="cards__item-tag">семейный</span>
                  <span class="cards__item-name">3-комн. кв., 118&nbsp;м², 3/23 этаж</span>
                  <span class="cards__item-house">ЖК «Манхэттен»</span>
                  <span class="cards__item-price">11 121 363 ₽</span>
                  <p class="cards__item-description">Аметьево — 16 минут пешком тракт Оренбургский, 8Д</p>
                </div>
              </a>
            </div>
          </div>
          <div class="cards-item">
            <div class="cards-item__wrapper">
              <button class="cards-item__heart"></button>
              <a href="#" class="cards__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/flat-4.png" alt="flat" class="cards__item-img" />
                <div class="cards__item-info">
                  <span class="cards__item-tag cards__item-tag--pink">апартаменты</span>
                  <span class="cards__item-name">2-комн. кв., 107&nbsp;м², 23/23 этаж</span>
                  <span class="cards__item-house">ЖК «Манхэттен»</span>
                  <span class="cards__item-price">13 121 363 ₽</span>
                  <p class="cards__item-description">Аметьево — 16 минут пешком тракт Оренбургский, 8Д</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">Что говорят наши клиенты</h2>
        <div class="reviews-wrapper">
          <div class="reviews-item">
            <div class="reviews-item__top">
              <img src="<?php echo get_template_directory_uri() ?>/images/client-1.png" alt="avatar" class="reviews-item__avatar" />
              <div class="reviews-item__info">
                <h3 class="reviews-item__title">Через две недели уже&nbsp;вышли на сделку</h3>
                <span class="reviews-item__name"> Елена Гловатова </span>
              </div>
            </div>
            <p class="reviews-item__text">
              Мне нужно было срочно подобрать квартиру для командировок в Казань. Я связалась с агентом, сказала параметры для квартиры и уже через две недели мы вышли на сделку.
            </p>
          </div>
          <div class="reviews-item">
            <div class="reviews-item__top">
              <img src="<?php echo get_template_directory_uri() ?>/images/client-2.png" alt="avatar" class="reviews-item__avatar" />
              <div class="reviews-item__info">
                <h3 class="reviews-item__title">Подобрали именно то, что я так долго искал</h3>
                <span class="reviews-item__name"> Евгений Пробухов </span>
              </div>
            </div>
            <p class="reviews-item__text">
              Мне нужно было срочно подобрать квартиру для командировок в Казань. Я связалась с агентом, сказала параметры для квартиры и уже через две недели мы вышли на сделку.
            </p>
          </div>
          <div class="reviews-item">
            <div class="reviews-item__top">
              <img src="<?php echo get_template_directory_uri() ?>/images/client-3.jpg" alt="avatar" class="reviews-item__avatar" />
              <div class="reviews-item__info">
                <h3 class="reviews-item__title">Подобрали именно то, что я так долго искал</h3>
                <span class="reviews-item__name"> Олег Лебедев </span>
              </div>
            </div>
            <p class="reviews-item__text">
              Мне нужно было срочно подобрать квартиру для командировок в Казань. Я связалась с агентом, сказала параметры для квартиры и уже через две недели мы вышли на сделку.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="newsletter">
      <div class="container">
        <h2 class="newsletter__title">Подпишитесь на&nbsp;рассылку с новыми объектами</h2>
        <form action="#" class="newsletter__form">
          <input type="text" class="newsletter__input" placeholder="Ваше имя" />
          <input type="email" class="newsletter__input" placeholder="Ваше email" />
          <button type="submit" class="newsletter__btn">подписаться&nbsp;на&nbsp;рассылку</button>
        </form>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="footer-wrapper">
        <div class="footer-info">
        <?php the_custom_logo( ) ?>
          <p class="footer__text"><?php echo bloginfo('description'); ?></p>
        </div>
        <nav class="footer-nav">
          <ul class="footer-list">
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">обработка&nbsp;данных</a>
            </li>
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">договор-оферта</a>
            </li>
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">рекламодателям</a>
            </li>
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">партнерам</a>
            </li>
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">риелторам</a>
            </li>
          </ul>
          <ul class="footer-list">
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">каталог&nbsp;объектов</a>
            </li>
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">о компании</a>
            </li>
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">отзывы</a>
            </li>
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">услуги</a>
            </li>
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">контакты</a>
            </li>
          </ul>
          <ul class="footer-list">
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">новостройки</a>
            </li>
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">квартиры</a>
            </li>
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">офисы</a>
            </li>
            <li class="footer-list__item">
              <a href="#" class="footer-list__link">коттеджи</a>
            </li>
          </ul>
        </nav>
        <div class="footer-contacts">
          <a class="footer__phone" href="tel:<?php echo the_field('main_phone') ?>"><?php echo the_field('main_phone') ?></a>
          <a href="mailto:<?php echo the_field('main_email') ?>" class="footer__email"><?php echo the_field('main_email') ?></a>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>