(function($) {

  // Banner slider
  $('.slider').slick({
    dots: true,
    infinite: true,
    speed: 1500,
    autoplay: true,
    arrows: true,
    prevArrow: '<div class="prev"><span>previous</span></div>',
    nextArrow: '<div class="next"><span>Next</span></div>',
    slidesToShow: 1.1,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 993,
        settings: {
          arrows: true,
          dots: true,
        }
      },
      {
        breakpoint: 768,
        settings: 'unslick'
      }
    ]
  });

  // refresh slider on browser resize
  // $(window).resize(function() {
  //   $('.slider').slick('refresh');
  // });

  // Form field float js
  $(".form-control").focus(function() {
    $(this).parent().addClass("label-float");
  }).blur(function() {
    var inputValue = $(this).val();
    if (inputValue.length == 0) {
      $(this).parent().removeClass("label-float");
    }
  });

  // Filter system js
  $('.dropdown-menu').click(function(e) {
    e.stopPropagation();
  });

  // REad more less 
  $(document).ready(function() {
    $('.show-content-block button').on('click', function() {
      if ($(this).hasClass("less")) {
        $(this).parent().parent().addClass('content-limit-block');
        $(this).removeClass("less");
        $(this).text("Read More");
      } else {
        $(this).parent().parent().removeClass('content-limit-block');
        $(this).addClass("less");
        $(this).text("Read Less");
      }
    });
    // var content_bk_height = $('.content-limit-block').height();
    
    // if (content_bk_height == 400) {
    //   $('.show-content-block').addClass('block');
    // }

  });

})(jQuery);
