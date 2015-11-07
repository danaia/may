
$( document ).ready(function() {
	$('.logo').on("click",".may",function(e){
	});


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



