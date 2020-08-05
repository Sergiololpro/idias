<?php
    $title = "Контакты";
?>

<?php include 'inc/header.php'; ?>

<div class="wrapper">
    <div class="bread">
        <a href="#" class="bread__el">Главная</a>
        <div class="bread__sep">/</div>
        <span class="bread__el">КОНТАКТНАЯ ИНФОРМАЦИЯ</span>
    </div>
    <h1 class="h1">КОНТАКТНАЯ ИНФОРМАЦИЯ</h1>
    <div class="contacts">
        <div class="contacts__left">
            <h2 class="contacts__h2">«Светлые идеи»</h2>
            <div class="contacts__el contacts__el-address">109052, Россия, Москва, Нижегородская ул., 29-33с14, 3 этаж, офис 328</div>
            <a href="tel:+7(499)391-67-07" class="contacts__el contacts__el-phone">+7 (499) 391-67-07</a>
            <a href="tel:+7(925)228-37-89" class="contacts__el contacts__el-phone">+7 (925) 228-37-89</a>
            <a href="mailto:zakaz@svetlyeidei.ru" class="contacts__el contacts__el-email">zakaz@svetlyeidei.ru</a>
            <a href="mailto:head@svetlyeidei.ru" class="contacts__el contacts__el-email"> (руководитель компании)</a>
            <div class="share">
                <a href="#" class="share__link share__link-w"></a>
                <a href="#" class="share__link share__link-t"></a>
            </div>
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae27d42e6367c5e99cbc52729322e66940702f94caf0dc71b75d25240703cb33b&amp;source=constructor"></iframe>
        </div>
        <div class="contacts__right">
            <h2 class="contacts__h2">«Обратная связь</h2>
            <div class="contacts__text">Если вам необходима консультация или вы желаете обратиться к представителям компании с предложением, заполните форму, расположенную ниже. В течение 24 часов ваше сообщение будет обработано, и мы обязательно свяжемся с вами.</div>
            <form class="contacts__form">
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
                <div class="cart__input">
                    <label for="name">Сообщение</label>
                    <textarea id="message" name="message" placeholder="Ваше сообщение"></textarea>
                </div>
                <div class="button button-contacts">Отправить</div>
            </form>
        </div>
    </div>
</div>

<?php include 'inc/watched.php'; ?>

<?php include 'inc/questions.php'; ?>
     
<?php include 'inc/footer.php'; ?>