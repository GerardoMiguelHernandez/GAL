@section('css')
<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

 <div class="navbar-fixed z-depth-5">
<nav class="top-nav white scrollTo">
    <div class="nav-wrapper">
      <a href="{{route('home')}}" class="brand-logo">



              
               <img class=" logo responsive-img" src="/img/cfe.png"> <!-- notice the "circle" class -->
            
        


      </a>
<ul class="right hide-on-med-and-down"> 
<!--
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
</li> -->
<li><a href="#modalsearch" class="modal-trigger"><i class="material-icons blue600">search</i></a> </li>
<li><a href="{{route('eventos.index')}}"><i class="material-icons left blue600">flash_on</i><span class="blue-text text-darken-4">Eventos</span></a></li>
<!--<li><a href="{{route('categoria.index')}}"><i class="material-icons left blue600">view_module</i><span class="blue-text text-darken-4">Categorias</span></a></li> -->
       
        <li><a href="{{route('album.index')}}"><i class="material-icons left blue600">library_books</i><span class="blue-text text-darken-4">Albums</span></a></li>
        <li><a href="{{route('imagen.index')}}"><i class="material-icons left blue600">picture_in_picture</i><span class="blue-text text-darken-4">Imagenes</span></a></li>
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




    <div id="modalsearch" class="modal transparent">
    <div class="modal-content">
      

<div class="page-login">
  <div class="center">
      <div class="card z-depth-5" style="margin:0% auto; max-width:400px;">
        <div class="card-header">
        
          <h5 class="header center purple-text text-darken-4">Buscar</h5> 
        </div>
        <div class="card-content">
          
           {!! Form::open(['route'=>'buscar.index','method'=>'GET'])!!}
         
          
           
            <div class="input-field col s12">
              <input id="input_buscar" type="text" name="input_buscar" class="validate">
              <label for="descripcion" class="center">Buscar</label>
            </div>
              <div class="input-field col s12">
    <select name="table_buscar">
      <option value="" disabled selected>Selecciona en donde buscar</option>
      <option value="Eventos">Eventos</option>
      <option value="Albums">Albums</option>
      <option value="Imagenes">Imagenes</option>
    </select>
    <label>Selecciona opcion</label>
  </div>
            <br>
              <button type="submit" id="categoria" class="btn-floating btn-large waves-effect waves-light red center"><i class="material-icons">search</i></button>
         {!! Form::close() !!}
        </div>
        
      </div>
    </div>
    </div>
    
  </div></div>
  
@section('js')
<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/materialize.js') }}"></script>




@endsection