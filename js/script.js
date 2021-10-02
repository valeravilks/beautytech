/* global wp, jQuery */

const swiper = new Swiper('.home-slider', {
  effect: "fade",
  autoHeight: true,
  // Navigation arrows
  navigation: {
    nextEl: '.home-slider-next',
    prevEl: '.home-slider-prev',
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
  }

  setValue();

  window.onresize = setValue;
}( jQuery ) );
