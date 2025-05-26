$(function () {
  // Case Studies Slider
  $('.case-studies-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    infinite: true,
    dots: false,
    draggable: true,
    responsive: [
      { breakpoint: 992, settings: { slidesToShow: 2 } },
      { breakpoint: 768, settings: { slidesToShow: 1 } }
    ]
  });

  // Services Slider
  $('.slick-services').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    infinite: true,
    responsive: [
      { breakpoint: 992, settings: { slidesToShow: 2 } },
      { breakpoint: 576, settings: { slidesToShow: 1 } }
    ]
  });

  $('#customPrev').on('click', function () {
    $('.slick-services').slick('slickPrev');
  });

  $('#customNext').on('click', function () {
    $('.slick-services').slick('slickNext');
  });

  // Blogs Slider
  var $slider = $('.blogs-slider');
  $slider.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    arrows: false,
    dots: false,
    responsive: [
      { breakpoint: 992, settings: { slidesToShow: 2 } },
      { breakpoint: 768, settings: { slidesToShow: 1 } }
    ]
  });

  $('#prevSlide').on('click', function () {
    $slider.slick('slickPrev');
  });

  $('#nextSlide ').on('click', function () {
    $slider.slick('slickNext');
  });

  // Success Card Slider
    $('.success-slider').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      infinite: false,
      prevArrow: $('.carousel-control-prev'),
      nextArrow: $('.carousel-control-next'),
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });
  

  // Testimonial Slider
  var $testimonialSlider = $('.testimonial-slider');
  $testimonialSlider.slick({
    arrows: false,
    dots: false,
    infinite: true,
    speed: 500,
    fade: false,
    cssEase: 'linear'
  });

  var slideCount = $testimonialSlider.slick('getSlick').slideCount;
  var $stepIndicator = $('.step-indicator');
  $stepIndicator.empty();

  for (let i = 0; i < slideCount; i++) {
    const stepNumber = i + 1;
    const stepDiv = $('<div>', { class: 'step', text: stepNumber });
    if (i === 0) stepDiv.addClass('active');
    $stepIndicator.append(stepDiv);
  }

  function updateStepBar() {
    $stepIndicator.find('.step-bar').remove();
    $stepIndicator.find('.step.active').append('<div class="step-bar"></div>');
  }

  updateStepBar();

  $stepIndicator.on('click', '.step', function () {
    var index = $(this).index();
    $testimonialSlider.slick('slickGoTo', index);
  });

  $testimonialSlider.on('afterChange', function (event, slick, currentSlide) {
    $stepIndicator.find('.step').removeClass('active');
    $stepIndicator.find('.step').eq(currentSlide).addClass('active');
    updateStepBar();
  });
});


