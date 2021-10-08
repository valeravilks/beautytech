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

    console.log(windowWidth);
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