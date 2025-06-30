var w3sing = (function () {
  "use strict";

  var preloader = function(){
    // Preloader
    setTimeout(function () {
      $(".ic-preloader").fadeOut(500);
    }, 1000);
    // preloader
    // $(window).on("load", function () {
    //   $(".ic-preloader").fadeOut(500);
    // });
  }
  var setActivePage = function(){
    // page active
    var path = window.location.href;
    if (path == "/" || path === "/index" || path === "/index2") {
      path = "/index";
      console.log(path);
    }
    $(".ic-navbar-nav li a").each(function () {
      if (this.href === path) {
        $(this).parent().addClass("is-current");
      }
    });
  }
  var setupFancybox = function(){
    // best photo gallery
    Fancybox.bind("[data-fancybox]");
  }
  var handleMobileMenu = function(){
    if ($(window).width() <= 1199) {
      // Toggle submenu visibility on click
      $(".nav-item > a").click(function (e) {
        e.preventDefault();
        var $submenu = $(this).next(".submenu");

        // Slide toggle the submenu and close others
        $(".submenu").not($submenu).slideUp();
        $submenu.slideToggle();
      });
    }
  }

  var setupQuantityButtons = function(){
    // incrementPlus count
    $(".cart-qty-plus").on("click", function () {
      var $n = $(this).parent(".ic-quantity-input").find(".qty");
      $n.val(Number($n.val()) + 1);
    });

    // incrementMinus count

    $(".cart-qty-minus").on("click", function () {
      var $n = $(this).parent(".ic-quantity-input").find(".qty");
      var amount = Number($n.val());
      if (amount > 0) {
        $n.val(amount - 1);
      }
    });
  }

  var setupPagination = function(){
    // pagination active
    $(".pagination li a").on("click", function (e) {
      e.preventDefault();
      $(".pagination li a").removeClass("active");
      $(this).addClass("active");
    });
  }

  var bannerSlider = function(){
     // banner slick slider
     $(".ic-banner-slider")
     .slick({
       dots: false,
       infinite: true,
       slidesToShow: 1,
       slidesToScroll: 1,
       arrows: false,
       autoplay: true,
       speed: 800,
       dots: true,
       lazyLoad: "progressive",
       responsive: [
         {
           breakpoint: 1200,
           settings: {
             dots: true,
           },
         },
       ],
     })
     .slickAnimation();
   $(".ic-banner-slider-prev").click(function () {
     $(".ic-banner-slider").slick("slickPrev");
   });

   $(".ic-banner-slider-next").click(function () {
     $(".ic-banner-slider").slick("slickNext");
   });
  }

  var artistSlider = function(){
    // about tour artists slick slider
    $(".ic-artist-slider").slick({
      dots: false,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
    $(".ic-artist-prev").click(function () {
      $(".ic-artist-slider").slick("slickPrev");
    });

    $(".ic-artist-next").click(function () {
      $(".ic-artist-slider").slick("slickNext");
    });
  }

  var albumSlider = function(){
    // Album slider
    $(".ic-album-slider").slick({
      dots: false,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 400,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
    $(".ic-artist-prev").click(function () {
      $(".ic-album-slider").slick("slickPrev");
    });

    $(".ic-artist-next").click(function () {
      $(".ic-album-slider").slick("slickNext");
    });
  }
  var productSlider = function(){
    $(".ic-related-products-slider").slick({
      dots: false,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 400,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
    $(".ic-products-prev").click(function () {
      $(".ic-related-products-slider").slick("slickPrev");
    });

    $(".ic-products-next").click(function () {
      $(".ic-related-products-slider").slick("slickNext");
    });
  }
  var blogSlider = function(){
    $(".ic-related-news-slider").slick({
      dots: false,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
    $(".ic-news-prev").click(function () {
      $(".ic-related-news-slider").slick("slickPrev");
    });

    $(".ic-news-next").click(function () {
      $(".ic-related-news-slider").slick("slickNext");
    });
  }

  var productDetailsSlider = function(){
    $(".ic-product-details-big-img").slick({
      dots: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      asNavFor: ".ic-product-details-small-img",
    });
    $(".ic-product-details-small-img").slick({
      dots: false,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      asNavFor: ".ic-product-details-big-img",
      focusOnSelect: true,
    });
  }

  var audioPlayer = function(){
    $(".audio-player").each(function () {
      const player = $(this);
      const audio = new Audio(
        "https://github.com/rafaelreis-hotmart/Audio-Sample-files/raw/master/sample.mp3"
      );
      // credit for song: Adrian kreativaweb@gmail.com

      audio.addEventListener("loadeddata", function () {
        player.find(".time .length").text(getTimeCodeFromNum(audio.duration));
        audio.volume = 0.75;
      });

      // click on timeline to skip around
      const timeline = player.find(".timeline");
      timeline.on("click", function (e) {
        const timelineWidth = parseInt(timeline.css("width"));
        const timeToSeek = (e.offsetX / timelineWidth) * audio.duration;
        audio.currentTime = timeToSeek;
      });

      // click volume slider to change volume
      const volumeSlider = player.find(".controls .volume-slider");
      volumeSlider.on("click", function (e) {
        const sliderWidth = parseInt(volumeSlider.css("width"));
        const newVolume = e.offsetX / sliderWidth;
        audio.volume = newVolume;
        player
          .find(".controls .volume-percentage")
          .css("width", newVolume * 100 + "%");
      });

      // check audio percentage and update time accordingly
      setInterval(function () {
        const progressBar = player.find(".progress");
        progressBar.css(
          "width",
          (audio.currentTime / audio.duration) * 100 + "%"
        );
        player
          .find(".time .current")
          .text(getTimeCodeFromNum(audio.currentTime));
      }, 500);

      // toggle between playing and pausing on button click
      const playBtn = player.find(".controls .toggle-play");
      playBtn.on("click", function () {
        if (audio.paused) {
          playBtn.removeClass("icofont-ui-play").addClass("icofont-ui-pause");
          audio.play();
        } else {
          playBtn.removeClass("icofont-ui-pause").addClass("icofont-ui-play");
          audio.pause();
        }
      });

      player.find(".volume-button").on("click", function () {
        const volumeEl = player.find(".volume-container .volume");
        audio.muted = !audio.muted;
        if (audio.muted) {
          volumeEl
            .removeClass("icofont-volume-bar")
            .addClass("icofont-mute-volume");
        } else {
          volumeEl
            .addClass("icofont-volume-bar")
            .removeClass("icofont-mute-volume");
        }
      });

      // turn 128 seconds into 2:08
      function getTimeCodeFromNum(num) {
        let seconds = parseInt(num);
        let minutes = parseInt(seconds / 60);
        seconds -= minutes * 60;
        const hours = parseInt(minutes / 60);
        minutes -= hours * 60;

        if (hours === 0)
          return `${minutes}:${String(seconds % 60).padStart(2, 0)}`;
        return `${String(hours).padStart(
          2,
          0
        )}:${minutes}:${String(seconds % 60).padStart(2, 0)}`;
      }
    });
  }

  var countdown = function(){
    if (document.querySelector(".countdown")) {
      // Set the date we're counting down to
      var countDownDate = new Date(
        new Date().setFullYear(new Date().getFullYear() + 1)
      );

      var countdownfunction = setInterval(function () {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Calculate months (approximate calculation)
        var months = Math.floor(distance / (1000 * 60 * 60 * 24 * 30.437)); // Approximate number of days per month
        // Recalculate the distance after accounting for months
        var daysLeftAfterMonths =
          distance - months * 1000 * 60 * 60 * 24 * 30.437;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(daysLeftAfterMonths / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
          (daysLeftAfterMonths % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor(
          (daysLeftAfterMonths % (1000 * 60 * 60)) / (1000 * 60)
        );
        var seconds = Math.floor((daysLeftAfterMonths % (1000 * 60)) / 1000);

        // Output the result in an element with id="months", "days", "hours", "minutes", and "seconds"
        var monthsElement = document.getElementById("months");
        if (monthsElement) {
          monthsElement.innerHTML = ("0" + months).slice(-2);
        }
        document.getElementById("days").innerHTML = ("0" + days).slice(-2);
        document.getElementById("hours").innerHTML = ("0" + hours).slice(-2);
        document.getElementById("minutes").innerHTML = ("0" + minutes).slice(
          -2
        );
        document.getElementById("seconds").innerHTML = ("0" + seconds).slice(
          -2
        );

        // If the count down is over, write some text
        if (distance < 0) {
          clearInterval(countdownfunction);
          document.querySelector(".countdown").innerHTML = "EXPIRED";
        }
      }, 1000);
    }
  }

  var shopCategories = function(){
    // catagories collapse
    $(".ic-shop-catagories-links li a").on("click", function (e) {
      e.preventDefault();
      $(this).siblings().slideToggle();
    });
  }

  var backTopTop = function(){
    // back to top
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 50) {
        $(".ic-back-top").css({
          bottom: "4%",
          opacity: "1",
          transition: "all .5s ease-in-out",
        });
      } else {
        $(".ic-back-top").css({
          bottom: "-5%",
          opacity: "0",
          transition: "all .5s ease-in-out",
        });
      }
    });
    $(".ic-back-top").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        0
      );
      return false;
    });
  }

  var videPlayer = function(){
    if ($(".ic-video-player")) {
      const player = new Plyr(".ic-video-player");
    }
  }
  var wowAnimation = function(){
    new WOW().init();
      // console.log(typeof WOW);
  }

  return {
    init: function () {
      preloader();
      setActivePage();
      setupFancybox();
      handleMobileMenu();
      setupQuantityButtons();
      setupPagination();
      bannerSlider();
      artistSlider();
      albumSlider();
      productSlider();
      blogSlider();
      productDetailsSlider();
      audioPlayer();
      countdown();
      shopCategories();
      backTopTop();
      videPlayer();
      wowAnimation();
    },
  };
})();

$(document).ready(function () {
  "use strict";
  w3sing.init();
});
