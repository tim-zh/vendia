/*!
 * Start Bootstrap - Freelancer Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

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


	function initialize() {
		var mapCanvas = document.getElementById('map');
		var center = new google.maps.LatLng(53.872201, 27.557469);
		var mapOptions = {
			center: center,
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.HYBRID
		};
		var map = new google.maps.Map(mapCanvas, mapOptions);
		var iw = new google.maps.InfoWindow({
			content: "Аэродромная, 119/2"
		});
		var marker = new google.maps.Marker({
			position: center,
			map: map
		});
		iw.open(map, marker);
		google.maps.event.addListener(marker, "click", function(e) {
			iw.open(map, this);
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
	target: '.navbar-fixed-top'
});