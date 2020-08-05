$(document).ready(function () {

    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    // Слайдер на главной
    if ($('.main_slider').length) {
        $('.main_slider').slick({
            slidesToScroll: 1,
            slidesToShow: 1,
            prevArrow: '<div class="main_slider__nav main_slider__nav-prev"></div>',
            nextArrow: '<div class="main_slider__nav main_slider__nav-next"></div>',
            fade: true
        });
    }

    // Слайдер блока на главной
    $(".main_block").each(function () {
        $(this).find('.images_slider').slick({
            slidesToScroll: 1,
            slidesToShow: 1,
            arrows: false,
            fade: true,
            asNavFor: $(this).find('.types_slider')
        });
        
        $(this).find('.types_slider').slick({
            slidesToScroll: 1,
            slidesToShow: 1,
            prevArrow: '<div class="types_slider__nav types_slider__nav-prev"></div>',
            nextArrow: '<div class="types_slider__nav types_slider__nav-next"></div>',
            asNavFor: $(this).find('.images_slider')
        });
    });

    // Перключатель на главной
    $(".main_block .switch").on("click", function() {
        $(this).toggleClass("active");
        $(this).closest(".main_block").toggleClass("active");
    });

    // Слайдер просмотренного
    if ($('.watched__slider').length) {
        $('.watched__slider').slick({
            slidesToScroll: 6,
            slidesToShow: 6,
            prevArrow: '<div class="watched__nav watched__nav-prev"></div>',
            nextArrow: '<div class="watched__nav watched__nav-next"></div>',
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToScroll: 5,
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 850,
                    settings: {
                        slidesToScroll: 4,
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToScroll: 3,
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToScroll: 2,
                        slidesToShow: 2,
                        centerMode: true
                    }
                },
                {
                    breakpoint: 450,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                        centerMode: true,
                        variableWidth: true
                    }
                }
            ]
        });
    }

    // Select2
    $('.select2').select2({
        minimumResultsForSearch: -1
    });

    // Header
    $(window).on('scroll load', function() {
        if ($(this).scrollTop() > 0) {
            $('.header').removeClass('transparent');
            $('.cats').addClass('active');
        } else {
            $('.header').addClass('transparent');
            $('.cats').removeClass('active');
        }
    });

    // Открыть меню в шапке
    $(".header__menu").on("click", function() {
        $(".header_menu").addClass("active");
    });

    // Закрыть меню в шапке
    $(".header_menu__close").on("click", function() {
        $(".header_menu").removeClass("active");
    });

    // Категории
    // Категории
    $(".cats__el").on("mouseenter", function() {
        var id = $(this).data("id");

        $(".cats_show").removeClass("active");
        $(".cats_show[data-id='" + id + "']").addClass("active");
    });

    $(".cats__el").on("mouseleave", function(e) {    
        var check = true;

        setTimeout(function(){
            document.querySelectorAll(':hover').forEach(function(em){
                if (em.className.includes("cats_show") || em.className.includes("cats__el")) {
                    check = false;
                }
            });

            if (check) {
                $(".cats_show").removeClass("active");
            }
        }, 100)

    });

    $(".cats_show").on("mouseleave", function() {       
        $(".cats_show").removeClass("active");
    });

    $(".cats_show__link").on("mouseenter", function() {
        var id = $(this).data("id");
        
        $(".cats_show__img").removeClass("active");
        $(this).closest(".cats_show").find(".cats_show__img[data-id='" + id + "']").addClass("active");
    });
    
    // $(".cats__el").on("click", function() {
    //     var id = $(this).data("id");

    //     $('.cats__el').removeClass("active");

    //     if ($(".cats_show[data-id='" + id + "']").hasClass("active")) {
    //         $(".cats_show[data-id='" + id + "']").removeClass("active");
    //     } else {
    //         $(".cats_show").removeClass("active");
    //         $(".cats_show[data-id='" + id + "']").addClass("active");
    //         $(this).addClass("active");
    //     }
    // });

    $(".cats_show__close").on("click", function() {
        $(".cats_show, .cats__el").removeClass("active");
    });

    // Поиск
    $(".header__search_icon").on("click", function() {
        $(".search").toggleClass("active");
    });

    // Выбор типа в фильтре
    $(".cat_filter__el").on("click", function() {
        $(".cat_filter__el").removeClass("active");
        $(this).addClass("active");
    });

    // Показать / скрыть фильтры
    $(".cat_filter__icon").on("click", function() {
        $(".filter").toggleClass("active");
    });

    // Фильтры показать еще
    $(".filter__more").on("click", function() {
        $(this).closest(".filter__col").toggleClass("active");
    });

    // Закрыт баннер в категории
    $(".cat_banner__close").on("click", function() {
        $(".cat_banner").removeClass("active");
    });

    // Перключатель в карточке
    $(".product .switch").on("click", function() {
        $(this).toggleClass("active");
        $(this).closest(".product").toggleClass("active");
    });

    // Больше поисания в карточке
    $(".product__seo_more").on("click", function() {
        $(this).closest(".product__seo").addClass("active");
    });

    // Больше характеристикs в карточке
    $(".product__more").on("click", function() {
        $(".product__wp").toggleClass("active");
        
        if ($(".product__wp").hasClass("active") && isMobile.any()) {
            $("html, body").animate({ 
                scrollTop: $(".product__wp").offset().top - $(".cats").outerHeight()
             }, 500);
        }
    });

    // Выбор цвета
    $(".catalog__color").on("click", function() {
        var id = $(this).data("id");

        $(this).closest(".catalog__row").find(".catalog__color").removeClass("active");
        $(this).closest(".catalog__row").find(".catalog__name span").removeClass("active");

        $(this).closest(".catalog__row").find(".catalog__name span[data-id='" + id + "']").addClass("active");
        $(this).addClass("active");
    });

    // Показать окно выбора цвета
    $(".product__ral").on("click", function() {
        $('.overlay, .modal_color').addClass("active");
    });

    // Закрыть окно
    $(".overlay, .modal__close").on("click", function() {
        $('.overlay, .modal_color').removeClass("active");
    });

    // Выбор в окне
    $(".modal__color").on("click", function() {
        $(this).parent().find(".modal__color").removeClass("active");
        $(this).addClass("active");
    });

});
