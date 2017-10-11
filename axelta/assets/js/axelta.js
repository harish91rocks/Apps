/*function for showing Loading page*/
window.onload=function(){ $('.page-loading-message').remove();$('.body-container').addClass('loaded');}

/*function for get equal height*/
var equalheight=function(container){var currentTallest=0,currentRowStart=0,rowDivs=new Array(),$el,topPosition=0;$(container).each(function(){$el=$(this);$($el).height('auto');topPostion=$el.position().top;if (currentRowStart !=topPostion){for (currentDiv=0 ;currentDiv < rowDivs.length ;currentDiv++){rowDivs[currentDiv].height(currentTallest);}rowDivs.length=0;currentRowStart=topPostion;currentTallest=$el.height();rowDivs.push($el);}else{rowDivs.push($el);currentTallest=(currentTallest < $el.height()) ? ($el.height()) : (currentTallest);}for (currentDiv=0 ;currentDiv < rowDivs.length ;currentDiv++){rowDivs[currentDiv].height(currentTallest);}});}
$(window).load(function() {equalheight('.equal-height');});
$(window).resize(function(){equalheight('.equal-height');});

/*function for add active state for a(links)*/
$(function(){$("a").each(function () {var href = $(this).attr('href');if(typeof(href) !== 'undefined') if (window.location.pathname.indexOf(href) !== -1) $(this).parents('li').addClass('active');});});

/*function for add active state for a(links)*/
$(function(){$('.dropdown-menu').click(function(e) {e.stopPropagation();})});
