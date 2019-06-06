$(document).ready(function(){
  // services_section
  $(function(){
    var item_pos = 0;
    $('.service_box').each(function (index, element) {
      if (item_pos == 0) {
        $(this).addClass('col-xl-4 col-lg-5');
      } else
      if (item_pos == 1) {
        $(this).addClass('col-xl-8 col-lg-7');
      } else
      if (item_pos == 2) {
        $(this).addClass('col-lg-6');
      } else
      if (item_pos == 3) {
        $(this).addClass('col-lg-6');
      } else
      if (item_pos == 4) {
        $(this).addClass('col-xl-8 col-lg-7');
      } else
      if (item_pos == 5) {
        $(this).addClass('col-xl-4 col-lg-5');
      };
      if (item_pos == 6) {
        item_pos = 0;
        $(this).addClass('col-xl-4 col-lg-5');
      }
      ++item_pos;
    });
  });

  // production_section
  if ($(window).width() < 600) {
    function scrollToDiv(element,navheight){
      var offset = element.offset();
      var offsetTop = offset.top;
      var totalScroll = offsetTop-navheight;
      $('body,html').animate({
              scrollTop: totalScroll
      }, 500);
    }
    $('.production_thumbnav_item').click(function(){
      var el = $(this).attr('href');
      var elWrapped = $(el);
      scrollToDiv(elWrapped,10);
    });
  };

  $('.span_box').slick({
    rows: 3,
    slidesPerRow: 3,
    infinite: false,
    draggable: false,
    prevArrow: "<button class='pre_btn prev'>Назад</button>",
    nextArrow: "<button class='pre_btn next'>Смотреть еще</button>",
    appendArrows: $('.navContainer'),
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesPerRow: 2,
        }
      },
      {
        breakpoint: 768,
        settings: "unslick"
      }
    ]
  });

  // partners_section
  var slider1 = tns({
    container: '.partners_thumbs',
    nav: false,
    loop: false,
    slideBy: '1',
    autoplay: false,
    controlsContainer: '.parthe',
    axis: "vertical",
    responsive: {
      320: {
        disable: true,
      },
      992: {
        disable: false,
        items: 5,
      }
    }
  });
  var slider2 = tns({
    container: '.partners_thumbs2',
    nav: false,
    loop: false,
    slideBy: '1',
    items: 3,
    autoplay: false,
    controlsContainer: '.parthe2',
    axis: "horizontal",
    responsive: {
      320: {
        items: 3,
      },
      768: {
        items: 4,
      },
      992: {
        disable: true,
      }
    }
  });

  //pre_partners_list
  $(function(){
    UIkit.switcher('partners_switcher');
    $('.partners_switcher').on(
      { 'beforeshow': function(){
        $('.pre_partners').hide();
        $('.part').css({
          'text-align': 'left'
        });
        $('.partners').css({
          'height': 'auto',
          'overflow': 'visible'
        });
      }
    });
    $.each($('.pre_part_item'), function(index, value) {
      $(this).on('click', function(){
        var curr_part = index;
        $('.partners_thumbnav_item').each(function (index, element) {
          if (index == curr_part) {
            $(this).addClass('uk-active');
          }
        });
        slider1.goTo(curr_part);
      });
    });
  });

  $(function(){
    $('.work_field_num').each(function (index, element) {
      var item_num = index+1;
       $(this).text(item_num);
    });
  });

  var slider3 = tns({
    container: '.work_switcher',
    nav: false,
    loop: false,
    controlsContainer: '.our_work_navs',
    slideBy: '1',
    items: 5,
    autoplay: false,
    axis: "horizontal",
    responsive: {
      10: {
        items:0,
        disable: true,
      },
      768: {
        disable: false,
        items: 3,
      },
      992: {
        items: 5
      }
    }
  });

    $('.pre_work').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      draggable: false,
      prevArrow: "<a href='#' class='work_arrow left'></a>",
      nextArrow: "<a href='#' class='work_arrow right'></a>",
      responsive: [
        {
          breakpoint: 992,
          settings: "unslick"
        }
      ]
    });
    $(function(){
      UIkit.switcher('works_list');
      $('.works_list').on(
        { 'beforeshow': function(){
          $('.pre_work').hide();
          $('.work_more').css({
            'height': 'auto',
            'overflow': 'visible'
          });
        }
      });
      $.each($('.pre_learn_more'), function(index, value) {
        $(this).on('click', function(){
          var curr_part = index;
          $('.work_thumb').each(function (index, element) {
            if (index == curr_part) {
              $(this).addClass('uk-active');
            }
          });
          slider3.goTo(curr_part);
        });
      });
    });

  $(function(){
    UIkit.switcher('works_list');
    $('.work_thumb').slice(0, 4).addClass('ready');
    $('.work_thumb').removeClass('tns-slide-active');
    $('.works_list').on(
      { 'beforehide': function(){
        $('.work_thumb').removeClass('ready');
        $('.work_thumb.uk-active').prev().addClass('ready');
        $('.work_thumb.uk-active').next().addClass('ready');
      }
    });
  });

// fin
});
