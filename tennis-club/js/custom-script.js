jQuery(document).ready(function ($) {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top a").fadeIn();
    } else {
      $(".back-to-top a").fadeOut();
    }
  });

  $(".back-to-top a").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 800);
    return false;
  });

  //projects-swiper
  var tennis_club_project_Slider = new Swiper(".projects-slider", {
    breakpoints: {
      0: {
        slidesPerView: 1,
        centeredSlides: false,
      },
      768: {
        slidesPerView: 2,
        centeredSlides: false,
      },
      992: {
        slidesPerView: 3,
        centeredSlides: true,
      }
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".projects-swiper-button-next",
      prevEl: ".projects-swiper-button-prev",
    },
  });
  
});
