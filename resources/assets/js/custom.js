
$( document ).ready(function() {

	//init stuff

	// $('#r-mainActions').slideReveal({
	// 	trigger: $(".may"),
	// 	position: "right",
	// 	width: 300,
	// 	speed: 200
	// });


	//click stuff

	$( ".write" ).focus(function() {
		$('.smallError').html('');
	});



	$('.saveWriting').click(function() {
		
		var token = $('input[name=_token]').val();
		var writings = $('.write').html();
		var title = $('.title').html();

		$.ajax({
			type: 'post',
			url: '/write',
			data: {
				'_token': $('meta[name=csrf-token]').attr('content'),
				'writings': writings,
				'title': title,
			},
			success: function(data) {
				$('.write').html(data.writings);
				toastr.options.timeOut = 1000;
				toastr.options.positionClass = "toast-bottom-right";
				toastr.info("Saved");

				
			},

			error: function(data) {
				var errors = $.parseJSON(data.responseText);
				console.log(errors);

				$.each(errors, function(index, value) {

					$('.smallError').html(value);
				});
			}


		});

	})


}); 



