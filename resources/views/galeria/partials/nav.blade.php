@section('css')
<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
<div class="container">
<nav class="top-nav white scrollTo" style="border-radius: 25px;">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">



              
               <img class=" logo responsive-img" src="/img/cfe.png"> <!-- notice the "circle" class -->
            
        


      </a>
<ul class="right hide-on-med-and-down"> 

<li>
  <div class="nav-wrapper">
      <form>
     
        <div class="input-field blue600-text">
          <input id="search" class="blue600-text" type="search" required>
          <label for="search"><i class="material-icons blue600">search</i></label>
          <i class="material-icons">close</i>
        </div>

      

      </form>
    </div>
</li>
<li><a href=""><i class="material-icons left blue600">account_circle</i><span class="blue-text text-darken-4">Login</span></a></li>
<li><a href=""><i class="material-icons left blue600">search</i><span class="blue-text text-darken-4">Login</span></a></li>
       
        <li><a href=""><i class="material-icons left blue600">refresh</i><span class="blue-text text-darken-4">Login</span></a></li>
        <li><a href="mobile.html"><i class="material-icons left blue600">account_circle</i><span class="blue-text text-darken-4">Login</span></a></li>
</ul>            
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons blue600">menu</i></a>

<ul class="side-nav" id="mobile-demo">
       <li><a href=""><i class="material-icons">search</i>usuarios</a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i>eventos</a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i>categoria</a></li>
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a>Ver mas</li>
      </ul>

    </div>
  </nav>
  </div>
@section('js')
<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/materialize.js') }}"></script>
@endsection