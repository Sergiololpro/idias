<?php
    $title = "Корзина";
?>

<?php include 'inc/header.php'; ?>

<div class="wrapper">
    <div class="bread">
        <a href="#" class="bread__el">Главная</a>
        <div class="bread__sep">/</div>
        <span class="bread__el">Корзина</span>
    </div>
    <h1 class="h1">ВАША КОРЗИНА</h1>
    <form class="cart">
        <div class="cart__wrp">
            <div class="cart__left">
                <div class="cart__block">
                    <div class="cart__title">Покупатель</div>
                    <div class="cart__input">
                        <label for="name">Ваше имя</label>
                        <input id="name" name="name" placeholder="Александр Иванов" type="text">
                    </div>
                    <div class="cart__input">
                        <label for="name">Контактный телефон</label>
                        <input id="phone" name="phone" placeholder="+7" type="text">
                    </div>
                    <div class="cart__input">
                        <label for="name">Электронная почта</label>
                        <input id="email" name="email" placeholder="name@domain.com" type="email">
                    </div>
                </div>
                <div class="cart__block">
                    <div class="cart__title">Оплата</div>
                    <div class="radio">
                        <input id="pay_type_1" value="pay_type_1" name="pay_type" type="radio" checked>
                        <label class="radio__label" for="pay_type_1">
                            <span class="radio__check"></span>
                            <span class="radio__text">
                                <span class="radio__top">
                                    Картой на сайте
                                    <span class="safe">
                                        <span class="safe__safe">Безопасная оплата</span>
                                        <img class="safe__pay_types" src="img/safe__pay_types.svg" alt="">
                                    </span>
                                </span>
                                <span class="radio__bottom">Вы будете перенаправлены на страницу банка для оплаты. Данный сервис не хранит и не обрабатывает данные вашей карты.</span>
                            </span>
                        </label>
                    </div>
                    <div class="radio">
                        <input id="pay_type_2" value="pay_type_2" name="pay_type" type="radio">
                        <label class="radio__label" for="pay_type_2">
                            <span class="radio__check"></span>
                            <span class="radio__text">Наличными при доставке</span>
                        </label>
                    </div>
                </div>
                <div class="cart__block">
                    <div class="cart__title">Доставка</div>
                    <div class="cart__text">Стоимость доставки в пределах МКАД составляет 700 рублей.</div>
                    <div class="cart__text">При покупке на сумму свыше 100 000 рублей доставка осуществляется бесплатно.</div>
                    <div class="cart__text">Самовывоз товара производится по адресу: 109052, Россия, Москва, Нижегородская ул., 29-33с14, 3 этаж, офис 328</div>
                </div>
            </div>
            <div class="cart__right">
                <div class="cart__title">Ваш заказ</div>
                <div class="cart__els">
                    <div class="cart_el">
                        <div class="cart_el__left">
                            <a href="#" style="background-image: url(img/images_slider__img-1-1.jpg);" class="cart_el__img"></a>
                            <div class="cart_el__content">
                                <a href="#" class="cart_el__title">Светильник дуга ARCO 3000K 24W</a>
                                <div class="cart_el__row">
                                    <div style="background: #BFBFBF;" class="cart_el__color"></div>
                                    <div class="cart_el__text">Сменить цвет</div>
                                </div>
                                <div class="cart_el__price">11 900.-</div>
                            </div>
                        </div>
                        <div class="cart_el__right">
                            <div class="cart_el__controls">
                                <div class="cart_el__control cart_el__control-minus"></div>
                                <div class="cart_el__input">1</div>
                                <div class="cart_el__control cart_el__control-plus"></div>
                            </div>
                            <div class="cart_el__del"></div>
                        </div>
                    </div>
                    <div class="cart_el">
                        <div class="cart_el__left">
                            <a href="#" style="background-image: url(img/main_slider__img-1.jpg);" class="cart_el__img"></a>
                            <div class="cart_el__content">
                                <a href="#" class="cart_el__title">Подвесной светильник LINEAR PO4326 3000K 9W 500mm</a>
                                <div class="cart_el__row">
                                    <div style="background: #BFBFBF;" class="cart_el__color"></div>
                                    <div class="cart_el__text">Сменить цвет</div>
                                </div>
                                <div class="cart_el__price">11 900.-</div>
                            </div>
                        </div>
                        <div class="cart_el__right">
                            <div class="cart_el__controls">
                                <div class="cart_el__control cart_el__control-minus"></div>
                                <div class="cart_el__input">2</div>
                                <div class="cart_el__control cart_el__control-plus"></div>
                            </div>
                            <div class="cart_el__del"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart__bottom">
            <div class="cart__totals">
                <div class="cart__total">
                    Итого с учетом доставки: 
                    <span>28 760.-</span>
                </div>
                <div class="cart__under">Сумму заказа зарезервирована на вашей карте. Итоговая сумма будет списана после доставки.</div>
            </div>
            <div class="cart__confirms">
                <div class="button button-cart">Оформить заказ</div>
                <div class="check check-cart">
                    <input id="conf_1" value="conf_1" name="conf_1" type="checkbox" checked>
                    <label class="check__label" for="conf_1">
                        <span class="check__check"></span>
                        <span class="check__text">Согласен на обработку моих персональных данных</span>
                    </label>
                </div>
                <div class="check check-cart">
                    <input id="conf_2" value="conf_2" name="conf_2" type="checkbox" checked>
                    <label class="check__label" for="conf_2">
                        <span class="check__check"></span>
                        <span class="check__text">Ознакомлен и согласен с условиями доставки и оплаты</span>
                    </label>
                </div>
            </div>
        </div>
    </form>
</div>

<?php include 'inc/questions.php'; ?>
     
<?php include 'inc/footer.php'; ?>