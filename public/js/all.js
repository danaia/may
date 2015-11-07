
$( document ).ready(function() {
	$('.logo').on("click",".may",function(e){
	});


	$('.write').focusout(function() {

		var token = $('input[name=_token]').val();
		var writings = $('.write').html();

		$.ajax({
			type: 'POST',
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

	$('.title').focusout(function() {

		var token = $('input[name=_token]').val();
		var title = $('.title').text();

		$.ajax({
			type: 'POST',
			url: '/write',
			data: {
				'_token': $('meta[name=csrf-token]').attr('content'),
				'title' : title
			},
			success: function(data) {
				$('.title').html(data.title);
			}
		});

	})


}); 




//# sourceMappingURL=all.js.map
