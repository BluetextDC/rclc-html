(function($) {

// desktop menu slide effects start

new WOW().init();





var toggles = document.querySelectorAll(".c-hamburger");

for (var i = toggles.length - 1; i >= 0; i--) {
  var toggle = toggles[i];
  toggleHandler(toggle);
};

function toggleHandler(toggle) {
  toggle.addEventListener("click", function(e) {
    e.preventDefault();
    if (this.classList.contains("is-active") === true) {
      this.classList.remove("is-active");
      $('.open').removeClass('oppenned');
    } else {
      this.classList.add("is-active");
      $(".open").addClass('oppenned');
    }
  });
}
// $(".sub-menu li a").click(function(event) {
//   $(".open").removeClass('oppenned');
//   $(".c-hamburger").removeClass('is-active');
// });

// desktop menu slide effects end


// course link hover remove
          jQuery( ".course a.cc-link-btn" )
          .mouseenter(function() {  
            jQuery('.course .btn-outer .btn').addClass("remove_hover");
          })
          .mouseleave(function() {
            jQuery('.course .btn-outer .btn').removeClass("remove_hover");
          });
// course link hover remove


      $('#clear-all-category').click(function() {
             var uri = window.location.toString();
              var clean_uri = uri.substring(0, uri.indexOf("?"));
              if (uri.indexOf("?") > 0) {
                  window.location.replace(clean_uri);
              }
              else {
                window.location.replace(clean_uri);
              }
          });



          $(document).on('click', '.wysiwyg-block a[href^="#"]', function(event) {
              event.preventDefault();
              $('html, body').animate({
                  scrollTop: $($.attr(this, 'href')).offset().top-100
              }, 500);
          });


$(".search-action-expand").click(function(){
  $("#desktop-search").addClass('show-search');
});

$(".close-search-box").click(function(){
  $("#desktop-search").removeClass('show-search');
});
$(".c-hamburger").click(function(){
  $("#desktop-search").removeClass('show-search');
});


  if ($(window).width() > 768) {
    $('.my-paroller').paroller();
  }
  // Banner slider
  $('.slider').slick({
    dots: true,
    infinite: true,
    speed: 1500,
    autoplay: true,
    initialSlide : 1,
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

// banner text slider

var $s = $(".banner-text-slider");
$s.slick({ 
    dots: false,
    infinite: true,
    autoplaySpeed: 4000,
    autoplay: true,
    arrows: false,
    draggable: false,
    pauseOnHover: false,
    fade: true,
   cssEase: 'ease-in-out',
    touchThreshold: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 993,
      settings: {
        arrows: false,
        dots: false,
      }
    }
    ]
});

  // $('.banner-text-slider').slick({
  //   dots: false,
  //   infinite: true,
  //   autoplaySpeed: 3000,
  //   speed: 1000,
  //   autoplay: true,
  //   initialSlide : 1,
  //   arrows: false,
  //   draggable: false,
  //   pauseOnHover: false,
  //   fade: true,
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   responsive: [{
  //     breakpoint: 993,
  //     settings: {
  //       arrows: false,
  //       dots: false,
  //     }
  //   }
  //   ]
  // });
  

$('.banner-para').delay(1500).queue(function(){
  $(this).addClass("opacity_full");
});
$('.top-heading').delay(500).queue(function(){
  $(this).addClass("opacity_full");
});
$('.banner-text-slider').delay(1000).queue(function(){
  $(this).addClass("opacity_full");
});


  // Form field float js
  $(".form-control").focus(function() {
    $(this).parent().parent().addClass("label-float");
  }).blur(function() {
    var inputValue = $(this).val();
    if (inputValue.length == 0) {
      $(this).parent().parent().removeClass("label-float");
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
  if ($(window).width() > 320) {
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
  $('.main-menu .menu-item-has-children').on('click touchstart', function() {
    $(this).parent().parent().find('.main-menu>.menu-item-has-children').addClass('opacity-none');
    $(this).parent().parent().find('.main-menu>.menu-link').addClass('opacity-none');
    $(this).find('ul.sub-menu').addClass('slide-to-right');
    $(this).parent().parent().prev('.back-btn').addClass('slide-to-left');
  });

  // Back to main menu trigger
  $('.back-btn').on('click', function() {
    $('.main-menu>.menu-item-has-children').removeClass('opacity-none');
    $('.main-menu>.menu-link').removeClass('opacity-none');
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
           $(this).parent().parent().parent().parent().find('.counter').show();
           $(this).parent().parent().parent().parent().find('.selected-text').show();
           $(this).parent().parent().parent().parent().find('.selected-text').text('item selected');
         }else if($checkboxes.filter(':checked').length >= 2){
           $(this).parent().parent().parent().parent().find('.first-text').hide();
           $(this).parent().parent().parent().parent().find('.counter').show();
           $(this).parent().parent().parent().parent().find('.selected-text').show();
           $(this).parent().parent().parent().parent().find('.selected-text').text('items selected');
         }else{
           $(this).parent().parent().parent().parent().find('.first-text').show();
           $(this).parent().parent().parent().parent().find('.selected-text').hide();
           $(this).parent().parent().parent().parent().find('.counter').hide();
         }
       });
  });

  // Contact form js
  // user click on contact cta open contact form
  $('.cta-section .cta-outer.show-form-btn a').on('click', function(){
    $(this).hide();
    $(this).parent().parent().find('.contact-form').fadeIn();
  });

  // Contact form JSON

  // Image Block js
  $('.slider-sec .slider .bg-img.row-2').parent().parent().parent().parent().removeClass('first-slide');
  // Image Block js
})(jQuery);
