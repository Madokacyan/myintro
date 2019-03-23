$(function(){
	
	var $win = $(window), 
		$htmlBody = $('html, body'), 
		$menu = $('#menu'), 
		_height = $menu.outerHeight(true), 
		_diffY = 50, 
		_menuSpeed = 400, 
		_pageSpeed = 600;
	

	$menu.find('a').click(function(event){
		
		event.preventDefault(); 

		var $this = $(this),
			_id = $this.attr('href');
		
		$htmlBody.animate({
			scrollTop: $(_id).offset().top - _diffY
		}, _pageSpeed);
	});
});
/*diffY是menu高度,下面連結會自動往下
,只有第一個區域需再設padding-top:50px*/