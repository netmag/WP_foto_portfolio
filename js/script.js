jQuery(document).ready(function() {

  var url = '';
  var displaySlider = $('.slider').css('display');
  var previewCount = '';
  var slideNow = 1;
  var slideCount = '';
  var translateWidth = 0;
  var fotoCount = '';
  var dataId = getQueryParam('cat');
  var pageHome = $('.header_menu > ul > li:first > a').attr('href');

  jQuery('.d-carousel .carousel').jcarousel({
    scroll: 2,
    wrap: 'circular'
  });

  $(".close-btn").on('click', function() {
    switchDisplay();
  });

  $(".content__gallery").on('click', '.gallery__preview > img', function() {
    switchDisplay();
    slideNow = $(this).attr('alt');
    fotoCount = 1;
    previewCount = $('.content__gallery > ul').children().length;
    $(".slide").remove();
    while (fotoCount <= previewCount) {
      url = pageHome + 'wp-content/themes/photopholio' + '/img/' + dataId + '/photo--full-' + fotoCount + '.jpg';
      ajax(url, fotoCount);
      fotoCount++;
    };

    translateWidth = -$('.viewport').width() * (slideNow - 1);
    $('.slidewrapper').css({
      'transform': 'translate(' + translateWidth + 'px, 0)',
      '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
      '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
     });
  });

  function getQueryParam(param) {
    if ($('.main > div').hasClass('slider')) {
      var search = document.location.search;
      var values = search.slice(1).split('&').filter(
        function(item) {
          return item.split('=')[0] === param;
        }
      );
      return values.pop().split('=').pop();
    }
  };

  function ajax(url, count) {
    $.ajax({
      url: url,
      type: 'HEAD'
    })
    .done(function() {
      displaySlider = $('.slider').css('display');
      if (displaySlider == 'none') {
        fillPreview(url, count);
      } else {
        fillSlider(url, count);
      };
      slideCount = $('.slidewrapper').children().length;
    })
    .fail(function() {
     })
    .always(function() {
     });
  };

  function fillSlider(url, count) {
    var slideWidth = 100 / previewCount;
    $('.slidewrapper').append(
      $('<li/>').addClass('slide').css({
        'width': slideWidth + '%'
      }).append(
        $('<img/>').attr({
          src: url,
          class: 'slide-img',
          alt: 'Foto'
        })
      )
    );
    $('.slidewrapper').css({
      'width': 'calc(100% * ' + previewCount + ')'
    });
  };

  function fillPreview(url, count) {
    $('.content__gallery > ul').append(
      $('<li/>').attr({
        class:'gallery__preview',
        'foto-id': count
      }).append(
        $('<img/>').attr({
          src: url,
          alt: 'Foto preview'
        })
      )
    );
  };

  function switchDisplay() {
    displaySlider = $('.slider').css('display');
    if (displaySlider == "none") {
      $('.slider').css({'display': 'block'});
      $('.logo_bg, .main__content').css({'display': 'none'});
    } else if (displaySlider == "block") {
      $('.slider').css({'display': 'none'});
      $('.logo_bg, .main__content').css({'display': 'flex'});
    }
  };

    // slider

  $('.next-btn').click(function() {
    nextSlide();
  });

  $('.prev-btn').click(function() {
    prevSlide();
  });

  function prevSlide() {
    if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
        translateWidth = -$('.viewport').width() * (slideCount - 1);
        $('.slidewrapper').css({
          'transform': 'translate(' + translateWidth + 'px, 0)',
          '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
          '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow = slideCount;
    } else {
        translateWidth = -$('.viewport').width() * (slideNow - 2);
        $('.slidewrapper').css({
          'transform': 'translate(' + translateWidth + 'px, 0)',
          '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
          '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow--;
    }
  }

  function nextSlide() {
    if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
      $('.slidewrapper').css('transform', 'translate(0, 0)');
      slideNow = 1;
    } else {
      translateWidth = -$('.viewport').width() * (slideNow);
      $('.slidewrapper').css({
        'transform': 'translate(' + translateWidth + 'px, 0)',
        '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
        '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
      });
      slideNow++;
    }
  }


  });