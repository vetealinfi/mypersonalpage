jQuery(document).ready(function(){

	
	if($("#flashMessage").length){
		$.extend($.gritter.options, { 
			position: 'bottom-right', 
			fade_in_speed: 'medium',
			fade_out_speed: 2000,
			time: 6000
		});
		$.gritter.add({
			text: $("#flashMessage").html()
		});
		$("#flashMessage").hide();
	}
	
	
});	