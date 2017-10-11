$(function() {
	$('#collapse-more-1, #collapse-more-2').on('hidden.bs.collapse', function() {
		$(this).closest('.panel-body.equal-height').height(collapse_more_height);
		$(this).closest('.panel').find('.panel-footer .label').html('<span class="glyphicon glyphicon-circle-arrow-down"></span>  more');
	});
	$('#collapse-more-1, #collapse-more-2').on('show.bs.collapse', function() {
		collapse_more_height = $(this).closest('.panel-body.equal-height').height();
		$(this).closest('.panel-body.equal-height').height('auto');
		$(this).closest('.panel').find('.panel-footer .label').html('<span class="glyphicon glyphicon-circle-arrow-up"></span>  less');
	});
	
	$('[data-toggle="popover"]').popover({trigger: "manual",}).on("click", function(e) {
		e.preventDefault();}).on("mouseenter", function() {
		var _this = this;$(this).popover("show");
		$(this).siblings(".popover").on("mouseleave", function() {$(_this).popover('hide');});
	}).on("mouseleave", function() {
		var _this = this;
		setTimeout(function() {if (!$(".popover:hover").length) $(_this).popover("hide");}, 50);
		$('.popover').on("mouseleave", function() {$('.popover').remove();});
	});
	
});