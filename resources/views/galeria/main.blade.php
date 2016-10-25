<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


  {!! Html::style('css/animations.css'); !!}
   {!! Html::style('css/least.min.css'); !!}
	<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fotorama.css') }}">
     <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">


</head>

<body style="background-image: url('img/asanoha-400px.png');">
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
 {!! Html::script('js/css3-animate-it.js'); !!}
  {!! Html::script('js/least.js'); !!}
  
	<script type="text/javascript">
		
		 $(document).ready(function(){
      $('.slider').slider({full_width: true});
      $('select').material_select();
$('.modal-trigger').leanModal();

 
    });

     $('.datepicker').pickadate({
    format: "yyyy/mm/dd",
    language: "es",
    autoclose: true,
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

$('.least-gallery').least();
$(".button-collapse").sideNav();
	</script>
	@yield('js')
</body>
</html>
