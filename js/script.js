/* global wp, jQuery */

const swiper = new Swiper('.home-slider', {
    effect: "fade",
    autoHeight: true,
    // Navigation arrows
    navigation: {
        nextEl: '.home-slider__next',
        prevEl: '.home-slider__prev',
    },
});

const swiperEvents = new Swiper('.js-event-list', {
    slidesPerView: 1,
    slidesPerGroup: 1,
    // Navigation arrows
    navigation: {
        nextEl: '.events-page-next',
        prevEl: '.events-page-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        1157: {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1
        },
    }
});

const swiperRev = new Swiper('.home-rev__slider', {
    autoHeight: true,
    slidesPerView: 1,
    slidesPerGroup: 1,
    // Navigation arrows
    navigation: {
        nextEl: '.home-rev__next',
        prevEl: '.home-rev__prev',
    },
    pagination: {
        el: ".home-rev__pagination",
        clickable: true,
        renderBullet: function(index, className) {
            return '<div class="home-rev__bullet swiper-pagination-bullet"></div>';
        },
    },
    breakpoints: {
        // when window width is >= 320px
        1157: {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 2
        },
    }
});

const swiperVideo = new Swiper('.product-video__swiper', {
    autoHeight: true,
    slidesPerView: 1,
    slidesPerGroup: 1,
    // Navigation arrows
    navigation: {
        nextEl: '.product-video__next',
        prevEl: '.product-video__prev',
    },
    // pagination: {
    //   el: ".product-video__pagination",
    //   clickable: true,
    //   renderBullet: function (index, className) {
    //     return '<div class="product-video__bullet swiper-pagination-bullet"></div>';
    //   },
    // },

});

const swiperT2 = new Swiper('.t-2-slider', {
    autoHeight: true,
    slidesPerView: 1,
    slidesPerGroup: 1,

    breakpoints: {
        1157: {
            slidesPerView: 3,
            slidesPerGroup: 3
        },
    }
});

const swiperResult = new Swiper('.product-result__slider', {
    // effect: "fade",
    autoHeight: true,
    // Navigation arrows
    navigation: {
        nextEl: '.product-result__next',
        prevEl: '.product-result__prev',
    },

});

// Line in slider

(function($) {
    function setValue() {
        let buttonWidth = $('.home-slider__link').outerWidth();
        let containerWidth = $('.container').width();
        let windowWidth = $(window).width();

        let hr1 = $('.sl__hr-1');
        let hr2 = $('.sl__hr-2');

        // Calc width hr1
        let hr1Width = (windowWidth - containerWidth) / 2;

        // Calc width hr2
        let hr2Width = containerWidth - buttonWidth + hr1Width;

        // Calc margid hr2
        let hr2MarginLeft = hr1Width + buttonWidth;

        // Setvalue
        hr1.css('width', hr1Width);
        hr2.css('width', hr2Width);
        hr2.css('margin-left', hr2MarginLeft);

    }

    window.onload = setValue;
    window.onresize = setValue;
}(jQuery));


// Product menu

(function($) {

    let h2Content = $('h2');
    let linkItems = $('.product-menu__link');

    linkItems.each(function(index) {
        let link = '#';
        let linkCurrent = linkItems.eq(index);
        let dataLinkCurrent = linkCurrent.attr('data-link').toUpperCase();

        h2Content.each(function(i) {
            let h2Current = h2Content.eq(i);
            let h2CurrentText = h2Current.text().replace(/\s+/g, " ").trim().toUpperCase();
            if (dataLinkCurrent == h2CurrentText) {
                h2Current.attr('id', linkCurrent.attr('href').substring(1))
            }
        })
    })

}(jQuery));


// Faq

(function($) {
    $('.js-faq-quest').on('click', function() {
        console.log($(this).next('.js-faq-ans'));
        $(this).find('.js-faq-ans').slideToggle();
        $(this).find('.js-faq-plus').toggleClass('active');
    });


}(jQuery));

// Cat menu mobile select 

(function($) {
    $('.js-cat-menu-select').on('change', function(e) {

        e.preventDefault();
        let link = $(this).find('option:selected').attr('data-link');
        window.location.href = link;
    });


}(jQuery));

// Pop up

(function($) {
    $('.js-consultation').on('click', function(e) {
        e.preventDefault();

        $('.js-pop-up').fadeIn();
        $('.js-pop-up-bl-1').fadeIn();
        $('body').css('overflow', 'hidden');
    });

    $('.js-pop-up-close').on('click', function() {
        $('.js-pop-up').fadeOut();
        $('.js-pop-up-bl-1').fadeOut();
        $('body').css('overflow', 'auto');
    })


}(jQuery));

// Mobile menu

(function($) {
    $('.js-menu-open').on('click', function(e) {
        $('.js-main-menu').show();
        $('.js-menu-open').hide();
        $('.js-menu-close').show();
    })

    $('.js-menu-close').on('click', function() {
        // if($(window).width() < 1173.98) {
        $('.js-main-menu').hide();
        $('.js-main-menu').css('display', '');
        $('.js-menu-close').hide();
        $('.js-menu-open').show();
        // }
    })

    let windowWidth = $(window).width();

    $(window).on('resize', function() {
        console.log('res');
        if ($(window).width() !== windowWidth) {
            $('.js-main-menu').hide();
            $('.js-main-menu').css('display', '');
            $('.js-menu-close').hide();
            $('.js-menu-open').show();
        }

        if ($(window).width() > 1280) {
            $('.js-menu-close').hide();
            $('.js-menu-open').hide();
            console.log('resize w');
        }
    })

    $(document).ready(function() {
        $(".product-menu").on("click", "a", function(event) {
            //отменяем стандартную обработку нажатия по ссылке
            event.preventDefault();

            //забираем идентификатор бока с атрибута href
            var id = $(this).attr('href'),

                //узнаем высоту от начала страницы до блока на который ссылается якорь
                top = $(id).offset().top - 200;

            //анимируем переход на расстояние - top за 1500 мс
            $('body,html').animate({ scrollTop: top }, 1500);
        });
    });

}(jQuery));

// Send form in contact page


var widgetId1;
var widgetId2;
var onloadCallback = function() {
    widgetId1 = grecaptcha.render('js-recaptcha', {
        'sitekey': '6Leu3NccAAAAAODLGu-w6ZJY35kflMhhkMSb6eBt',
        'theme': 'light'
    });

    widgetId2 = grecaptcha.render('js-recaptcha-2', {
        'sitekey': '6Leu3NccAAAAAODLGu-w6ZJY35kflMhhkMSb6eBt',
        'theme': 'light'
    });
}

$('.js-contact-page-form').on('submit', function(e) {
    e.preventDefault();

    let form = $('.js-contact-page-form')[0];
    let submitButton = $(form).find('input[type="submit"]')[0];
    $(submitButton).prop('disabled', true);

    let formData = new FormData(form);
    formData.append('action', 'cform');
    formData.append('id', 1);

    let policy = $('.js-policy').is(':checked');

    if (!policy) {
        alert('You agree to the privacy policy to submit the form.');
    }


    let rez = grecaptcha.getResponse(widgetId1);
    if (!rez) {
        alert('Enter the captcha.');
    }
    console.log(!rez);


    if (rez && policy) {
        $.ajax({
            type: 'POST',
            data: formData,
            url: myajax.url,
            processData: false,
            contentType: false,
            success: function(r) {
                console.log('success send message');
                $('.js-pop-up').fadeIn();
                $('.js-pop-up-bl-2').fadeIn();
                setTimeout(function() {
                    $('.js-pop-up').fadeOut();
                    $('.js-pop-up-bl-2').fadeOut();
                    $('body').css('overflow', 'auto');
                    $(submitButton).prop('disabled', false);
                    form.reset();
                }, 7000);
            },
            error: function(r) {
                console.log('error send message');
                $('.js-pop-up').fadeIn();
                $('.js-pop-up-bl-3').fadeIn();
                setTimeout(function() {
                    $('.js-pop-up').fadeOut();
                    $('.js-pop-up-bl-3').fadeOut();
                    $(submitButton).prop('disabled', false);
                }, 7000);
            }
        });
    } else {
        $(submitButton).prop('disabled', false);
    }
})



$('.js-pop-up-forms').on('submit', function(e) {
    e.preventDefault();

    let form = $('.js-pop-up-forms')[0];
    let submitButton = $(form).find('input[type="submit"]')[0];
    $(submitButton).prop('disabled', true);

    let formData = new FormData(form);
    formData.append('action', 'cform');
    formData.append('id', 1);

    let policy = $('.js-policy').is(':checked');

    if (!policy) {
        alert('You agree to the privacy policy to submit the form.');
    }

    let rez = grecaptcha.getResponse(widgetId2);

    if (!rez) {
        alert('Enter the captcha.');
    }

    console.log('policy:' + policy);
    console.log('rez:' + rez);
    console.log('result bool' + Boolean(rez) && policy);


    if (rez && policy) {
        $.ajax({
            type: 'POST',
            data: formData,
            url: myajax.url,
            processData: false,
            contentType: false,
            success: function(r) {
                console.log('success send message');
                $('.js-pop-up-bl-1').fadeOut();
                $('.js-pop-up-bl-2').fadeIn();
                setTimeout(function() {
                    $('.js-pop-up').fadeOut();
                    $('.js-pop-up-bl-2').fadeOut();
                    $('body').css('overflow', 'auto');
                    $(submitButton).prop('disabled', false);
                    form.reset();
                }, 7000);
            },
            error: function(r) {
                console.log('error send message');
                $('.js-pop-up-bl-1').fadeOut();
                $('.js-pop-up-bl-3').fadeIn();
                setTimeout(function() {
                    $('.js-pop-up').fadeOut();
                    $('.js-pop-up-bl-3').fadeOut();
                    $(submitButton).prop('disabled', false);
                }, 7000);
            }
        });
    } else {
        $(submitButton).prop('disabled', false);
    }
})

// Video youtube

function findVideos() {
    let videos = document.querySelectorAll('.video');

    for (let i = 0; i < videos.length; i++) {
        setupVideo(videos[i]);
    }
}

function setupVideo(video) {
    let link = video.querySelector('.video__link');
    let media = video.querySelector('.video__media');
    let button = video.querySelector('.video__button');
    // let id = parseMediaURL(media);
    let id = link.dataset.id;

    video.addEventListener('click', () => {
        let iframe = createIframe(id);

        link.remove();
        button.remove();
        video.appendChild(iframe);
    });

    link.removeAttribute('href');
    video.classList.add('video--enabled');
}

function createIframe(id) {
    let iframe = document.createElement('iframe');

    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('allow', 'autoplay');
    iframe.setAttribute('src', generateURL(id));
    iframe.classList.add('video__media');

    return iframe;
}

function generateURL(id) {
    let query = '?rel=0&showinfo=0&autoplay=1';

    return 'https://www.youtube.com/embed/' + id + query;
}

findVideos();

// Header sticky

(function($) {

    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 200) {
            $('.site-header').addClass('sticky');
        } else {
            $('.site-header').removeClass('sticky');
        }
    })

}(jQuery));

// Work with map

let map;
let map2;

function initMap() {
    console.log('')
    if ($('.js-map-set').eq(0).attr('data-coor-1')) {

        let lat = $('.js-map-set').eq(0).attr('data-coor-1');
        let lng = $('.js-map-set').eq(0).attr('data-coor-2');

        map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: +lat,
                lng: +lng
            },
            zoom: 14,
            disableDefaultUI: true,
            streetViewControl: false,
        });

        map.setOptions({ styles: styles["hide"] });
    }

    map2 = new google.maps.Map(document.getElementById("map-contact"), {
        center: {
            lat: +$('#map-contact').attr('data-coor-1'),
            lng: +$('#map-contact').attr('data-coor-2')
        },
        zoom: 14,
        disableDefaultUI: true,
        streetViewControl: false,
    });

    map2.setOptions({ styles: styles["hide"] });

}
const styles = {
    default: [],
    hide: [{
            featureType: "poi.business",
            stylers: [{ visibility: "off" }],
        },
        {
            featureType: "transit",
            elementType: "labels.icon",
            stylers: [{ visibility: "off" }],
        },
    ],
};

$('.js-map-set').on('click', function() {
    // if(map) {
    let lat = $(this).attr('data-coor-1');
    let lng = $(this).attr('data-coor-2');

    // map.setCenter(parseFloat(lon), parseFloat(lat), 14);
    map.setCenter({ lat: +lat, lng: +lng }, 14);
    map.setZoom(14);
    // }
})


// Product slider

// const swiperProductText = new Swiper('.pp-slider-text', {
//     slidesPerView: 1,
//     spaceBetween: 30,
//     freeMode: false,
//     allowTouchMove: false,
//     breakpoints: {
//         1157: {
//             slidesPerView: 'auto',
//             spaceBetween: 30,
//             allowTouchMove: true,
//         },
//     },
// });

// const swiperProduct = new Swiper('.pp-slider', {
//     slidesPerView: 1,
//     spaceBetween: 30,
//     navigation: {
//         nextEl: '.pp-slider-text__next',
//         prevEl: '.pp-slider-text__prev',
//     },
//     controller: {
//         by: 'container',
//         control: swiperProductText,
//     },
//     thumbs: {
//         swiper: swiperProductText
//     }
// });

document.querySelectorAll('.slider-bl').forEach(n => {
    let swiperProductText = new Swiper(n.querySelector('.pp-slider-text'), {
        slidesPerView: 1,
        spaceBetween: 30,
        freeMode: false,
        allowTouchMove: false,
        breakpoints: {
            1157: {
                slidesPerView: 'auto',
                spaceBetween: 30,
                allowTouchMove: true,
            },
        },
    });

    let swiperProduct = new Swiper(n.querySelector('.pp-slider'), {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: n.querySelector('.pp-slider-text__next'),
            prevEl: n.querySelector('.pp-slider-text__prev'),
        },
        controller: {
            by: 'container',
            control: swiperProductText,
        },
        thumbs: {
            swiper: swiperProductText
        }
    });
});

// B19 slider

let swiperB19Thumb = new Swiper('.pp-b19__color-list', {
    // effect: "fade",
    // autoHeight: true,
    slidesPerView: 'auto',
    freeMode: false,
});

let swiperB19 = new Swiper('.pp-b19__slider', {
    effect: "fade",
    autoHeight: true,
    slidesPerView: 1,
    allowTouchMove: true,
    thumbs: {
        swiper: swiperB19Thumb
    },
    on: {
        slideChange: changeColorName,
        init: changeColorName,
    },
});

function changeColorName() {
    let color = $('.pp-b19__color.swiper-slide-thumb-active').attr('data-color-name');
    $('.pp-b19__color-name').text(color);
}

$('.pp-b20__btn').on('click', function() {
    $('.pp-b20__bl2 *').show();
    $(this).hide();
})

let swiperHomeEvent = new Swiper('.ph-events__slider', {
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 30,
    // Navigation arrows

    breakpoints: {
        // when window width is >= 320px
        1157: {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1
        },
    }
});

let swiperHomeTesti = new Swiper('.ph-t__slider', {
    // slidesPerView: 1,
    // slidesPerGroup: 1,
    // Navigation arrows
    spaceBetween: 30,

    breakpoints: {
        // when window width is >= 320px
        1157: {
            slidesPerView: "auto",
            // freeMode: false,
            spaceBetween: 30,
            // slidesPerGroup: 1
        },
    }
});

$('.ph-t-s__more').on('click', function() {
    $(this).prev().removeClass('ph-t-s__hide');
    $(this).hide();
})