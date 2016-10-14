<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
	

</head>

<body style="background-image: url("/img/seigaiha.png");">

	<header>
	@yield('css')
</header>

<main>
          <div class="container center">
		@yield('content')
		</div>
     
</main>

<footer>

    </footer>


    
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/materialize.js') }}"></script>
	@yield('js')
</body>
</html>
