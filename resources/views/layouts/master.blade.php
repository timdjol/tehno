<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - Интернет-магазин Tehnosklad.kg</title>
    <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="{{route('index')}}/img/front/favicon_io/apple-touch-icon.png"
    />
    <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="{{route('index')}}/img/front/favicon_io/favicon-32x32.png"
    />
    <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{route('index')}}/img/front/favicon_io/favicon-16x16.png"
    />
    <link rel="manifest" href="{{route('index')}}/img/front/favicon_io/site.webmanifest" />
    <link rel="stylesheet" href="{{route('index')}}/css/front/style.css" />
    <link rel="stylesheet" href="{{route('index')}}/css/front/normalize.css" />
    <link rel="stylesheet" href="{{route('index')}}/css/front/media.css" />
    <script defer src="{{route('index')}}/js/front/script.js"></script>
</head>
<body>
<!-- ВВЕРХНЕЕ-МЕНЮ -->
<header>
    <div class="navbar__top">
        <a href="#">
            <img class="navbar__logo" src="{{route('index')}}/img/front/logo.svg" alt="" />
        </a>
        <ul class="navbar__top-ul">
            <li class="li-nav">
                <a class="navbar__top-a" href="#clients"
                >Наши клиенты</a
                >
            </li>

            <li class="li-nav">
                <a class="navbar__top-a" href="#delivery">Доставка</a>
            </li>

            <li class="li-nav">
                <a class="navbar__top-a" href="#contacts">Контакты</a>
            </li>

            <li class="li-nav">
                <a class="navbar__top-a" href="#faq">FAQ</a>
            </li>

            <li class="li-nav">
                <div class="input-box">
                    <input type="text" placeholder="Поиск" />
                    <img
                            class="search-button"
                            src="{{route('index')}}/img/front/icons/icon_search.svg"
                            alt=""
                    />
                </div>
            </li>

            <li>
                <img
                        class="navbar__icon"
                        src="{{route('index')}}/img/front/icons/icon_profile.svg"
                        alt="Профиль"
                />
            </li>

            <li>
                <img
                        class="navbar__icon"
                        src="{{route('index')}}/img/front/icons/icon_basket.svg"
                        alt="Корзина"
                />
            </li>

            <li>
                <div id="menu-toggle">
                    <img
                            class="navbar__icon burger"
                            src="{{route('index')}}/img/front/icons/icon_burger.svg"
                            alt="Бургер"
                    />
                </div>
            </li>
        </ul>

        <nav class="menu" id="menu">
            <div class="close-btn" id="close-btn">&times;</div>
            <ul>
                <li><a href="#">Вход / Регистрация</a></li>

                <li>
                    <div class="input-box">
                        <input type="text" placeholder="Поиск" />
                        <img
                                class="search-button"
                                src="{{route('index')}}/img/front/icons/icon_search.svg"
                                alt=""
                        />
                    </div>
                </li>
                <li class="submenu">
                    <a href="#">Все категории</a>
                    <ul>
                        <li><a href="#">Встраиваемая техника</a></li>
                        <li><a href="#">Стиральные машины</a></li>
                        <li><a href="#">Телевизоры</a></li>
                        <li><a href="#">Холодильники</a></li>
                        <li><a href="#">Морозильники</a></li>
                        <li><a href="#">Посудомоечные машины</a></li>
                        <li><a href="#">Кондиционеры</a></li>
                        <li><a href="#">Пылесосы</a></li>
                        <li><a href="#">Ноутбуки</a></li>
                    </ul>
                </li>
                <li><a href="#">Спецпредложение</a></li>
                <li><a href="#">Мелкая техника</a></li>
                <li><a href="#">Бренды</a></li>
                <li class="mobile-contacts">
                    <a
                            href="https://go.2gis.com/bwrd4"
                            class="footer-section-position"
                            target="_blank"
                    >
                        <svg
                                class="footer-section-icon-small"
                                version="1.1"
                                x="0px"
                                y="0px"
                                viewBox="0 0 600 600"
                                style="enable-background: new 0 0 600 600"
                                xml:space="preserve"
                        >
                                    <path
                                            d="M302,13.6c-117.4,0-216.9,100-216.9,218.5c0,124.1,115.3,251,192.8,340.1c0.3,0.4,12.8,14.3,28.3,14.3h1.4
                                            c15.5,0,27.9-13.9,28.2-14.3c72.8-83.6,179-221.6,179-340.1C514.8,113.6,437.3,13.6,302,13.6L302,13.6z M309.2,548.1
                                            c-0.6,0.6-1.5,1.3-2.3,1.9c-0.8-0.6-1.7-1.3-2.4-1.9l-9.4-10.8C221.6,453,120.9,337.6,120.9,232c0-99,82.9-182.7,181.1-182.7
                                            c122.3,0,177,91.8,177,182.7C479,312.1,421.9,418.5,309.2,548.1L309.2,548.1z M300.6,122c-59.3,0-107.4,48.1-107.4,107.4
                                            s48.1,107.4,107.4,107.4S408,288.7,408,229.4S360,122,300.6,122L300.6,122z M300.6,301c-39.5,0-72.4-32.9-72.4-72.4
                                            s32.1-71.6,71.6-71.6c39.5,0,71.6,32.1,71.6,71.6C371.4,268.1,340.1,301,300.6,301z"
                                    />
                                </svg>

                        <p>Мы на карте 2GIS</p>
                    </a>

                    <!-- режим работы -->

                    <span class="footer-section-position-nofill">
                                <svg
                                        class="footer-section-icon-small"
                                        version="1.1"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 600 600"
                                        style="enable-background: new 0 0 600 600"
                                        xml:space="preserve"
                                >
                                    <path
                                            class="st0"
                                            d="M300,570c-72.1,0-139.9-28.1-190.9-79.1S30,372.1,30,300c0-72.1,28.1-139.9,79.1-190.9S227.9,30,300,30
                                            c72.1,0,139.9,28.1,190.9,79.1S570,227.9,570,300c0,72.1-28.1,139.9-79.1,190.9S372.1,570,300,570z M300,70
                                            C173.2,70,70,173.2,70,300s103.2,230,230,230s230-103.2,230-230S426.8,70,300,70z M389.8,394.1c8-7.6,8.3-20.3,0.7-28.3L320,292
                                            V171.7c0-11-9-20-20-20s-20,9-20,20V300c0,5.1,2,10.1,5.5,13.8l76,79.7c3.9,4.1,9.2,6.2,14.5,6.2C381,399.7,385.9,397.8,389.8,394.1
                                            z"
                                    />
                                </svg>

                                <p>Каждый день с 9:00 - 21:00</p>
                            </span>

                    <a
                            href="#"
                            class="footer-section-position"
                            target="_blank"
                    >
                        <svg
                                class="footer-section-icon-small"
                                version="1.1"
                                x="0px"
                                y="0px"
                                viewBox="0 0 600 600"
                                style="enable-background: new 0 0 600 600"
                                xml:space="preserve"
                        >
                                    <path
                                            d="M389.4,382.4l-15.2-15.3l0,0L389.4,382.4z M402.5,369.4l15.2,15.3l0,0L402.5,369.4z M472.2,360.2l-10.3,19L472.2,360.2z
                                            M527.2,390.2l-10.3,19L527.2,390.2z M542.7,484l15.2,15.3L542.7,484z M501.8,524.7l-15.2-15.3L501.8,524.7z M463.6,544l2,21.5l0,0
                                            L463.6,544z M179.4,421.8l15.2-15.3L179.4,421.8z M40.6,163L19,164.2l0,0L40.6,163z M227.3,204.8l15.2,15.3l0,0L227.3,204.8z
                                            M231.8,128.3l17.3-13L231.8,128.3z M195.4,79.8l-17.3,13l0,0L195.4,79.8z M105.7,71.6L121,86.9l0,0L105.7,71.6z M60.5,116.5
                                            l-15.2-15.3l0,0L60.5,116.5z M273,328.8l15.2-15.3L273,328.8z M404.6,397.8l13.1-13.1L387.2,354l-13.1,13.1L404.6,397.8z
                                            M461.8,379.2l55.1,29.9l20.7-38l-55.1-29.9L461.8,379.2z M527.5,468.7l-41,40.7l30.5,30.7l41-40.7L527.5,468.7z M461.6,522.5
                                            c-41.8,3.9-149.9,0.4-267-116l-30.5,30.7c127.8,127,249.4,133.2,301.5,128.4L461.6,522.5z M194.6,406.5
                                            C83,295.6,64.5,202.2,62.2,161.7L19,164.2c2.9,51,25.8,154.4,145.1,273L194.6,406.5z M234.2,228.4l8.3-8.2L212,189.5l-8.3,8.2
                                            L234.2,228.4z M249.1,115.3l-36.3-48.6l-34.6,25.9l36.3,48.6L249.1,115.3z M90.5,56.2l-45.2,45l30.5,30.7l45.2-45L90.5,56.2z
                                            M219,213c-15.2-15.3-15.3-15.3-15.3-15.3c0,0,0,0,0,0c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.3,0.3-0.4,0.4
                                            c-0.3,0.3-0.6,0.6-0.9,1c-0.7,0.8-1.4,1.7-2.2,2.9c-1.6,2.3-3.3,5.3-4.7,9.2c-2.9,7.8-4.5,18.1-2.5,30.9
                                            c3.9,24.9,21,57.9,65.1,101.6l30.5-30.7c-41.2-40.9-51-65.9-52.8-77.6c-0.9-5.6,0-8.3,0.3-9c0.1-0.4,0.2-0.4,0-0.2
                                            c-0.1,0.1-0.2,0.3-0.5,0.6c-0.1,0.1-0.3,0.3-0.4,0.5c-0.1,0.1-0.2,0.2-0.3,0.3c0,0-0.1,0.1-0.1,0.2c0,0-0.1,0.1-0.1,0.1c0,0,0,0,0,0
                                            C234.3,228.3,234.2,228.4,219,213z M257.7,344.1c44,43.8,77.1,60.8,102.1,64.6c12.8,2,23.1,0.4,30.9-2.5c3.8-1.4,6.9-3.1,9.2-4.7
                                            c1.2-0.8,2.1-1.5,2.9-2.2c0.4-0.3,0.7-0.6,1-0.9c0.2-0.1,0.3-0.3,0.4-0.4c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0,0
                                            c0,0,0,0-15.2-15.4c-15.2-15.3-15.2-15.4-15.2-15.4c0,0,0,0,0,0c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1c0.1-0.1,0.2-0.2,0.3-0.3
                                            c0.2-0.2,0.3-0.3,0.5-0.4c0.3-0.2,0.5-0.4,0.6-0.5c0.3-0.2,0.2-0.1-0.2,0.1c-0.7,0.3-3.5,1.2-9.2,0.3c-11.9-1.8-37-11.6-78.2-52.6
                                            L257.7,344.1z M212.7,66.8c-29.4-39.2-87.2-45.5-122.3-10.6L121,86.9c15.3-15.2,42.5-13.7,57.2,5.8L212.7,66.8z M62.2,161.7
                                            c-0.6-10,4-20.4,13.5-29.9l-30.5-30.7c-15.5,15.4-27.7,37.2-26.2,63L62.2,161.7z M486.6,509.4c-7.9,7.9-16.4,12.3-25,13.1l4,43.1
                                            c21.2-2,38.5-12.7,51.4-25.5L486.6,509.4z M242.5,220.1c28.4-28.2,30.5-72.9,6.6-104.8l-34.6,25.9c11.6,15.5,9.9,35.9-2.5,48.2
                                            L242.5,220.1z M516.9,409.2c23.6,12.8,27.2,43,10.6,59.5l30.5,30.7c38.6-38.4,26.7-102.5-20.4-128.2L516.9,409.2z M417.7,384.7
                                            c11.1-11,28.9-13.7,44.1-5.5l20.7-38c-31.2-17-70-12.3-95.2,12.8L417.7,384.7z"
                                    />
                                </svg>
                        <p>+996 (555) 400 700</p>
                    </a>

                    <a
                            href="#"
                            class="footer-section-position"
                            target="_blank"
                    >
                        <svg
                                class="footer-section-icon-small"
                                version="1.1"
                                x="0px"
                                y="0px"
                                viewBox="0 0 600 600"
                                style="enable-background: new 0 0 600 600"
                                xml:space="preserve"
                        >
                                    <path
                                            d="M389.4,382.4l-15.2-15.3l0,0L389.4,382.4z M402.5,369.4l15.2,15.3l0,0L402.5,369.4z M472.2,360.2l-10.3,19L472.2,360.2z
                                            M527.2,390.2l-10.3,19L527.2,390.2z M542.7,484l15.2,15.3L542.7,484z M501.8,524.7l-15.2-15.3L501.8,524.7z M463.6,544l2,21.5l0,0
                                            L463.6,544z M179.4,421.8l15.2-15.3L179.4,421.8z M40.6,163L19,164.2l0,0L40.6,163z M227.3,204.8l15.2,15.3l0,0L227.3,204.8z
                                            M231.8,128.3l17.3-13L231.8,128.3z M195.4,79.8l-17.3,13l0,0L195.4,79.8z M105.7,71.6L121,86.9l0,0L105.7,71.6z M60.5,116.5
                                            l-15.2-15.3l0,0L60.5,116.5z M273,328.8l15.2-15.3L273,328.8z M404.6,397.8l13.1-13.1L387.2,354l-13.1,13.1L404.6,397.8z
                                            M461.8,379.2l55.1,29.9l20.7-38l-55.1-29.9L461.8,379.2z M527.5,468.7l-41,40.7l30.5,30.7l41-40.7L527.5,468.7z M461.6,522.5
                                            c-41.8,3.9-149.9,0.4-267-116l-30.5,30.7c127.8,127,249.4,133.2,301.5,128.4L461.6,522.5z M194.6,406.5
                                            C83,295.6,64.5,202.2,62.2,161.7L19,164.2c2.9,51,25.8,154.4,145.1,273L194.6,406.5z M234.2,228.4l8.3-8.2L212,189.5l-8.3,8.2
                                            L234.2,228.4z M249.1,115.3l-36.3-48.6l-34.6,25.9l36.3,48.6L249.1,115.3z M90.5,56.2l-45.2,45l30.5,30.7l45.2-45L90.5,56.2z
                                            M219,213c-15.2-15.3-15.3-15.3-15.3-15.3c0,0,0,0,0,0c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.3,0.3-0.4,0.4
                                            c-0.3,0.3-0.6,0.6-0.9,1c-0.7,0.8-1.4,1.7-2.2,2.9c-1.6,2.3-3.3,5.3-4.7,9.2c-2.9,7.8-4.5,18.1-2.5,30.9
                                            c3.9,24.9,21,57.9,65.1,101.6l30.5-30.7c-41.2-40.9-51-65.9-52.8-77.6c-0.9-5.6,0-8.3,0.3-9c0.1-0.4,0.2-0.4,0-0.2
                                            c-0.1,0.1-0.2,0.3-0.5,0.6c-0.1,0.1-0.3,0.3-0.4,0.5c-0.1,0.1-0.2,0.2-0.3,0.3c0,0-0.1,0.1-0.1,0.2c0,0-0.1,0.1-0.1,0.1c0,0,0,0,0,0
                                            C234.3,228.3,234.2,228.4,219,213z M257.7,344.1c44,43.8,77.1,60.8,102.1,64.6c12.8,2,23.1,0.4,30.9-2.5c3.8-1.4,6.9-3.1,9.2-4.7
                                            c1.2-0.8,2.1-1.5,2.9-2.2c0.4-0.3,0.7-0.6,1-0.9c0.2-0.1,0.3-0.3,0.4-0.4c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0,0
                                            c0,0,0,0-15.2-15.4c-15.2-15.3-15.2-15.4-15.2-15.4c0,0,0,0,0,0c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1c0.1-0.1,0.2-0.2,0.3-0.3
                                            c0.2-0.2,0.3-0.3,0.5-0.4c0.3-0.2,0.5-0.4,0.6-0.5c0.3-0.2,0.2-0.1-0.2,0.1c-0.7,0.3-3.5,1.2-9.2,0.3c-11.9-1.8-37-11.6-78.2-52.6
                                            L257.7,344.1z M212.7,66.8c-29.4-39.2-87.2-45.5-122.3-10.6L121,86.9c15.3-15.2,42.5-13.7,57.2,5.8L212.7,66.8z M62.2,161.7
                                            c-0.6-10,4-20.4,13.5-29.9l-30.5-30.7c-15.5,15.4-27.7,37.2-26.2,63L62.2,161.7z M486.6,509.4c-7.9,7.9-16.4,12.3-25,13.1l4,43.1
                                            c21.2-2,38.5-12.7,51.4-25.5L486.6,509.4z M242.5,220.1c28.4-28.2,30.5-72.9,6.6-104.8l-34.6,25.9c11.6,15.5,9.9,35.9-2.5,48.2
                                            L242.5,220.1z M516.9,409.2c23.6,12.8,27.2,43,10.6,59.5l30.5,30.7c38.6-38.4,26.7-102.5-20.4-128.2L516.9,409.2z M417.7,384.7
                                            c11.1-11,28.9-13.7,44.1-5.5l20.7-38c-31.2-17-70-12.3-95.2,12.8L417.7,384.7z"
                                    />
                                </svg>
                        <p>+996 (550) 405 080</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- НИЖНЕЕ-МЕНЮ -->
<div class="navbar__bottom">
    <ul class="navbar__bottom-ul">
        <li>
            <div class="navbar__dropup navbar__dropup-desktop">
                <button id="navbar__dropbtn-1" class="uppercase">
                    Все категории
                </button>
                <div
                        id="navbar__dropup-content-1"
                        class="navbar__dropup-content"
                >
                    <div class="navbar__bottom-items">
                        <a class="navbar__bottom-a" href="#">
                            <b class="uppercase">
                                Встраиваемая техника</b
                            >
                        </a>
                        <a class="navbar__bottom-a" href="#"
                        >Холодильники</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Духовые шкафы</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Варочные поверхности</a
                        >
                        <a class="navbar__bottom-a" href="#">Вытяжки</a>
                        <a class="navbar__bottom-a" href="#"
                        >Микроволновые печи</a
                        >
                    </div>

                    <div class="navbar__bottom-items">
                        <a class="navbar__bottom-a" href="#">
                            <b class="uppercase"> Стиральные машины</b>
                        </a>
                        <a class="navbar__bottom-a" href="#"
                        >Холодильники</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Духовые шкафы</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Варочные поверхности</a
                        >
                        <a class="navbar__bottom-a" href="#">Вытяжки</a>
                        <a class="navbar__bottom-a" href="#"
                        >Микроволновые печи</a
                        >
                    </div>

                    <div class="navbar__bottom-items">
                        <a class="navbar__bottom-a" href="#">
                            <b class="uppercase"> Телевизоры</b>
                        </a>
                        <a class="navbar__bottom-a" href="#"
                        >Телевизоры</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Кронштейны</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Аудио-системы</a
                        >
                    </div>

                    <div class="navbar__bottom-items">
                        <a class="navbar__bottom-a" href="#">
                            <b class="uppercase"> Холодильники</b>
                        </a>
                        <a class="navbar__bottom-a" href="#"
                        >Двухкамерные</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >С верхней морозильной камерой</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Многодверные холодильники</a
                        >
                    </div>

                    <div class="navbar__bottom-items">
                        <a class="navbar__bottom-a" href="#">
                            <b class="uppercase"> Морозильники</b>
                        </a>
                        <a class="navbar__bottom-a" href="#"
                        >Вертикальные</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Горизонтальные</a
                        >
                    </div>

                    <div class="navbar__bottom-items">
                        <a class="navbar__bottom-a" href="#">
                            <b class="uppercase">
                                Посудомоечные машины</b
                            >
                        </a>
                        <a class="navbar__bottom-a" href="#"
                        >Встраиваемые</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Отдельностоящие</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Настольные</a
                        >
                    </div>

                    <div class="navbar__bottom-items">
                        <a class="navbar__bottom-a" href="#">
                            <b class="uppercase"> Кондиционеры</b>
                        </a>
                        <a class="navbar__bottom-a" href="#"
                        >Настенные</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Инверторные</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Колонные (напольные)</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Канальные</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Кассетные</a
                        >
                    </div>

                    <div class="navbar__bottom-items">
                        <a class="navbar__bottom-a" href="#">
                            <b class="uppercase"> Пылесосы</b>
                        </a>
                        <a class="navbar__bottom-a" href="#"
                        >Роботы-пылесосы</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Вертикальные</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >С мешком</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >С контейнером
                        </a>
                    </div>

                    <div class="navbar__bottom-items">
                        <a class="navbar__bottom-a" href="#">
                            <b class="uppercase"> Ноутбуки</b>
                        </a>
                        <a class="navbar__bottom-a" href="#"
                        >Ноутбуки</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Принтеры</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Мониторы</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Аксессуары</a
                        >
                    </div>
                </div>
            </div>
        </li>

        <li>
            <div class="navbar__dropup navbar__dropup-desktop">
                <button id="navbar__dropbtn-2" class="uppercase">
                    Спецпредложение
                </button>
                <div id="navbar__dropup-content-2">
                    <div class="navbar__bottom-items">
                        <a class="navbar__bottom-a" href="#">
                            <b class="uppercase"> Спецпредложение</b>
                        </a>
                        <a class="navbar__bottom-a" href="#"
                        >Холодильник и стиральная машина
                        </a>
                        <a class="navbar__bottom-a" href="#"
                        >Духовые шкафы</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Варочные поверхности</a
                        >
                        <a class="navbar__bottom-a" href="#">Вытяжки</a>
                        <a class="navbar__bottom-a" href="#"
                        >Микроволновые печи</a
                        >
                    </div>
                </div>
            </div>
        </li>

        <li>
            <div class="navbar__dropup navbar__dropup-desktop">
                <button id="navbar__dropbtn-3" class="uppercase">
                    Мелкая техника
                </button>
                <div id="navbar__dropup-content-3">
                    <div class="navbar__bottom-items">
                        <a class="navbar__bottom-a" href="#">
                            <b class="uppercase"> Мелкая техника</b>
                        </a>
                        <a class="navbar__bottom-a" href="#"
                        >Холодильники</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Духовые шкафы</a
                        >
                        <a class="navbar__bottom-a" href="#"
                        >Варочные поверхности</a
                        >
                        <a class="navbar__bottom-a" href="#">Вытяжки</a>
                        <a class="navbar__bottom-a" href="#"
                        >Микроволновые печи</a
                        >
                    </div>
                </div>
            </div>
        </li>

        <li>
            <div class="navbar__dropup navbar__dropup-desktop">
                <button id="navbar__dropbtn-4" class="uppercase">
                    Бренды
                </button>
                <div id="navbar__dropup-content-4">
                    <div class="navbar__bottom-items">
                        <a class="navbar__bottom-a" href="#">
                            <b class="uppercase"> Бренды</b>
                        </a>
                        <a class="navbar__bottom-a" href="#">Samsung</a>
                        <a class="navbar__bottom-a" href="#">Bosch</a>
                        <a class="navbar__bottom-a" href="#"
                        >Electrolux</a
                        >
                        <a class="navbar__bottom-a" href="#">Otex</a>
                        <a class="navbar__bottom-a" href="#"
                        >Texnomir</a
                        >
                    </div>
                </div>
            </div>
        </li>

        <li class="navbar__bottom-order">
            <a class="navbar__bottom-order-a" href="#!"
            >Нужна консультация</a
            >
        </li>
    </ul>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('success'))
                <p class="alert alert-success">{{ session()->get('success') }}</p>
            @endif
            @if(session()->has('warning'))
                <p class="alert alert-warning">{{ session()->get('warning') }}</p>
            @endif
        </div>
    </div>
</div>

@yield('content')

<!-- ПОДВАЛ (footer) -->
<footer>
    <section id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <ul>
                        <li>
                            <a
                                    href="https://go.2gis.com/bwrd4"
                                    class="footer-section-position"
                                    target="_blank"
                            >
                                <svg
                                        class="footer-section-icon-small"
                                        version="1.1"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 600 600"
                                        style="
                                                enable-background: new 0 0 600
                                                    600;
                                            "
                                        xml:space="preserve"
                                >
                                            <path
                                                    d="M302,13.6c-117.4,0-216.9,100-216.9,218.5c0,124.1,115.3,251,192.8,340.1c0.3,0.4,12.8,14.3,28.3,14.3h1.4
                                                c15.5,0,27.9-13.9,28.2-14.3c72.8-83.6,179-221.6,179-340.1C514.8,113.6,437.3,13.6,302,13.6L302,13.6z M309.2,548.1
                                                c-0.6,0.6-1.5,1.3-2.3,1.9c-0.8-0.6-1.7-1.3-2.4-1.9l-9.4-10.8C221.6,453,120.9,337.6,120.9,232c0-99,82.9-182.7,181.1-182.7
                                                c122.3,0,177,91.8,177,182.7C479,312.1,421.9,418.5,309.2,548.1L309.2,548.1z M300.6,122c-59.3,0-107.4,48.1-107.4,107.4
                                                s48.1,107.4,107.4,107.4S408,288.7,408,229.4S360,122,300.6,122L300.6,122z M300.6,301c-39.5,0-72.4-32.9-72.4-72.4
                                                s32.1-71.6,71.6-71.6c39.5,0,71.6,32.1,71.6,71.6C371.4,268.1,340.1,301,300.6,301z"
                                            />
                                        </svg>

                                <p>Мы на карте 2GIS</p>
                            </a>
                        </li>

                        <!-- режим работы -->
                        <li>
                                    <span
                                            class="footer-section-position-nofill"
                                    >
                                        <svg
                                                class="footer-section-icon-small"
                                                version="1.1"
                                                x="0px"
                                                y="0px"
                                                viewBox="0 0 600 600"
                                                style="
                                                enable-background: new 0 0 600
                                                    600;
                                            "
                                                xml:space="preserve"
                                        >
                                            <path
                                                    class="st0"
                                                    d="M300,570c-72.1,0-139.9-28.1-190.9-79.1S30,372.1,30,300c0-72.1,28.1-139.9,79.1-190.9S227.9,30,300,30
                                                c72.1,0,139.9,28.1,190.9,79.1S570,227.9,570,300c0,72.1-28.1,139.9-79.1,190.9S372.1,570,300,570z M300,70
                                                C173.2,70,70,173.2,70,300s103.2,230,230,230s230-103.2,230-230S426.8,70,300,70z M389.8,394.1c8-7.6,8.3-20.3,0.7-28.3L320,292
                                                V171.7c0-11-9-20-20-20s-20,9-20,20V300c0,5.1,2,10.1,5.5,13.8l76,79.7c3.9,4.1,9.2,6.2,14.5,6.2C381,399.7,385.9,397.8,389.8,394.1
                                                z"
                                            />
                                        </svg>

                                        <p>{{ $contacts->first()->graph }}</p>
                                    </span>
                        </li>

                        <li>
                            <a
                                    href="tel:{{ $contacts->first()->phone }}"
                                    class="footer-section-position"
                                    target="_blank"
                            >
                                <svg
                                        class="footer-section-icon-small"
                                        version="1.1"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 600 600"
                                        style="
                                                enable-background: new 0 0 600
                                                    600;
                                            "
                                        xml:space="preserve"
                                >
                                            <path
                                                    d="M389.4,382.4l-15.2-15.3l0,0L389.4,382.4z M402.5,369.4l15.2,15.3l0,0L402.5,369.4z M472.2,360.2l-10.3,19L472.2,360.2z
                                                M527.2,390.2l-10.3,19L527.2,390.2z M542.7,484l15.2,15.3L542.7,484z M501.8,524.7l-15.2-15.3L501.8,524.7z M463.6,544l2,21.5l0,0
                                                L463.6,544z M179.4,421.8l15.2-15.3L179.4,421.8z M40.6,163L19,164.2l0,0L40.6,163z M227.3,204.8l15.2,15.3l0,0L227.3,204.8z
                                                M231.8,128.3l17.3-13L231.8,128.3z M195.4,79.8l-17.3,13l0,0L195.4,79.8z M105.7,71.6L121,86.9l0,0L105.7,71.6z M60.5,116.5
                                                l-15.2-15.3l0,0L60.5,116.5z M273,328.8l15.2-15.3L273,328.8z M404.6,397.8l13.1-13.1L387.2,354l-13.1,13.1L404.6,397.8z
                                                M461.8,379.2l55.1,29.9l20.7-38l-55.1-29.9L461.8,379.2z M527.5,468.7l-41,40.7l30.5,30.7l41-40.7L527.5,468.7z M461.6,522.5
                                                c-41.8,3.9-149.9,0.4-267-116l-30.5,30.7c127.8,127,249.4,133.2,301.5,128.4L461.6,522.5z M194.6,406.5
                                                C83,295.6,64.5,202.2,62.2,161.7L19,164.2c2.9,51,25.8,154.4,145.1,273L194.6,406.5z M234.2,228.4l8.3-8.2L212,189.5l-8.3,8.2
                                                L234.2,228.4z M249.1,115.3l-36.3-48.6l-34.6,25.9l36.3,48.6L249.1,115.3z M90.5,56.2l-45.2,45l30.5,30.7l45.2-45L90.5,56.2z
                                                M219,213c-15.2-15.3-15.3-15.3-15.3-15.3c0,0,0,0,0,0c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.3,0.3-0.4,0.4
                                                c-0.3,0.3-0.6,0.6-0.9,1c-0.7,0.8-1.4,1.7-2.2,2.9c-1.6,2.3-3.3,5.3-4.7,9.2c-2.9,7.8-4.5,18.1-2.5,30.9
                                                c3.9,24.9,21,57.9,65.1,101.6l30.5-30.7c-41.2-40.9-51-65.9-52.8-77.6c-0.9-5.6,0-8.3,0.3-9c0.1-0.4,0.2-0.4,0-0.2
                                                c-0.1,0.1-0.2,0.3-0.5,0.6c-0.1,0.1-0.3,0.3-0.4,0.5c-0.1,0.1-0.2,0.2-0.3,0.3c0,0-0.1,0.1-0.1,0.2c0,0-0.1,0.1-0.1,0.1c0,0,0,0,0,0
                                                C234.3,228.3,234.2,228.4,219,213z M257.7,344.1c44,43.8,77.1,60.8,102.1,64.6c12.8,2,23.1,0.4,30.9-2.5c3.8-1.4,6.9-3.1,9.2-4.7
                                                c1.2-0.8,2.1-1.5,2.9-2.2c0.4-0.3,0.7-0.6,1-0.9c0.2-0.1,0.3-0.3,0.4-0.4c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0,0
                                                c0,0,0,0-15.2-15.4c-15.2-15.3-15.2-15.4-15.2-15.4c0,0,0,0,0,0c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1c0.1-0.1,0.2-0.2,0.3-0.3
                                                c0.2-0.2,0.3-0.3,0.5-0.4c0.3-0.2,0.5-0.4,0.6-0.5c0.3-0.2,0.2-0.1-0.2,0.1c-0.7,0.3-3.5,1.2-9.2,0.3c-11.9-1.8-37-11.6-78.2-52.6
                                                L257.7,344.1z M212.7,66.8c-29.4-39.2-87.2-45.5-122.3-10.6L121,86.9c15.3-15.2,42.5-13.7,57.2,5.8L212.7,66.8z M62.2,161.7
                                                c-0.6-10,4-20.4,13.5-29.9l-30.5-30.7c-15.5,15.4-27.7,37.2-26.2,63L62.2,161.7z M486.6,509.4c-7.9,7.9-16.4,12.3-25,13.1l4,43.1
                                                c21.2-2,38.5-12.7,51.4-25.5L486.6,509.4z M242.5,220.1c28.4-28.2,30.5-72.9,6.6-104.8l-34.6,25.9c11.6,15.5,9.9,35.9-2.5,48.2
                                                L242.5,220.1z M516.9,409.2c23.6,12.8,27.2,43,10.6,59.5l30.5,30.7c38.6-38.4,26.7-102.5-20.4-128.2L516.9,409.2z M417.7,384.7
                                                c11.1-11,28.9-13.7,44.1-5.5l20.7-38c-31.2-17-70-12.3-95.2,12.8L417.7,384.7z"
                                            />
                                        </svg>
                                <p>{{ $contacts->first()->phone }}</p>
                            </a>
                        </li>

                        <li>
                            <a
                                    href="tel:{{ $contacts->first()->phone2 }}"
                                    class="footer-section-position"
                                    target="_blank"
                            >
                                <svg
                                        class="footer-section-icon-small"
                                        version="1.1"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 600 600"
                                        style="
                                                enable-background: new 0 0 600
                                                    600;
                                            "
                                        xml:space="preserve"
                                >
                                            <path
                                                    d="M389.4,382.4l-15.2-15.3l0,0L389.4,382.4z M402.5,369.4l15.2,15.3l0,0L402.5,369.4z M472.2,360.2l-10.3,19L472.2,360.2z
                                                M527.2,390.2l-10.3,19L527.2,390.2z M542.7,484l15.2,15.3L542.7,484z M501.8,524.7l-15.2-15.3L501.8,524.7z M463.6,544l2,21.5l0,0
                                                L463.6,544z M179.4,421.8l15.2-15.3L179.4,421.8z M40.6,163L19,164.2l0,0L40.6,163z M227.3,204.8l15.2,15.3l0,0L227.3,204.8z
                                                M231.8,128.3l17.3-13L231.8,128.3z M195.4,79.8l-17.3,13l0,0L195.4,79.8z M105.7,71.6L121,86.9l0,0L105.7,71.6z M60.5,116.5
                                                l-15.2-15.3l0,0L60.5,116.5z M273,328.8l15.2-15.3L273,328.8z M404.6,397.8l13.1-13.1L387.2,354l-13.1,13.1L404.6,397.8z
                                                M461.8,379.2l55.1,29.9l20.7-38l-55.1-29.9L461.8,379.2z M527.5,468.7l-41,40.7l30.5,30.7l41-40.7L527.5,468.7z M461.6,522.5
                                                c-41.8,3.9-149.9,0.4-267-116l-30.5,30.7c127.8,127,249.4,133.2,301.5,128.4L461.6,522.5z M194.6,406.5
                                                C83,295.6,64.5,202.2,62.2,161.7L19,164.2c2.9,51,25.8,154.4,145.1,273L194.6,406.5z M234.2,228.4l8.3-8.2L212,189.5l-8.3,8.2
                                                L234.2,228.4z M249.1,115.3l-36.3-48.6l-34.6,25.9l36.3,48.6L249.1,115.3z M90.5,56.2l-45.2,45l30.5,30.7l45.2-45L90.5,56.2z
                                                M219,213c-15.2-15.3-15.3-15.3-15.3-15.3c0,0,0,0,0,0c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.3,0.3-0.4,0.4
                                                c-0.3,0.3-0.6,0.6-0.9,1c-0.7,0.8-1.4,1.7-2.2,2.9c-1.6,2.3-3.3,5.3-4.7,9.2c-2.9,7.8-4.5,18.1-2.5,30.9
                                                c3.9,24.9,21,57.9,65.1,101.6l30.5-30.7c-41.2-40.9-51-65.9-52.8-77.6c-0.9-5.6,0-8.3,0.3-9c0.1-0.4,0.2-0.4,0-0.2
                                                c-0.1,0.1-0.2,0.3-0.5,0.6c-0.1,0.1-0.3,0.3-0.4,0.5c-0.1,0.1-0.2,0.2-0.3,0.3c0,0-0.1,0.1-0.1,0.2c0,0-0.1,0.1-0.1,0.1c0,0,0,0,0,0
                                                C234.3,228.3,234.2,228.4,219,213z M257.7,344.1c44,43.8,77.1,60.8,102.1,64.6c12.8,2,23.1,0.4,30.9-2.5c3.8-1.4,6.9-3.1,9.2-4.7
                                                c1.2-0.8,2.1-1.5,2.9-2.2c0.4-0.3,0.7-0.6,1-0.9c0.2-0.1,0.3-0.3,0.4-0.4c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0,0
                                                c0,0,0,0-15.2-15.4c-15.2-15.3-15.2-15.4-15.2-15.4c0,0,0,0,0,0c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1c0.1-0.1,0.2-0.2,0.3-0.3
                                                c0.2-0.2,0.3-0.3,0.5-0.4c0.3-0.2,0.5-0.4,0.6-0.5c0.3-0.2,0.2-0.1-0.2,0.1c-0.7,0.3-3.5,1.2-9.2,0.3c-11.9-1.8-37-11.6-78.2-52.6
                                                L257.7,344.1z M212.7,66.8c-29.4-39.2-87.2-45.5-122.3-10.6L121,86.9c15.3-15.2,42.5-13.7,57.2,5.8L212.7,66.8z M62.2,161.7
                                                c-0.6-10,4-20.4,13.5-29.9l-30.5-30.7c-15.5,15.4-27.7,37.2-26.2,63L62.2,161.7z M486.6,509.4c-7.9,7.9-16.4,12.3-25,13.1l4,43.1
                                                c21.2-2,38.5-12.7,51.4-25.5L486.6,509.4z M242.5,220.1c28.4-28.2,30.5-72.9,6.6-104.8l-34.6,25.9c11.6,15.5,9.9,35.9-2.5,48.2
                                                L242.5,220.1z M516.9,409.2c23.6,12.8,27.2,43,10.6,59.5l30.5,30.7c38.6-38.4,26.7-102.5-20.4-128.2L516.9,409.2z M417.7,384.7
                                                c11.1-11,28.9-13.7,44.1-5.5l20.7-38c-31.2-17-70-12.3-95.2,12.8L417.7,384.7z"
                                            />
                                        </svg>
                                <p>{{ $contacts->first()->phone2 }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-section">
                    <ul>
                        <li><a href="#">Встраиваемая техника</a></li>
                        <li><a href="#">Бытовая техника</a></li>
                        <li><a href="#">Мелкая техника</a></li>
                        <li><a href="#">Бренды</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <ul>
                        <li><a href="#clients">Наши клиенты</a></li>
                        <li><a href="#delivery">Доставка</a></li>
                        <li><a href="#contacts">Контакты</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <ul>
                        <li><span>Мы в соцсетях</span></li>
                    </ul>

                    <ul class="footer-section-social">
                        <li>
                            <a
                                    href="{{ $contacts->first()->instagram }}"
                                    target="_blank"
                            >
                                <svg
                                        class="footer-section-icon"
                                        version="1.1"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 600 600"
                                        style="
                                                enable-background: new 0 0 600
                                                    600;
                                            "
                                        xml:space="preserve"
                                >
                                            <g>
                                                <path
                                                        class="st0"
                                                        d="M428.6,202.8c-3-7.7-6.5-13.2-12.3-19c-5.8-5.7-11.3-9.3-19-12.3c-5.8-2.3-14.5-5-30.6-5.7
                                                    c-17.4-0.8-22.6-1-66.7-1c-44.1,0-49.3,0.2-66.7,1c-16.1,0.8-24.8,3.4-30.6,5.7c-7.7,3-13.2,6.5-19,12.3c-5.7,5.8-9.3,11.3-12.3,19
                                                    c-2.3,5.8-5,14.5-5.7,30.6c-0.8,17.3-1,22.6-1,66.6s0.2,49.2,1,66.6c0.8,16.1,3.4,24.8,5.7,30.6c2.9,7.7,6.5,13.2,12.3,19
                                                    c5.8,5.7,11.3,9.3,19,12.3c5.8,2.3,14.5,5,30.6,5.7c17.4,0.8,22.6,1,66.7,1c44.1,0,49.3-0.2,66.7-1c16-0.8,24.8-3.4,30.6-5.7
                                                    c7.7-3,13.2-6.5,19-12.3c5.7-5.8,9.3-11.3,12.3-19c2.3-5.8,5-14.5,5.7-30.6c0.8-17.3,1-22.6,1-66.6s-0.2-49.2-1-66.6
                                                    C433.5,217.3,430.9,208.6,428.6,202.8z M300,384.7c-46.8,0-84.7-37.9-84.7-84.7s37.9-84.7,84.7-84.7c46.8,0,84.7,37.9,84.7,84.7
                                                    S346.8,384.7,300,384.7z M388.1,231.8c-10.9,0-19.8-8.9-19.8-19.8c0-11,8.8-19.8,19.8-19.8c10.9,0,19.8,8.9,19.8,19.8
                                                    S399,231.8,388.1,231.8z"
                                                />
                                                <path
                                                        class="st0"
                                                        d="M300,245c-30.4,0-55,24.6-55,55c0,30.4,24.6,55,55,55c30.4,0,55-24.6,55-55C355,269.6,330.4,245,300,245z"
                                                />
                                                <path
                                                        class="st0"
                                                        d="M300,0C134.3,0,0,134.3,0,300s134.3,300,300,300s300-134.3,300-300S465.7,0,300,0z M464,368
                                                    c-0.8,17.5-3.6,29.5-7.7,40c-4.2,10.8-9.8,20-19,29.2c-9.2,9.1-18.4,14.8-29.2,19c-10.5,4.1-22.5,6.9-40.1,7.7
                                                    c-17.6,0.8-23.2,1-68,1s-50.4-0.2-68-1c-17.6-0.8-29.6-3.6-40.1-7.7c-10.8-4.2-20-9.8-29.2-19c-9.1-9.2-14.8-18.4-19-29.2
                                                    c-4.1-10.5-6.9-22.4-7.7-40c-0.8-17.6-1-23.2-1-68s0.2-50.4,1-68c0.8-17.5,3.6-29.5,7.7-40c4.2-10.8,9.8-20,19-29.2
                                                    c9.1-9.1,18.3-14.8,29.2-19c10.5-4.1,22.5-6.9,40.1-7.7c17.6-0.8,23.2-1,68-1s50.4,0.2,68,1c17.6,0.8,29.6,3.6,40.1,7.7
                                                    c10.8,4.2,20,9.8,29.2,19c9.1,9.2,14.8,18.4,19,29.2c4.1,10.5,6.9,22.4,7.7,40c0.8,17.6,1,23.2,1,68S464.8,350.4,464,368z"
                                                />
                                            </g>
                                        </svg>
                            </a>
                        </li>

                        <li>
                            <a
                                    href="{{ $contacts->first()->facebook }}"
                                    target="_blank"
                            >
                                <svg
                                        class="footer-section-icon"
                                        version="1.1"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 600 600"
                                        style="
                                                enable-background: new 0 0 600
                                                    600;
                                            "
                                        xml:space="preserve"
                                >
                                            <path
                                                    class="st0"
                                                    d="M300,0C134.3,0,0,134.3,0,300s134.3,300,300,300s300-134.3,300-300S465.7,0,300,0z M371,323h-49.2v162h-70.2
                                                V323H199v-72h52.7v-41.4c0-54.8,29.8-84.6,77.4-84.6c22.8,0,45.3,1.7,45.3,2.5V179h-26.2c-25.9,0-26.4,18.4-26.4,36.9V251H379
                                                L371,323z"
                                            />
                                        </svg>
                            </a>
                        </li>

                        <!-- WhatsApp icon -->
                        <!-- <li>
                            <a href="#" target="_blank">
                                <svg
                                    class="footer-section-icon"
                                    version="1.1"
                                    x="0px"
                                    y="0px"
                                    viewBox="0 0 600 600"
                                    style="
                                        enable-background: new 0 0 600
                                            600;
                                    "
                                    xml:space="preserve"
                                >
                                    <path
                                        class="st0"
                                        d="M300,0C134.3,0,0,134.3,0,300s134.3,300,300,300s300-134.3,300-300S465.7,0,300,0z M300,463.3
                                        c-29,0-56.3-7.6-80-20.7l-82.7,23.8l20.8-83.8C143.4,358,135,329.2,135,298.4c0-91.1,73.9-164.9,165-164.9s165,73.8,165,164.9
                                        S391.1,463.3,300,463.3z M301.9,162.2c-75.7,0-137,61.3-137,136.9c0,29,9,55.8,24.3,77.9l-12,48.5l47.1-13.6
                                        c22.1,15.2,48.8,24.1,77.6,24.1c75.6,0,137-61.3,137-136.9C438.9,223.5,377.6,162.2,301.9,162.2z M379.1,359.5
                                        c-9.3,21.2-44.2,16.2-44.2,16.2c-97.1-18.1-116.4-105.8-116.4-105.8c-10-31.1,22.4-46.7,22.4-46.7c5.6-2.7,12.6-1.7,16.7,2.6
                                        c3,3.2,5.7,10.9,7.8,16.4c1.2,3,2.4,6,3.5,9c1.8,4.7,3.7,9.8,3.4,15c-0.2,5.4-5.1,9-8.3,12.7c-1.9,2.2-3.8,4.4-5.7,6.6
                                        c13.1,36.6,62.3,54.6,62.3,54.6c3.8-4,7.7-7.9,11.4-11.9c2.9-3.1,6-7,10.2-8.2c5.8-1.6,11.6,2.1,16.7,4.6c5.8,2.9,10.4,5.6,15.5,8.6
                                        c4,2.3,7.4,5.5,7.7,10.3C382.4,348.5,381.1,354.9,379.1,359.5z"
                                    />
                                </svg>
                            </a>
                        </li> -->

                        <li>
                            <a href="{{ $contacts->first()->telegram }}" target="_blank">
                                <svg
                                        class="footer-section-icon"
                                        version="1.1"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 600 600"
                                        style="
                                                enable-background: new 0 0 600
                                                    600;
                                            "
                                        xml:space="preserve"
                                >
                                            <path
                                                    class="st0"
                                                    d="M300,0C134.3,0,0,134.3,0,300s134.3,300,300,300s300-134.3,300-300S465.7,0,300,0z M421.9,209.1
                                                c-0.7,10.2-6.5,45.7-12.3,84.2l-18.2,114c0,0-1.5,16.7-13.8,19.6c-12.3,2.9-32.7-10.2-36.3-13.1c-2.9-2.2-54.5-34.9-73.4-50.8
                                                c-5.1-4.4-10.9-13.1,0.8-23.3c26.2-23.9,57.4-53.7,76.3-72.6c8.7-8.7,17.4-29-18.9-4.4l-102.5,69c0,0-11.6,7.2-33.4,0.7
                                                S143,317.2,143,317.2s-17.5-10.7,12.3-22.4L324.6,225c16.7-7.2,73.4-30.5,73.4-30.5S424.2,184.3,421.9,209.1z"
                                            />
                                        </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="footer-date">
                    &copy; 2000
                    <script>
                        new Date().getFullYear() > 2017 &&
                        document.write(
                            '-' + new Date().getFullYear()
                        )
                    </script>
                    ОсОО "Техносклад". Все права защищены.
                </div>
                <!-- <div class="footer-creator">
                    Сайт разработан
                    <a href="https://urmatulanov.com/" target="_blank"
                        >urmatulanov.com</a
                    >
                </div> -->
            </div>
        </div>
    </section>
</footer>
</body>
</html>


