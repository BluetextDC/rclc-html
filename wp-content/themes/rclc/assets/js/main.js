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

  // Read more less 
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

  });

  // on scroll js
  if ($(window).width() > 768) {
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 200) {
        $(".header").addClass("dark-bg");
      } else {
        $(".header").removeClass("dark-bg");
      }
    });
  }
  // on scroll js

  // Navigation js
  $('.trigger-outer').on('click', function() {
    $('.navigation-outer').addClass('active');
  });

  // when user click on close btn menu closed
  $('.close-btn').on('click', function() {
    $(this).parent().removeClass('active');
    $('.main-menu .menu-item-has-children ul.sub-menu').removeClass('slide-to-right');
    $('.back-btn').removeClass('slide-to-left');
  });

  // when user click anywhere on body 
  $('body').click(function(evt) {
    if ($(evt.target).closest('.navigation-outer, .trigger-outer').length)
      return;
    $('.navigation-outer').removeClass('active');
    $('.main-menu .menu-item-has-children ul.sub-menu').removeClass('slide-to-right');
    $('.back-btn').removeClass('slide-to-left');
  });

  // Click for show submenu
  $('.main-menu .menu-item-has-children').on('click', function() {
    $(this).parent().parent().find('.main-menu>.menu-item-has-children').addClass('opacity-none');
    $(this).find('ul.sub-menu').addClass('slide-to-right');
    $(this).parent().parent().prev('.back-btn').addClass('slide-to-left');
  });

  // Back to main menu trigger
  $('.back-btn').on('click', function() {
     $('.main-menu>.menu-item-has-children').removeClass('opacity-none');
    $(this).removeClass('slide-to-left');
    $('.main-menu .menu-item-has-children ul.sub-menu').removeClass('slide-to-right');
  });

})(jQuery);
