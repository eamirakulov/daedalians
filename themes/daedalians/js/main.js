
$('.slider').bxSlider({
	controls: false,
	pager: true,
	mode: 'fade'
});
$('.slider-2').bxSlider({
	controls: true,
	pager: false,
	slideWidth: '740'
});
$(function() {
	//submenu position
	var sub_height = $('.menu ul ul').height();
	$('.menu ul ul').css('bottom', '-' + sub_height + 'px');
});