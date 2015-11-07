
$( document ).ready(function() {

	//init stuff

	$("#r-mainActions").slideReveal({
		trigger: $("#trigger"),
		position: "right",
		width: 400,
		speed: 200
	});

	//click stuff

	$('.logo').on("click",".may",function(e){
	});

	$('a .closePanels').slideReveal("hide");


	$('.write').focusout(function() {

		var token = $('input[name=_token]').val();
		var writings = $('.write').html();

		$.ajax({
			type: 'post',
			url: '/write',
			data: {
				'_token': $('meta[name=csrf-token]').attr('content'),
				'writings': writings,
			},
			success: function(data) {
				$('.write').html(data.writings);
			}
		});

	})


}); 




//# sourceMappingURL=all.js.map
