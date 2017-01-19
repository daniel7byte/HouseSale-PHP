"use strict";
(function ($) {
  /***************************************************************
   * Enables javascript support for theme
   ==============================================================*/
  app.initTheme({
    // Please update this options if you changes theme color scheme
    colorTheme: 'default',
    /** By default all svg icons are inlined at the beggining of
     * the <body> tag. If you would like to remove that inlined
     * data from the template, please set this to true.
     ==============================================================*/
    loadSvgWithAjax: false
  });
  /***************************************************************
   * Enables fixed menu
   * Enables fixed search bar in mobile view
   *
   * To disable this just comment out
   ==============================================================*/
  app.activateHeaderSpy();

  /***************************************************************
   * Enables "Scroll to top" button
   *
   * To disabled this just comment out and remove the corresponding
   * code from templates
   ==============================================================*/
  app.activateScrollToTopSpy();

  app.scrollAnimation();

  /***************************************************************
   * Panel useful for development, where you can
   * enable or disable various theme features.
   *
   * Usually, this should be disabled on live website.
   ==============================================================*/
  app.activateUIPanel();

  /**
   * See more options
   * https://developers.google.com/maps/documentation/javascript/reference#MapOptions
   */

  initPlyr('.player');
  initPartnersSlider('#partners-slider');
  //initSelect2('select.form-control');
  //initSearch('.js-search-form');
  initGallery('.js-gallery-item');
  initAgentForm('.js-contact-form');
  initSubscribe('.js-subscribe-form');
  initReviewSlider('#review-slider');
  initMainBanner('.js-banner');
  initWideSlider('#slider-wide');
  initBannerSlider('.js-banner-slider');
  initBannerSliderAndThumbs('.js-slider-thumbs');
  //initIndexMap('.js-map-index-canvas', window.demodata);
  //initIndexMap('.js-map-canvas-fullscreen', window.demodata);
  //initPropertyMapAndPanorama('.js-map-canvas[data-type="map"]', '.js-map-canvas[data-type="panorama"]', window.demodata[3]);
  initSubmitPropertyForm('.js-form');
  initRangeSliders();
  initSlider('.js-slick-blog');
  initSlider('.js-slick-plan');
  initSlider('#counter-slider');
  initSlider('#properties-banner');
  //initGoogleMap('.js-map-canvas-contact', window.demodata[3]);
  initBtnDemo('.js-btn-demo');
  initPopovers('.js-popover');
  //initGeocoderGoogleMap('.js-map-location-dashboard-submit', {lat: 37.7749295, lng: -122.41941550000001});
  //initGeocoderGoogleMap('.js-map-location-dashboard', {lat: 37.7749295, lng: -122.41941550000001});
  //initGeocoderGoogleMap('.js-map-location-dashboard-hidden', {lat: 37.7749295, lng: -122.41941550000001});
  //initLeafletMap('.js-map-canvas-leaflet', window.demodata);


  /***************************************************************
   * Common javascript code used on most of the pages
   * You can place here the code that is run on every page.
   * We do not advice to put here the code that runs only on
   * specific page, because we care (and you should) about
   * performance.
   ==============================================================*/
  (function () {

    /***************************************************************
     * Examples of form validations
     *
     * Plugins used:
     * - http://parsleyjs.org/doc/index.html (for validation itself)
     * - https://github.com/sciactive/pnotify (for showing global notifications)
     *
     * Validation options are set via data-parsley-* attributes,
     * see example in the templates (for example feedback form in
     * the footer) or http://parsleyjs.org/doc/examples.html
     ==============================================================*/

    if ($('.js-form-property-1').length !== 0) {
      $('.js-form-property-1')
        .parsley()
        .on('form:success', function (formInstance) {
          app.notifier.showSuccess('You have successfully submit the form! 1');
          $('.form-property--dashboard a[href="#Location"]').tab('show'); // Select last tab
          return false;
        })
        .on('form:error', function (formInstance) {
          app.notifier.showError('Submited failed! Please try again. 2');

          return false;
        })
        .on('form:submit', function (formInstance) {
          // do something with your data here
          console.log(arguments);
          formInstance.submitEvent.preventDefault();
        });
    }

  })();

  function initSubscribe (container) {

    /**
     * Subscribe form validation initialization as well as
     * displaying PNotify global message on error/success
     *
     * app.notifier.showSuccess/showError is a wrapper around `PNotify` function
     * with predefined defaults to make it look good in this theme
     *
     * if you would like to modify it, feel free to use the PNotify
     * plugin directly
     ==============================================================*/
    var $subscribeForm = $(container);
    if (!$subscribeForm.length)  return;
    $subscribeForm
      .parsley()
      .on('form:success', function (formInstance) {
        app.notifier.showSuccess('You have been successfully subscribed!');
        return false;
      })
      .on('form:error', function (formInstance) {
        app.notifier.showError('Subscription failed! Please try again.');
        return false;
      });
  }

  function initAgentForm (container) {
    /**
     * Agent contact form validation
     ==============================================================*/
    var $agentForm = $(container);
    if (!$agentForm.length) return;
    var $agentFormSubmitBtn = $agentForm.find(':submit');
    $agentForm.parsley()
    //  .on('form:success', function (formInstance) {
    //    $agentFormSubmitBtn.addClass('loading');
    //    $agentFormSubmitBtn.prop('disabled', true);
    //    $.post('php/contact.php', $agentForm.serialize())
    //      .done(function () {
    //        app.notifier.showSuccess('The message was sent!');
    //        formInstance.reset();
    //        $agentForm[0].reset();
    //      })
    //      .fail(function () {
    //        app.notifier.showError('Something went wrong!');
    //      })
    //      .always(function () {
    //        $agentFormSubmitBtn.prop('disabled', false);
    //        $agentFormSubmitBtn.removeClass('loading');
    //      });
    //
    //    formInstance.submitEvent.preventDefault();
    //
    //  });

  }

  function initGallery (container) {
    /**
     * Setup image popups with Photoswipe plugin
     * See documentation in http://photoswipe.com/documentation/options.html
     ==============================================================*/
    var $galleryItem = $(container);
    if (!$galleryItem.length) return;
    var gallery = app.createPhotoSwipe(container,
      {
        /*
         See here available options
         http://photoswipe.com/documentation/options.html
         */
      }
    );
  }


  function initPartnersSlider(container) {
    /**
     * Slick slider for "Our partners" block
     * See documentation for options http://kenwheeler.github.io/slick/
     ==============================================================*/
    var $partnersSlider = $(container) ;
    if (!$partnersSlider.length) return;

    $partnersSlider
      .find('.js-slick-slider')
      .slick({
        dots: false,
        infinite: true,
        speed: 100,
        slidesToShow: 5,
        autoplay: true,
        accessibility: false,
        prevArrow: $partnersSlider.find('.js-partners-prev'),
        nextArrow: $partnersSlider.find('.js-partners-next'),
        responsive: [
          {
            breakpoint: 1100,
            settings: {
              slidesToShow: 4
            }
          },
          {
            breakpoint: 1000,
            settings: {
              slidesToShow: 3
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
  }

  
  function initPlyr(container) {
    /***************************************************************
     * Plyr initialization for displaying html5 video
     * If you don't plan to have html5 video on the website,
     * you can remove this
     * Documentation https://github.com/selz/plyr
     ==============================================================*/
    var $player = $(container);
    if (!$player.length) return;
    plyr.setup();
    //
    //$('.js-player-play').on('click', function () {
    //  $(this).closest('.player')[0].plyr.play();
    //  $(this).hide();
    //});
  }

  function initReviewSlider(container) {
    /***************************************************************
     * Initialize sliders for user reviews
     * See http://kenwheeler.github.io/slick/ for more options
     ==============================================================*/
    var $reviewSlider = $(container);
    if (!$reviewSlider.length) return;
    $reviewSlider
      .find('.js-slick-slider')
      .slick({
        dots: true,
        infinite: true,
        speed: 10,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 10
      });
  }

  
  
  function initMainBanner(container) {
    var $container = $(container);
    if (!$container.length) return;

    var $searchForm = $container.find('.js-search-form');
    var $header = $('.header');
    var $headerNav = $('#header-nav');
    var $mainBannerMap = $container.find('.map');

    /***************************************************************
     * Initialize banner animation
     * Just add class start animation on document ready
     ==============================================================*/

    $container.addClass('banner--play');
    $searchForm.on('formChange', _.throttle(showMap, 10));
    initBannerLineAnimation(container);
    initIndexMap('.js-map-index-canvas');

    var stateOpenedMap = false;

    function showMap() {
      if (stateOpenedMap) return;
      if (app.gridSize.get() === 'lg') {
        requestAnimationFrame(function () {
          if ($headerNav.hasClass('navbar--overlay')) {
            $header.addClass('header--white');
            $headerNav.addClass('navbar--overlay-map');
          }
          $mainBannerMap.addClass('opened');
          $searchForm.addClass('form--white');
          stateOpenedMap = true;
        });
      }
    }
  }

  
  
  function initBannerLineAnimation(container) {
    /***************************************************************
     * Initialize line animation
     * See https://github.com/maxwellito/vivus for more options
     ==============================================================*/
    if (!$('#banner-line').length) return;
    var $container = $(container);
    var $searchForm = $container.find('.js-search-form');

    new app.Vivus('banner-line', {type: 'async', start: 'autostart', ignoreInvisible: false, duration: 50}, function () {
      var $sliderItem = $('#banner-line').closest('.slider__item');
      if ($sliderItem.hasClass('slick-slide') && !$sliderItem.hasClass('slick-active')) return;
      $container.find('.js-arrow-end').css({opacity: 1});
      $searchForm.addClass('form--anim');
    });
  }

  
  
  

  
  
  
  


  
  
  function initRangeSliders() {
    /***************************************************************
     * Example usage of range sliders that replace the
     * price/rooms/area "from" and "to" fields
     *
     * For documentation
     * and options see https://github.com/IonDen/ion.rangeSlider
     ==============================================================*/
    var $rangeArea = $("#range_area");
    var $rangePrice = $("#range_price");
    var $rangeCommision = $("#range_commision");
    var $rangeRoom = $("#range_room");
    var $rangeUi = $("#range_ui");

    if ($rangeArea.length ) {
      $rangeArea.ionRangeSlider({
        type: "double",
        min: 0,
        max: 2000,
        hide_min_max: true,
        hide_from_to: false,
        grid: false,
        postfix: ' sq ft',
        force_edges: true,
        step: 1,
        max_postfix: '+',
        onFinish: app.rangeInputInteraction
      });
    }

    if ($rangePrice.length ) {
      $rangePrice.ionRangeSlider({
        type: "double",
        min: 0,
        max: 100,
        hide_min_max: true,
        hide_from_to: false,
        grid: false,
        prefix: '$',
        force_edges: true,
        max_postfix: '+',
        step: 10,
        // converts numbers like 4000000 to 4m, remove if you don't like it
        prettify: function (value) {
          return app.utils.abbreviateNumber(value)
        },
        onFinish: app.rangeInputInteraction
      });
    }

    if ($rangeRoom.length ) {
      $rangeRoom.ionRangeSlider({
        type: "double",
        min: 0,
        max: 10,
        from: 0,
        to: 10,
        hide_min_max: true,
        hide_from_to: false,
        grid: false,
        max_postfix: '+',
        onFinish: app.rangeInputInteraction
      });
    }

    if ($rangeCommision.length ) {
      $rangeCommision.ionRangeSlider({
        type: "double",
        min: 0,
        max: 10000,
        from: 0,
        to: 10000,
        hide_min_max: true,
        hide_from_to: false,
        grid: false,
        max_postfix: '+',
        prefix: 'RM ',
        onFinish: app.rangeInputInteraction
      });
    }

    if ($rangeUi.length ) {
      $rangeUi.ionRangeSlider({
        type: "double",
        min: 1000,
        max: 2000,
        from: 1200,
        to: 1800,
        hide_min_max: true,
        hide_from_to: false,
        grid: false,
        onFinish: app.rangeInputInteraction
      });
    }

  }

  function initSlider(container) {
    /***************************************************************
     * Slider for blog pages
     * See http://kenwheeler.github.io/slick/ for more options
     ==============================================================*/
    var $blogSliders = $(container);
    if (!$blogSliders.length) return;

    $blogSliders.each(function () {
      var $sliderContainer = $(this),
        $sliderCurrent = $sliderContainer.find('.js-slick-current'),
        $sliderTotal = $sliderContainer.find('.js-slick-total');


      $sliderContainer
        .find('.js-slick-slider')
        .on('init', function (event, slick) {
          $sliderTotal.html(slick.slideCount);
        })
        .slick({
          dots: false,
          infinite: true,
          speed: 100000,
          slidesToShow: 1,
          centerMode: false,
          prevArrow: $sliderContainer.find('.js-slick-prev'),
          nextArrow: $sliderContainer.find('.js-slick-next')
        })
        .on('afterChange', function (event, slick, currentSlide) {
          $sliderCurrent.html(currentSlide + 1 + ' /');
        });
    });
  }





})(jQuery);
