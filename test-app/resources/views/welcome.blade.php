<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Компания грузоперевозок Cargo Connect Logistics">
  <meta name="keywords" content="Это ключевые слова для индексирования вашей страницы">
  <meta name="author" content="Гробовик Максим">
  <meta name="robots" content="index">
  <meta name="theme-color" content="#111111">
  <title>CCL</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="{{asset('assets/style/vendor.css')}}">
  <link rel="stylesheet" href="{{asset('assets/style/main.css')}}">
  <script defer src="{{asset('assets/js/main.js')}}"></script>
</head>

<body class="application" id="app">
  <div class="application__container" id="app-container">
    <header class="application__header header" id="header">
  <div class="container header__container">
    <div class="header__inner">
      <div class="header__top">
        <a title="Главная" href="#" class="header__logo logo">
          <img src="{{asset('assets/img/svg/logo.svg')}}" width="120" height="120" alt="Логотип сайта Эверест" class="logo__brand">
        </a>
        <a href="mailto:cargo@gmail.com" class="header__link header__link--1">cargo@gmail.com</a>
        <a href="tel:+79954232345" class="header__link header__link--1">+7 995 423-23-45</a>
        <div class="header__media">
          <a href="#" class="header__link header__link--media"><i class='bx bxl-vk'></i></a>
          <a href="#" class="header__link header__link--media"><i class='bx bxl-whatsapp' ></i></a>
          <a href="#" class="header__link header__link--media"><i class='bx bxl-telegram' ></i></a>
        </div>
      </div>
      <div class="header__line"></div>
      <menu class="header__menu">
        <li class="header__item">
          <a href="#about" class="header__link">О нас</a>
        </li>
        <li class="header__item">
          <a href="#services" class="header__link">Услуги</a>
        </li>
        <li class="header__item">
          <a href="#gallery" class="header__link">Галерея</a>
        </li>
        <li class="header__item">
          <a href="#reviews" class="header__link">Отзывы</a>
        </li>
        <li class="header__item">
          <a href="#calculation" class="header__link">Расчёт</a>
        </li>
        <li class="header__item">
          <a href="#contacts" class="header__link">Контакты</a>
        </li>
      </menu>
      <div class="header__burger burger">
        <input id="menu__toggle" type="checkbox" class="burger__button"></input>
        <label class="burger__btn" for="menu__toggle">
          <span class="burger__span"></span>
        </label>
        <menu class="burger__menu">
          <li class="burger__item burger__item--contacts">
            <a href="mailto:cargo@gmail.com" class="burger__link burger__link--1">cargo@gmail.com</a>
            <a href="tel:+79954232345" class="burger__link burger__link--1">+7 995 423-23-45</a>
          </li>
          <li class="burger__item burger__item--line"></li>
          <li class="burger__item">
            <a href="#about" class="burger__link">О нас</a>
          </li>
          <li class="burger__item">
            <a href="#services" class="burger__link">Услуги</a>
          </li>
          <li class="burger__item">
            <a href="#gallery" class="burger__link">Галерея</a>
          </li>
          <li class="burger__item">
            <a href="#reviews" class="burger__link">Отзывы</a>
          </li>
          <li class="burger__item">
            <a href="#calculation" class="burger__link">Расчёт</a>
          </li>
          <li class="burger__item">
            <a href="#contacts" class="burger__link">Контакты</a>
          </li>
          <li class="burger__item burger__item--line"></li>
          <li class="burger__item burger__item--media">
            <a href="#" class="burger__link burger__link--media"><i class='bx bxl-vk'></i></a>
            <a href="#" class="burger__link burger__link--media"><i class='bx bxl-whatsapp' ></i></a>
            <a href="#" class="burger__link burger__link--media"><i class='bx bxl-telegram' ></i></a>
          </li>
        </menu>
      </div>
    </div>
  </div>
</header>
    <main class="application__main main-wrapper" id="main-wrapper">
      <div class="main-wrapper__content">
        <section class="main-wrapper__section hero" id="hero" style="background-image: url('{{asset('assets/img/bg.webp')}}');">
    <div class="container hero__container">
        <div class="hero__inner">
            <div class="hero__wrapper">
                <div class="hero__info">
                      <h1 class="hero__title">Морские контейнерные перевозки</h1>
                      <p class="hero__description">Перевозки по всему миру. <br> Фрахт от лучших морских линий.</p>
                      <button class="hero__button">Отправить груз</button>
                </div>
            </div>
        </div>
    </div>
</section>
        <section class="main-wrapper__section about" id="about">
    <div class="container about__container">
        <div class="about__inner">
            <h2 class="about__name">о нас</h2>
            <div class="about__achievements">
                <h3 class="about__title">Наши достижения</h3>
                <ul class="about__list">
                    <li class="about__item">
                        <p class="about__achievement"><span class="about__span">60 000+</span><br>тонн груза мы перевезли</p>
                    </li>
                    <li class="about__item">
                        <p class="about__achievement"><span class="about__span">10</span><br>лет на рынке</p>
                    </li>
                    <li class="about__item">
                        <p class="about__achievement"><span class="about__span">8</span><br>кораблей в управлении</p>
                    </li>
                    <li class="about__item">
                        <p class="about__achievement"><span class="about__span">250+</span><br>клиентов доверили нам свои грузы</p>
                    </li>
                </ul>
            </div>
            <div class="about__line"></div>
            <div class="about__history">
                <h3 class="about__title">История компании</h3>
                <div class="about__content">
                    <p class="about__description">Cargo Connect Logistics — стабильная, развивающаяся, финансово независимая группа компаний. За время работы с 1997 года CCL зарекомендовала себя как быстрый и эффективный оператор по логистике c наработанным положительным опытом сотрудничества с иностранными и отечественными компаниями.</p>
                    <img src="{{asset('assets/img/about/2.webp')}}" width="500" height="500" loading="lazy" alt="изображение секции о нас" class="about__img">
                </div>
            </div>
            <div class="about__line"></div>
            <div class="about__mission">
                <h3 class="about__title">Наша миссия</h3>
                <div class="about__content">
                    <p class="about__description">Изменить рынок контейнерных перевозок, создав собственную технологию экспедиторских услуг, которая обеспечит честность, высокую организованность и превосходное качество обслуживания наших клиентов.</p>
                    <img src="{{asset('assets/img/about/1.webp')}}" width="500" height="500" loading="lazy" alt="изображение секции о нас" class="about__img">
                </div>
            </div>
            <div class="about__line"></div>
        </div>
    </div>
</section>
        <section class="main-wrapper__section services" id="services">
    <div class="container services__container">
        <div class="services__inner">
            <h2 class="services__name">Наши услуги</h2>
            <div class="services__transportation">
                <h3 class="services__title">Виды перевозок</h3>
                <div class="services__cadrs">
                    <article class="services__card">
                        <img src="{{asset('assets/img/Prevoz/1.webp')}}" width="470" height="400" loading="lazy" alt="Изображение морских перевозок" class="services__img services__img--prevoz">
                        <p class="services__description">Морские</p>
                    </article>
                    <article class="services__card">
                        <img src="{{asset('assets/img/Prevoz/2.webp')}}" width="470" height="400" loading="lazy" alt="Изображение морских перевозок" class="services__img services__img--prevoz">
                        <p class="services__description">ж-д</p>
                    </article>
                    <article class="services__card">
                        <img src="{{asset('assets/img/Prevoz/3.webp')}}" width="470" height="400" loading="lazy" alt="Изображение морских перевозок" class="services__img services__img--prevoz">
                        <p class="services__description">Авиа</p>
                    </article>
                    <article class="services__card">
                        <img src="{{asset('assets/img/Prevoz/4.webp')}}" width="470" height="400" loading="lazy" alt="Изображение морских перевозок" class="services__img services__img--prevoz">
                        <p class="services__description">Транспортные</p>
                    </article>
                </div>
            </div>
            <div class="services__logistics">
                <h3 class="services__title">Комплексные логистические услуги</h3>
                <div class="services__cadrs">
                    <article class="services__card services__card--services">
                        <img src="{{asset('assets/img/services/1.webp')}}" width="470px" height="260px" loading="lazy" alt="Изображение морских перевозок" class="services__img">
                        <p class="services__description services__description--mini">Таможенное оформление</p>
                    </article>
                    <article class="services__card services__card--services">
                        <img src="{{asset('assets/img/services/2.webp')}}" width="470px" height="260px" loading="lazy" alt="Изображение морских перевозок" class="services__img">
                        <p class="services__description services__description--mini">Сертификация</p>
                    </article>
                    <article class="services__card services__card--services">
                        <img src="{{asset('assets/img/services/3.webp')}}" width="470px" height="260px" loading="lazy" alt="Изображение морских перевозок" class="services__img">
                        <p class="services__description services__description--mini">Складские услуги</p>
                    </article>
                    <article class="services__card services__card--services">
                        <img src="{{asset('assets/img/services/4.webp')}}" width="470px" height="260px" loading="lazy" alt="Изображение морских перевозок" class="services__img">
                        <p class="services__description services__description--mini">Международная логистика</p>
                    </article>
                    <article class="services__card services__card--services">
                        <img src="{{asset('assets/img/services/5.webp')}}" width="470px" height="260px" loading="lazy" alt="Изображение морских перевозок" class="services__img">
                        <p class="services__description services__description--mini">Сопровождение ВЭД</p>
                    </article>
                    <article class="services__card services__card--services">
                        <img src="{{asset('assets/img/services/6.webp')}}" width="470px" height="260px" loading="lazy" alt="Изображение морских перевозок" class="services__img">
                        <p class="services__description services__description--mini">DPP агент</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
        <section class="main-wrapper__section gallery" id="gallery">
    <div class="container gallery__container" >
        <div class="gallery__inner">
            <h2 class="gallery__name">Галерея</h2>
            <div class="gallery__images">
                <div class="gallery__top">
                    <div class="gallery__right">
                        <div class="gallery__link">
                            <img src="{{asset('assets/img/gallery/1.webp')}}" width="595" height="595" loading="lazy" alt="Изображение для галереи" class="gallery__img">
                        </div>
                    </div>
                    <div class="gallery__left">
                        <div class="gallery__left-top">
                            <div class="gallery__link">
                                <img src="{{asset('assets/img/gallery/2.webp')}}" width="407" height="280" loading="lazy" alt="Изображение для галереи" class="gallery__img">
                            </div>
                            <div class="gallery__link">
                                <img src="{{asset('assets/img/gallery/3.webp')}}" width="407" height="280" loading="lazy" alt="Изображение для галереи" class="gallery__img">
                            </div>
                        </div>
                        <div class="gallery__left-bottom">
                            <div class="gallery__link">
                                <img src="{{asset('assets/img/gallery/4.webp')}}" width="407" height="280" loading="lazy" alt="Изображение для галереи" class="gallery__img">
                            </div>
                            <div class="gallery__link">
                                <img src="{{asset('assets/img/gallery/5.webp')}}" width="407" height="280" loading="lazy" alt="Изображение для галереи" class="gallery__img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery__bottom">
                    <div class="gallery__link">
                        <img src="{{asset('assets/img/gallery/6.webp')}}" width="595" height="280" loading="lazy" alt="Изображение для галереи" class="gallery__img">
                    </div>
                    <div class="gallery__link">
                        <img src="{{asset('assets/img/gallery/7.webp')}}" width="845" height="280" loading="lazy" alt="Изображение для галереи" class="gallery__img">
                    </div>
                </div>
                <div class="gallery__pop-up">
                    <span class="gallery__span">×</span>
                    <img src="{{asset('assets/img/gallery/1.webp')}}" alt="увеличенное изображение галереи" class="gallery__img-popup">
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.querySelectorAll('.gallery__img ').forEach(img =>{
        img.onclick = () => {
            document.querySelector('.gallery__pop-up').style.display = 'block';
            document.querySelector('.gallery__img-popup').src = img.getAttribute('src');
        }
    });

    document.querySelector('.gallery__span').onclick = () => {
        document.querySelector('.gallery__pop-up').style.display = 'none';
    }
</script>
        <section class="main-wrapper__section reviews" id="reviews">
    <div class="container reviews__container">
        <div class="reviews__inner">
            <h2 class="reviews__name">Отзывы</h2>
            <div class="reviews__review">
                <img src="{{asset('assets/img/reviews/1.webp')}}" width="200" height="200" loading="lazy" alt="Фотография человека" class="reviews__img">
                <p class="reviews__description">Очень доволен услугами компании! Мой груз был доставлен точно в срок, без каких-либо повреждений. Професиональный и внимательный персонал всегда был на связи и оперативно решал все вопросы. Рекомендую эту компанию всем, кто ищет надежного партнера для морских грузоперевозок.</p>
            </div>
            <div class="reviews__review">
                <img src="{{asset('assets/img/reviews/2.webp')}}" width="200" height="200" loading="lazy" alt="Фотография человека" class="reviews__img">
                <p class="reviews__description">Я уже несколько раз пользовался услугами этой компании и всегда остаюсь доволен результатом. Они предлагают конкурентные цены, а качество обслуживания на высшем уровне. Мои грузы всегда доставляют вовремя и в целости. Если вам нужны надёжные перевозки, рекомендую обратиться к этой компании.</p>
            </div>
            <div class="reviews__review">
                <img src="{{asset('assets/img/reviews/3.webp')}}" width="200" height="200" loading="lazy" alt="Фотография человека" class="reviews__img">
                <p class="reviews__description">Сотрудничество с компанией CCL оказалось отличным опытом. Они предоставили мне комплексное решение для перевозки моего груза, включая организацию доставки до порта, таможенное оформление и морскую перевозку. Весь процесс прошел гладко и без задержек. Спасибо за профессионализм и внимательность!</p>
            </div>
        </div>
    </div>
</section>
        <section class="main-wrapper__section calculation" id="calculation">
    <div class="container calculation__container">
        <div class="calculation__inner">
            <h2 class="calculation__name">Расчет ставки</h2>
            <form action="#" method="post" class="calculation__form-1">
                <input id="one"  name="group" type="radio" class="calculation__inputt" checked>
                <input id="two"  name="group" type="radio" class="calculation__inputt">
                <input id="three" name="group" type="radio" class="calculation__inputt">
                <input id="four" name="group" type="radio" class="calculation__inputt">
                <div class="calculation__tabs tabs">
                    <label id="one-tab" for="one" class="calculation__tab active">Расчет ставки</label>
                    <label id="two-tab" for="two" class="calculation__tab">Сборный груз</label>
                    <label id="three-tab" for="three" class="calculation__tab">Трекинг</label>
                    <label id="four-tab" for="four" class="calculation__tab">Расписание сервисов</label>
                </div>
                <div class="calculation__tabs-content panels">
                    <div class="calculation__bid " id="one-panel">
                    <div class="calculation__inputs">
                        <input type="text" placeholder="Откуда" required class="calculation__input">
                        <input type="text" placeholder="Куда" required class="calculation__input">
                        <div class="calculation__content">
                            <label for="" class="calculation__content-name">Тип контейнера:</label>
                            <select required name="" id="" class="calculation__form">
                                <option value="Выберите" class="calculation__select">Выберите</option>
                                <option value="20' dry cargo, (24t) (20DC)" class="calculation__select">20' dry cargo, (24t) (20DC)</option>
                                <option value="40' high cube, (40HC)" class="calculation__select">40' high cube, (40HC)</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="calculation__button">Рассчитать</button>
                    </div>
                    <div class="calculation__bid " id="two-panel">
                    <div class="calculation__inputs">
                        <input type="text" placeholder="Откуда" required class="calculation__input">
                        <input type="text" placeholder="Куда" required class="calculation__input">
                        <input type="text" placeholder="Объём, куб.м" required class="calculation__input calculation__input--made">
                        <input type="text" placeholder="Вес, кг" required class="calculation__input calculation__input--made">
                    </div>
                    <button type="submit" class="calculation__button">Рассчитать</button>
                    </div>
                    <div class="calculation__bid " id="three-panel">
                    <div class="calculation__inputs">
                        <input type="text" placeholder="Номер контейнеров или коносаментов через запятую" required class="calculation__input calculation__input--tracking">
                    </div>
                    <button type="submit" class="calculation__button">Отследить</button>
                    </div>
                    <div class="calculation__bid " id="four-panel">
                    <div class="calculation__inputs">
                        <input type="text" placeholder="Откуда" required class="calculation__input calculation__input--service">
                        <input type="text" placeholder="Куда" required class="calculation__input calculation__input--service">
                    </div>
                    <button type="submit" class="calculation__button">Узнать расписание</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
        <section class="main-wrapper__section contacts" id="contacts">
    <div class="container contacts__container">
        <div class="contacts__inner">
            <h2 class="contacts__name">Контакты</h2>
            <div class="contacts__info">
                <a href="tel:+79954232345" class="contacts__link"><i class='bx bxs-phone'></i>+7 995 423-23-45</a>
                <a href="mailto:cargo@gmail.com" class="contacts__link"><i class='bx bxs-envelope' ></i>cargo@gmail.com</a>
                <p class="contacts__description"><i class='bx bxs-time' ></i>пн-пт: 09:00–19:00,<br>сб-вс: выходной</p>
            </div>
            <div class="contacts__map">
                <script type="text/javascript" class="contacts__script" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9d1bf85d649a54a050409f46323b9d7c75be72b0b1977b4fda0bd13de5783eda&amp;width=970&amp;height=700&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</section>
      </div>
    </main>
    <footer class="application__footer footer" id="footer">
    <div class="container footer__container">
      <div class="footer__inner">
        <div class="footer__logo logo">
            <a title="Главная" href="#" class="logo__link footer__link ">
                <img src="{{asset('assets/img/svg/logo.svg')}}" width="180" height="180" alt="Логотип сайта ccl" class="logo__brand">
              </a>
              <div class="logo__info">
                <p class="logo__description">Cargo</p>
                <p class="logo__description">Connect</p>
                <p class="logo__description">Logistics</p>
              </div>
        </div>
        <div class="footer__media">
            <a href="#" class="footer__link footer__link--media"><i class='bx bxl-vk'></i></a>
            <a href="#" class="footer__link footer__link--media"><i class='bx bxl-whatsapp' ></i></a>
            <a href="#" class="footer__link footer__link--media"><i class='bx bxl-telegram' ></i></a>
        </div>
        <div class="footer__qcod">
          <img class="footer__img" width="141" height="141" loading="lazy" src="{{asset('assets/img/qr.webp')}}" alt="qr code для перехода в социальные сети">
        </div>
      </div>
    </div>
  </footer>
  </div>
</body>
</html>
