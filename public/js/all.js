
$( document ).ready(function() {

	//click stuff

	$( ".write" ).focus(function() {
		$('.smallError').html('');
	});

	$('.saveWriting').click(function() {
		
		var token = $('input[name=_token]').val();
		var writings = $('.write').html();
		var title = $('.title').html();
		$('.smallError').html('');

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



	$('.saveProfile').click(function() {
		
		var token = $('input[name=_token]').val();
		var uid = $(this).data("id");
		var name = $('.name').html();
		var email = $('.email').html();
		var bio = $('.bio').html();
		$('.smallError').html('');

		$.ajax({
			type: 'put',
			url: '/user/'+uid,
			data: {
				'_token': $('meta[name=csrf-token]').attr('content'),
				'email': email,
				'name': name,
				'bio': bio
			},
			success: function(data) {
				$( ".profileInfo" ).slideUp(200);
				toastr.options.timeOut = 1000;
				toastr.options.positionClass = "toast-bottom-right";
				toastr.info("Profile Updated");
			},

			error: function(data) {
				var errors = $.parseJSON(data.responseText);

				$.each(errors, function(index, value) {

					$('.smallError').html(value);
				});
			}
		});
	})

	//manage the profile pane

	$( ".showProfile" ).click(function() {
		$( ".profileInfo" ).slideToggle( 200, function() {
		});
	});

	$( ".cancelProfilePanel" ).click (function( ) {
		$( ".profileInfo" ).slideUp(200);
	});

	//sliders

	$('#pub').on("click",".share",function(e){
		e.preventDefault();
		$('#bookPanel').show();
	});

	$('#pub').on("click",".writeMenu",function(e){
		e.preventDefault();
		$('#editPanel').show();
	});

	var editPanel = $('#editPanel').slideReveal();

	editPanel.slideReveal({
		trigger: $(".editAction"),
		position: "left",
		width: 100,
		speed: 200,
		shown: function(editPanel, trigger){
			$('.writeMenu').removeClass('lnr-menu');
			$('.writeMenu').addClass('lnr-cross');
		},
		hidden: function(editPanel, trigger){
			$('.writeMenu').removeClass('lnr-cross');
			$('.writeMenu').addClass('lnr-menu');
		}
	});




	$('#bookPanel').slideReveal({
		trigger: $(".share"),
		position: "left",
		push: false,
		width: 300,
		speed: 200
	});

	$('#bookPanel').on("click",".closeBookPanel",function(e){
		e.preventDefault();
		$('#bookPanel').slideReveal("hide");
	});




}); 




//# sourceMappingURL=all.js.map
