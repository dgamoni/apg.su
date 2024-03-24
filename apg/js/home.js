$(document).ready(function() {
  var check_click, num_slider, step_carousel, step_slider, width_block_carousel, width_block_carousel_count, width_block_hidden;

  // Carousel Line
  /*
    check_click = false;
    width_block_carousel_count = 0;
    width_block_hidden = $('.block--carousel .container--carousel--hidden').width();
    $('.block--carousel .container--carousel--hidden .container--carousel > div').each(function() {
      return $(this).width(width_block_hidden / 3);
    });
    width_block_carousel = width_block_hidden / 3;
    $('.block--carousel .arrow.left').click(function() {
      check_click = true;
      width_block_carousel_count -= width_block_carousel;
      if (width_block_carousel_count < 0) {
        width_block_carousel_count = $('.block--carousel .container--carousel--hidden .container--carousel').width() - (width_block_carousel * 4);
      }
      $('.block--carousel .container--carousel--hidden .container--carousel').css({
        'transform': 'translateX(-' + width_block_carousel_count + 'px)'
      });
    });
    $('.block--carousel .arrow.right').click(function() {
      check_click = true;
      step_carousel();
    });
    $('.block--carousel').hover(function() {
      check_click = true;
    }, function() {
      check_click = false;
    });
    step_carousel = function() {
      width_block_carousel_count += width_block_carousel;
      if (width_block_carousel_count > $('.block--carousel .container--carousel--hidden .container--carousel').width() - (width_block_carousel * 4)) {
        width_block_carousel_count = 0;
      }
      return $('.block--carousel .container--carousel--hidden .container--carousel').css({
        'transform': 'translateX(-' + width_block_carousel_count + 'px)'
      });
    };
    setTimeout(function() {
      if (!check_click) {
        step_carousel();
      }
      return setTimeout(arguments.callee, 4000);
    }, 4000);
  */


  // Sliders
  /*
    num_slider = 1;
    step_slider = function() {
      if (num_slider >= 3) {
        num_slider = 1;
      } else {
        num_slider++;
      }
      $('.block--slider div.show').removeClass('show');
      $('.block--slider div[data-num=' + num_slider + ']').addClass('show');
    };
    setTimeout(function() {
      step_slider();
      return setTimeout(arguments.callee, 4000);
    }, 4000);
  */

});
