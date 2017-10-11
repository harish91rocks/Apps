$(function(){
	/*affix*/
	/*$('.nav-header .navbar-fixed-top').affix({
		offset: $('.nav-header .navbar-fixed-top').position()
	});*/
	$('.nav-header .navbar-fixed-top').addClass('affix-top');
	$('body').addClass('has-affix-top');
	$(window).scroll(function(e){
		$('.nav-header').height()
		if($(window).scrollTop()>= 100){
			$('.nav-header .navbar-fixed-top').addClass('affix').removeClass('affix-top');
			$('body').addClass('has-affix').removeClass('has-affix-top');
		}else{
			$('.nav-header .navbar-fixed-top').addClass('affix-top').removeClass('affix');
			$('body').addClass('has-affix-top').removeClass('has-affix')
		}
	});
	/**/
	/*set body-container min-height*/
	$('.body-container').css({'min-height':$(window).height()-($('.nav-header').height()+$('.nav-footer').height())});
	$(window).resize(function(){
		$('.body-container').css({'min-height':$(window).height()-($('.nav-header').height()+$('.nav-footer').height())});
	});
	/**/
	/*navbar-collapse*/
	$('[data-toggle="navbar-collapse"]').click(function(){
		var _this=this;
		$('[data-toggle="navbar-collapse"]').not('[data-target='+$(_this).attr('data-target')+']').removeClass('active');
		$('[data-target='+$(this).attr('data-target')+']').toggleClass('active');
		$('.nvabar-in').not($(_this).attr('data-target')).removeClass('nvabar-in').slideUp();
		$($(this).attr('data-target')).slideToggle().toggleClass('nvabar-in');
	});
	$(document).click(function(e){
		if((!$(e.target).is('[data-toggle="navbar-collapse"]') && $('[data-toggle="navbar-collapse"]').has(e.target).length == 0) && (!$(e.target).is('.nvabar-in') && $('.nvabar-in').has(e.target).length == 0)){
			$('[data-toggle="navbar-collapse"]').removeClass('active');
			$('.nvabar-in').removeClass('nvabar-in').slideUp();
		}
	});
	/**/
	$('[title]').tooltip();
	
	/*login-form*/
	$('#forgot-password-link, #forgot-password-cancel').click(function(){
		$('#login-form, #forgot-password-form').slideToggle();//toggleClass('active');
		return false;
	});
	$('[data-target="#navbar-collapse-login"]').click(function(){
		$('#login-form').show();
		$('#forgot-password-form').hide();
	});
	/**/
});