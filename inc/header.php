<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="js/libs/slick/slick.css">
  <link rel="stylesheet" href="js/libs/fancybox/fancybox.css">
  <link rel="stylesheet" href="js/libs/select2/select2.min.css">
  <link rel="stylesheet" href="css/styles.css?v=12">
  <title><?=$title?></title>
</head>

<body>

<div class="overlay"></div>

<div class="modal modal_color">
    <div class="modal__close"></div>
    <div class="modal__wrp">
        <div class="modal__title">Подбор цвета корпуса светильника по каталогу RAL</div>
        <div class="modal__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rhoncus bibendum at proin sodales turpis purus. Orci nisl, dolor sit vitae habitant in nibh massa sit. Hac nulla turpis pellentesque urna dolor nec aliquam et sit. Morbi eget mauris, scelerisque ut elementum velit fames. Placerat id purus aenean vel eget nunc lacus in laoreet.</div>
        <div class="grey_select grey_select-large">
            <select class="select2 select2">
                <option value="ФИОЛЕТОВЫЕ ТОНА">ФИОЛЕТОВЫЕ ТОНА</option>
                <option value="ФИОЛЕТОВЫЕ ТОНА 2">ФИОЛЕТОВЫЕ ТОНА 2</option>
                <option value="ФИОЛЕТОВЫЕ ТОНА 3">ФИОЛЕТОВЫЕ ТОНА 3</option>
            </select>
        </div>
        <div class="modal__colors">
            <div style="background: #8A5A83;" class="modal__color active">RAL 4001</div>
            <div style="background: #933D50;" class="modal__color">RAL 4001</div>
            <div style="background: #D15B8F;" class="modal__color">RAL 4001</div>
            <div style="background: #691639;" class="modal__color">RAL 4001</div>
            <div style="background: #83639D;" class="modal__color">RAL 4001</div>
            <div style="background: #992572;" class="modal__color">RAL 4001</div>
            <div style="background: #4A203B;" class="modal__color">RAL 4001</div>
            <div style="background: #904684;" class="modal__color">RAL 4001</div>
            <div style="background: #A38995;" class="modal__color">RAL 4001</div>
            <div style="background: #8773A1;" class="modal__color">RAL 4001</div>
            <div style="background: #6B6880;" class="modal__color">RAL 4001</div>
        </div>
        <div class="button button-modal">Применить</div>
    </div>
</div>

<header class="header">
    <div class="wrapper wrapper-header">
        <div class="header__left">
            <div class="header__menu">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <a href="/" class="header__logo">
                <img src="img/header__logo.svg" alt="">
            </a>
        </div>
        <div class="header__right">
            <div class="city">
                <div class="city__text">Ваш город:</div>
                <select class="city__select select2">
                    <option value="Москва 1">Москва 1</option>
                    <option value="Москва 2">Москва 2</option>
                    <option value="Москва 3">Москва 3</option>
                </select>
            </div>
            <a href="tel:+7(499)391-67-07" class="header__phone">+7 (499) 391-67-07</a>
            <div class="button button-header">Обратный звонок</div>
            <div class="header__question"></div>
            <div class="header__search">
                <div class="header__search_icon"></div>
                <div class="search">
                    <input name="search" placeholder="Поиск на сайте" type="text">
                </div>
            </div>
            <div class="header_cart">
                <div class="header_cart__el">
                    <div class="header_cart__counter">3</div>
                </div>
                <div class="header_cart__text">28 990 р.</div>
            </div>
        </div>
    </div>
</header>

<nav class="header_menu">
    <div class="header_menu__close"></div>
    <a href="#" class="header_menu__nav">Меню 1</a>
    <a href="#" class="header_menu__nav">Меню 2</a>
    <a href="#" class="header_menu__nav">Меню 3</a>
</nav>

<div class="cats">
    <div class="wrapper wrapper-cats">
        <div data-id="1" class="cats__el cats__el-arrow">ЛИНЕЙНЫЕ СВЕТИЛЬНИКИ</div>
        <div data-id="2" class="cats__el cats__el-arrow">ФИГУРНЫЕ СВЕТИЛЬНИКИ</div>
        <div data-id="3" class="cats__el cats__el-arrow">ОБЪЕМНЫЕ СВЕТИЛЬНИКИ</div>
        <div data-id="4" class="cats__el cats__el-arrow">МАГНИТНЫЕ ТРЕКОВЫЕ СИСТЕМЫ</div>
        <div data-id="5" class="cats__el cats__el-arrow">КОМПЛЕКТУЮЩИЕ</div>
        <div data-id="6" class="cats__el cats__el-arrow">РАЛ</div>
        <div data-id="7" class="cats__el cats__el-arrow">НА ЗАКАЗ</div>
    </div>
    <div data-id="1" class="cats_show">
        <div class="wrapper wrapper-cats_show">
            <div class="cats_show__close"></div>
            <div class="cats_show__col">
                <a href="#" data-id="1" class="cats_show__link">Кольца</a>
                <a href="#" data-id="2" class="cats_show__link">Круглые</a>
                <a href="#" data-id="3" class="cats_show__link">Квадратные</a>
                <a href="#" data-id="4" class="cats_show__link">Треугольные</a>
                <a href="#" data-id="9" class="cats_show__link cats_show__link-all">Смотреть все</a>
            </div>
            <div class="cats_show__col">
                <a href="#" data-id="5" class="cats_show__link">Овальные</a>
                <a href="#" data-id="6" class="cats_show__link">Угловые</a>
                <a href="#" data-id="7" class="cats_show__link">Ассикс</a>
                <a href="#" data-id="8" class="cats_show__link">Многоугольные</a>
            </div>
            <div data-id="1" style="background-image: url(img/main_slider__img-1.jpg);" class="cats_show__img active"></div>
            <div data-id="2" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="3" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="4" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="5" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="6" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="7" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="8" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="9" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
        </div>
    </div>
    <div data-id="2" class="cats_show">
        <div class="wrapper wrapper-cats_show">
            <div class="cats_show__close"></div>
            <div class="cats_show__col">
                <a href="#" data-id="1" class="cats_show__link">Кольца</a>
                <a href="#" data-id="2" class="cats_show__link">Круглые</a>
                <a href="#" data-id="3" class="cats_show__link">Квадратные</a>
                <a href="#" data-id="4" class="cats_show__link">Треугольные</a>
                <a href="#" data-id="9" class="cats_show__link cats_show__link-all">Смотреть все</a>
            </div>
            <div class="cats_show__col">
                <a href="#" data-id="5" class="cats_show__link">Овальные</a>
                <a href="#" data-id="6" class="cats_show__link">Угловые</a>
                <a href="#" data-id="7" class="cats_show__link">Ассикс</a>
                <a href="#" data-id="8" class="cats_show__link">Многоугольные</a>
            </div>
            <div data-id="1" style="background-image: url(img/main_slider__img-1.jpg);" class="cats_show__img active"></div>
            <div data-id="2" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="3" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="4" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="5" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="6" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="7" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="8" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="9" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
        </div>
    </div>
    <div data-id="3" class="cats_show">
        <div class="wrapper wrapper-cats_show">
            <div class="cats_show__close"></div>
            <div class="cats_show__col">
                <a href="#" data-id="1" class="cats_show__link">Кольца</a>
                <a href="#" data-id="2" class="cats_show__link">Круглые</a>
                <a href="#" data-id="3" class="cats_show__link">Квадратные</a>
                <a href="#" data-id="4" class="cats_show__link">Треугольные</a>
                <a href="#" data-id="9" class="cats_show__link cats_show__link-all">Смотреть все</a>
            </div>
            <div class="cats_show__col">
                <a href="#" data-id="5" class="cats_show__link">Овальные</a>
                <a href="#" data-id="6" class="cats_show__link">Угловые</a>
                <a href="#" data-id="7" class="cats_show__link">Ассикс</a>
                <a href="#" data-id="8" class="cats_show__link">Многоугольные</a>
            </div>
            <div data-id="1" style="background-image: url(img/main_slider__img-1.jpg);" class="cats_show__img active"></div>
            <div data-id="2" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="3" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="4" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="5" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="6" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="7" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="8" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="9" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
        </div>
    </div>
    <div data-id="4" class="cats_show">
        <div class="wrapper wrapper-cats_show">
            <div class="cats_show__close"></div>
            <div class="cats_show__col">
                <a href="#" data-id="1" class="cats_show__link">Кольца</a>
                <a href="#" data-id="2" class="cats_show__link">Круглые</a>
                <a href="#" data-id="3" class="cats_show__link">Квадратные</a>
                <a href="#" data-id="4" class="cats_show__link">Треугольные</a>
                <a href="#" data-id="9" class="cats_show__link cats_show__link-all">Смотреть все</a>
            </div>
            <div class="cats_show__col">
                <a href="#" data-id="5" class="cats_show__link">Овальные</a>
                <a href="#" data-id="6" class="cats_show__link">Угловые</a>
                <a href="#" data-id="7" class="cats_show__link">Ассикс</a>
                <a href="#" data-id="8" class="cats_show__link">Многоугольные</a>
            </div>
            <div data-id="1" style="background-image: url(img/main_slider__img-1.jpg);" class="cats_show__img active"></div>
            <div data-id="2" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="3" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="4" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="5" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="6" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="7" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="8" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="9" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
        </div>
    </div>
    <div data-id="5" class="cats_show">
        <div class="wrapper wrapper-cats_show">
            <div class="cats_show__close"></div>
            <div class="cats_show__col">
                <a href="#" data-id="1" class="cats_show__link">Кольца</a>
                <a href="#" data-id="2" class="cats_show__link">Круглые</a>
                <a href="#" data-id="3" class="cats_show__link">Квадратные</a>
                <a href="#" data-id="4" class="cats_show__link">Треугольные</a>
                <a href="#" data-id="9" class="cats_show__link cats_show__link-all">Смотреть все</a>
            </div>
            <div class="cats_show__col">
                <a href="#" data-id="5" class="cats_show__link">Овальные</a>
                <a href="#" data-id="6" class="cats_show__link">Угловые</a>
                <a href="#" data-id="7" class="cats_show__link">Ассикс</a>
                <a href="#" data-id="8" class="cats_show__link">Многоугольные</a>
            </div>
            <div data-id="1" style="background-image: url(img/main_slider__img-1.jpg);" class="cats_show__img active"></div>
            <div data-id="2" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="3" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="4" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="5" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="6" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="7" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="8" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="9" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
        </div>
    </div>
    <div data-id="6" class="cats_show">
        <div class="wrapper wrapper-cats_show">
            <div class="cats_show__close"></div>
            <div class="cats_show__col">
                <a href="#" data-id="1" class="cats_show__link">Кольца</a>
                <a href="#" data-id="2" class="cats_show__link">Круглые</a>
                <a href="#" data-id="3" class="cats_show__link">Квадратные</a>
                <a href="#" data-id="4" class="cats_show__link">Треугольные</a>
                <a href="#" data-id="9" class="cats_show__link cats_show__link-all">Смотреть все</a>
            </div>
            <div class="cats_show__col">
                <a href="#" data-id="5" class="cats_show__link">Овальные</a>
                <a href="#" data-id="6" class="cats_show__link">Угловые</a>
                <a href="#" data-id="7" class="cats_show__link">Ассикс</a>
                <a href="#" data-id="8" class="cats_show__link">Многоугольные</a>
            </div>
            <div data-id="1" style="background-image: url(img/main_slider__img-1.jpg);" class="cats_show__img active"></div>
            <div data-id="2" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="3" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="4" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="5" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="6" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="7" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="8" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="9" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
        </div>
    </div>
    <div data-id="7" class="cats_show">
        <div class="wrapper wrapper-cats_show">
            <div class="cats_show__close"></div>
            <div class="cats_show__col">
                <a href="#" data-id="1" class="cats_show__link">Кольца</a>
                <a href="#" data-id="2" class="cats_show__link">Круглые</a>
                <a href="#" data-id="3" class="cats_show__link">Квадратные</a>
                <a href="#" data-id="4" class="cats_show__link">Треугольные</a>
                <a href="#" data-id="9" class="cats_show__link cats_show__link-all">Смотреть все</a>
            </div>
            <div class="cats_show__col">
                <a href="#" data-id="5" class="cats_show__link">Овальные</a>
                <a href="#" data-id="6" class="cats_show__link">Угловые</a>
                <a href="#" data-id="7" class="cats_show__link">Ассикс</a>
                <a href="#" data-id="8" class="cats_show__link">Многоугольные</a>
            </div>
            <div data-id="1" style="background-image: url(img/main_slider__img-1.jpg);" class="cats_show__img active"></div>
            <div data-id="2" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="3" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="4" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="5" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="6" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="7" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="8" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
            <div data-id="9" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cats_show__img"></div>
        </div>
    </div>
</div>
