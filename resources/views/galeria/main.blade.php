<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	{!! Html::style('css/least.min.js'); !!}
	<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fotorama.css') }}">
     <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">


</head>

<body style="background-image: url('img/swirl_pattern.png');">
	<header>
	@yield('css')
</header>
@include('galeria.partials.nav')
<main>

  <div class="container" style="padding-top: 3px;">
     @yield('content') 
  </div>
      
		
 



</main>
<footer>
@include('galeria.partials.footer')
    </footer>
@include('galeria.partials.floating_action_button')
    </div>
    
	<script src="{{ asset('js/sweetalert.min.js') }}"></script>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/fotorama.js') }}"></script>
  {!! Html::script('js/dropzone.js'); !!}
  {!! Html::script('js/least.js'); !!}
	<script type="text/javascript">
		
		 $(document).ready(function(){
      $('.slider').slider({full_width: true});
      $('select').material_select();

  $('.modal-trigger').leanModal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
      starting_top: '4%', // Starting top style attribute
      ending_top: '10%', // Ending top style attribute
      
    }
  );
    });

     $('.datepicker').pickadate({
    format: "yyyy/mm/dd",
    language: "es",
    autoclose: true,
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

$('.least-gallery').least();
	</script>
	@yield('js')
</body>
</html>
