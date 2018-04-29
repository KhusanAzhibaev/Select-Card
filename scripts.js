$(document).ready(function(){
	
	$(".card").on("click", function() {
		$(".card").removeClass("current");
		$(this).addClass("current");
	});

	function loading() {
		$(".loader").addClass("loading");
	}

	function completed(){
		$(".loading").removeClass("loading");
	}	

	function update_card(result){
		$(".card").removeClass('current');
		$("." + result).addClass('current');
		
	}

	function failed(){
		$(".buttons").append("<div class='ajax-failure'>Oops. The server failed to respond.</div>");
		$(".ajax-failure").slideDown(500);
		setTimeout(function(){ 
			$(".ajax-failure").slideUp(500, function(){
				$(".ajax-failure").remove(); 
			});			
		}, 3000);
	}

	$("button.suite-button").on("click", function(){
		selectedSuite = $(this).attr('data-suite');
		test_loading = $(".test_loading").is(':checked');
		test_failure = $(".test_failure").is(':checked');
		$.ajax({
			beforeSend: loading,
			type: 'POST',
			url: "select.php",
			data: { suite:selectedSuite, test_loading:test_loading, test_failure:test_failure },
			dataType: 'html',
			success: update_card,
			error: failed,
			complete: completed
		});
	});
	
});