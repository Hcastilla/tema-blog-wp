$(document).ready( function(){
  //$(".raised-box").raisedBox();

	$('nav .search').on('click', function(){
		$('nav .search-box').css('top','0px');
		$($('nav input')[0]).trigger('focus');
		
	});

	$('nav .search-box .close').on('click', function(){
		$('nav .search-box').css('top','-100px');
	});
	
	/*
	$('img').on('click', function(){
		var src = $(this).attr('src');
		console.log(src);
		$('.full-image').css('background-image','url('+src+')');
		$('.full-image').addClass('full-image-active');
		
	});
	
	$('.full-image').on('click', function(){
		$(this).removeClass('full-image-active');
	});
	*/
	
	
});
