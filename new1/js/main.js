$(function() {
  $('#cYear')[0].innerHTML = 1900 + new Date().getYear();

  // jQuery for page scrolling feature - requires jQuery Easing plugin
  $('.page-scroll a').bind('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top
    }, 500);
    event.preventDefault();
  });

  ymaps.ready(function () {
    var map = new ymaps.Map("map", {
      center: [53.872201, 27.557469],
      zoom: 17,
      controls: ['smallMapDefaultSet'],
      type: 'yandex#satellite'
    });

    myPlacemark = new ymaps.Placemark([53.872201, 27.557469], { hintContent: 'Аэродромная, 119/2' });
    map.geoObjects.add(myPlacemark);
  });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
  target: '.navbar-fixed-top'
});