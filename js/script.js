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
    renderBullet: function (index, className) {
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

});

// Line in slider

( function( $ ) {
  function setValue() {
    let buttonWidth = $('.home-slider__link').outerWidth();
    let containerWidth = $('.container').width();
    let windowWidth = $(window).width();
  
    let hr1 = $('.sl__hr-1');
    let hr2 = $('.sl__hr-2');

    // Calc width hr1
    let hr1Width = (windowWidth - containerWidth)/2;

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
}( jQuery ) );


// Product menu

( function( $ ) {

  let h2Content = $('h2');
  let linkItems = $('.product-menu__link');

  linkItems.each(function(index){
    let link = '#';
    let linkCurrent = linkItems.eq(index);
    let dataLinkCurrent = linkCurrent.attr('data-link').toUpperCase();

    h2Content.each(function(i){
      let h2Current = h2Content.eq(i);
      let h2CurrentText = h2Current.text().replace(/\s+/g, " ").trim().toUpperCase();
      if(dataLinkCurrent == h2CurrentText) {
        h2Current.attr('id', linkCurrent.attr('href').substring(1))
      }
    })
  })

}( jQuery ) );


// Faq

( function( $ ) {
  $('.js-faq-quest').on('click' ,function(){
    console.log($(this).next('.js-faq-ans'));
    $(this).find('.js-faq-ans').slideToggle();
    $(this).find('.js-faq-plus').toggleClass('active');
  });
  

}( jQuery ) );

// Cat menu mobile select 

( function( $ ) {
  $('.js-cat-menu-select').on('change' ,function(e){

    e.preventDefault();
    let link = $(this).find('option:selected').attr('data-link');
    window.location.href = link;
  });
  

}( jQuery ) );

// Pop up

( function( $ ) {
  $('.js-consultation').on('click' ,function(e){
    e.preventDefault();

    $('.js-pop-up').fadeIn();
    $('.js-pop-up-bl-1').fadeIn();
    $('body').css('overflow',  'hidden');
  });
  
  $('.js-pop-up-close').on('click', function(){
    $('.js-pop-up').fadeOut();
    $('.js-pop-up-bl-1').fadeOut();
    $('body').css('overflow',  'auto');
  })


}( jQuery ) );

// Mobile menu

( function( $ ) {
  $('.js-menu-open').on('click' ,function(e){
    $('.js-main-menu').fadeIn();
  })
  
  $('.js-menu-close').on('click', function() {
    // if($(window).width() < 1173.98) {
      $('.js-main-menu').fadeOut(function(){
        $('.js-main-menu').css('display', '');
      });
    // }
  })

  let windowWidth = $(window).width();

  $(window).on('resize', function() {
    console.log('res');
      if($(window).width() !== windowWidth ) {
          $('.js-main-menu').fadeOut(function(){
            $('.js-main-menu').css('display', '');
          });
      }
  })

}( jQuery ) );

// Send form in contact page


  var widgetId1;
  var onloadCallback = function() {
    widgetId1 = grecaptcha.render('js-recaptcha', {
      'sitekey' : '6Leu3NccAAAAAODLGu-w6ZJY35kflMhhkMSb6eBt',
      'theme' : 'light'
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

    let rez = grecaptcha.getResponse(widgetId1);
    
    if(rez) {
      $.ajax({
        type: 'POST',
        data: formData,
        url: myajax.url,
        processData: false,
        contentType: false,
        success: function(r){
         $('.js-pop-up').fadeIn();
         $('.js-pop-up-bl-2').fadeIn();
         setTimeout(function(){
           $('.js-pop-up').fadeOut();
           $('.js-pop-up-bl-2').fadeOut();
           $(submitButton).prop('disabled', false);
           form.reset();
         }, 7000);
        },
        error: function(r){
         $('.js-pop-up').fadeIn();
         $('.js-pop-up-bl-3').fadeIn();
         setTimeout(function(){
           $('.js-pop-up').fadeOut();
           $('.js-pop-up-bl-3').fadeOut();
           $(submitButton).prop('disabled', false);
         }, 7000);
        }
      });
    } else {
      alert('Enter the captcha.');
      $(submitButton).prop('disabled', false);
    }
  }
)