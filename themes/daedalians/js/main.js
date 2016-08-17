
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
	$('.menu ul ul').each(function() {
		var sub_height = $(this).height();
		$(this).css('bottom', '-' + sub_height + 'px');
	});


    var scotchPanel = $('#scotch-panel').scotchPanel({
        containerSelector: 'body',
        direction: 'left',
        duration: 300,
        transition: 'ease',
        distanceX: '60%',
        enableEscapeKey: true
    });

    $('.toggle-panel').click(function() {
        scotchPanel.toggle();
        return false;
    });
});