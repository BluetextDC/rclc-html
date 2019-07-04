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
    $(this).parent().prev('.back-btn').addClass('slide-to-left');
  });

  // Back to main menu trigger
  $('.back-btn').on('click', function() {
    $('.main-menu>.menu-item-has-children').removeClass('opacity-none');
    $(this).removeClass('slide-to-left');
    $('.main-menu .menu-item-has-children ul.sub-menu').removeClass('slide-to-right');
  });

// Category counter and other functionality
  $(document).ready(function(){
    // category selected addClass
    $('#cate-check li .alm-checkbox').click(function(){
      if($(this).prop("checked") == true){
        $(this).parent().addClass('clicked');
      }
      else if($(this).prop("checked") == false){
        $(this).parent().removeClass('clicked');
      }
    });

    // caltegory selected counter
    var $checkboxes = $('#cate-check li .alm-checkbox');
    $checkboxes.change(function(){
      var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
        $('.counter').text(countCheckedCheckboxes);
         // caltegory selected hide show elements
        if($checkboxes.filter(':checked').length == 1){
          $(this).parent().parent().parent().parent().find('.first-text').hide();
          $(this).parent().parent().parent().parent().find('.selected-text').show();
          $(this).parent().parent().parent().parent().find('.selected-text').text('item selected');
        }else if($checkboxes.filter(':checked').length >= 2){
          $(this).parent().parent().parent().parent().find('.first-text').hide();
          $(this).parent().parent().parent().parent().find('.selected-text').show();
          $(this).parent().parent().parent().parent().find('.selected-text').text('items selected');
        }else{
          $(this).parent().parent().parent().parent().find('.first-text').show();
          $(this).parent().parent().parent().parent().find('.selected-text').hide();
          $(this).parent().parent().parent().parent().find('.counter').hide();
        }
      });

  });
})(jQuery);
