//////////////ROUTE

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
  
});

Route::get('user/profile', 'UserController@showProfile')->name('profile');


Route::group(['middleware' => 'auth'], function () {
  Route::get('/', function ()    {
        // Uses Auth Middleware
      });

  Route::get('user/profile', function () {
        // Uses Auth Middleware
      });
});

Route::resource('photo', 'PhotoController');

Route::get('user/{id}', 'UserController@showProfile');

//////////////MODEL
php artisan make:model Foo -m

//////////////CONTROLLER

//
public function showProfile($id)
{
  return view('user.profile', ['user' => User::findOrFail($id)]);
}
//

$sid = Input::get('sid');
$goal = Input::get('addGoalIn');
$arr = array(
	'subject_id' => $sid,
	'user_id' => Auth::user()->id,
	'goal' => $goal,
	);
$goal = new Goal();
$goal->fill($arr);
$goal->save();
return "Goal Updated";

//
return View::make('path.page', compact('x', 'y'));
//
return Redirect::to('/subjects/'))->with('danger', 'You Need To Add Some Text To Your Note.');

//////////////ELEQUENT


//////////////JQUERY

$( "#clickme" ).click(function() {
  $( "#book" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});

///

$( document ).ready(function() {

});

//

$( "a" ).click (function( ) {
  alert( "Thanks for visiting!" );
});

//

$.ajax({
	type: 'POST',
	url: '/addNewGoal',
	data: {
		'sid': sid,
		'addGoalIn': addGoalIn
	},
	success: function(data) {

		$('.loadGoal').html('<p>'+addGoalIn+'</p>');

	}
});

//
var sid = $('.subject_id').val();
//
var sid = $(this).data("sid");

//////////////HTML
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="myscripts.js"></script>
//
<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">

<title>Change Me</title>
<meta name="description" content="The HTML5 Herald">
<meta name="Dana" content="This makes the world better">

<link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
<body>


<script src="js/scripts.js"></script>
</body>
</html>

///

<div id='r-mainActions'>
<ul>
<li>
<a href="#">Explore Works</a>
</li>

<li>
<a href="#">Start Writing</a>
</li>
</ul>

{{-- <a href="#" class="closePanels pull-right"><i class='lnr lnr-chevron-right'></i></a> --}}

May/Press is a comfortable place to explore writings from others and with yourself. Create, share and explore all in a simple and easy to use environment. 
<br>
<small>Enjoy.</small> 
<script src="js/j.js"></script>
<script src="bower_components/slidereveal/dist/jquery.slidereveal.min.js"></script>
<script src="js/all.js"></script>


<script type="text/javascript">

$( document ).ready(function() {
  $.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
  });
});

</script>


</div>

  ///

  <span class='userInfo pull-right'>
  @if (Auth::guest())
  <a href="/auth/login"></a>
  @else
  <a href="/auth/logout">Logout</a>
  @endif
  </span>



//////////////CSS