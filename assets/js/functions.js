$(function (){

	$('.navbar__icon').on('click', function(e) {
		event.preventDefault()
		$('.navbar__list').toggleClass('open')
	});

});
