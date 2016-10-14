@extends('galeria.main')
@section('title','Home')
@section('content')
<!--
  <div class="slider">
    <ul class="slides">
@foreach($eventicos as $eventico)
      <li>
        <img src="{{$eventico->imagen}}"> 
        <div class="caption {{$collection->random()}}">
          <h3 class="header teal-text text-darken-4">{{$eventico->nombre}}</h3>
          <h5 class="light grey-text text-lighten-3">{{$eventico->fecha}}</h5>
        </div>
      </li>

@endforeach
    </ul>
  </div>  -->


<div class="container">
<div class="row">
<div class="col s12 m12 l12">
<div class="fotorama"
     data-nav="thumbs" data-width="100%" data-ratio="700/467" data-max-width="100%" data-keyboard="true"  data-allowfullscreen="native" data-autoplay="true">
  @foreach($even as $ev)
<img src="{{$ev->imagen}}"></a>
  @endforeach
</div></div></div></d

<div>
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><a href="">
            <i class="material-icons iconfont1 orange600 iconSobre">flash_on</i></a></h2>
            <h5 class="center">Eventos</h5>

          <h5 class="header center teal-text text-darken-4">{{$count}}</h5>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><a href=""><i class="material-icons iconfont1 orange600 iconSobre">picture_in_picture</i></a></h2>
            <h5 class="center">Imagenes</h5>

          <h5 class="header center teal-text text-darken-4">{{$count_imagenes}}</h5>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><a href=""><i class="material-icons iconfont1 orange600 iconSobre">photo_album</i></a></h2>
            <h5 class="center">Albums</h5>

          <h5 class="header center teal-text text-darken-4">{{$count_albums}}</h5>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><a href=""><i class="material-icons iconfont1 orange600 iconSobre">location_on</i></a></h2>
            <h5 class="header center"> Centros</h5>

          <h5 class="header center teal-text text-darken-4">{{$count_centros}}</h5>
          </div>
        </div>

      </div>

    </div>
  </div>

<!-- comienza la section de los eventos -->

  <div class="section">
   <h5 class="header center teal-text text-darken-4">Eventos</h5>
  </div>

<div class="row">
@foreach($eventicos as $eventico)
<div class="col s12 m6 s6">
  <div class="card medium">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator responsive-img" src="{{$eventico->imagen}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
          <h5 class="header center teal-text text-darken-4">{{$eventico->nombre}}</h5>
      <p class="darken-4 blue-text">
       <strong> Categoria:</strong> {{$eventico->categoria->nombre}}<br>
       <strong> Creado:</strong> {{$eventico->created_at->diffForHumans()}}
</p>
 </div>
    <div class="card-reveal z-depth 5">
      <span class="card-title grey-text text-darken-4">{{$eventico->nombre}}<i class="material-icons right">close</i></span>
      <p>
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Descripcion</div>
      <div class="collapsible-body"><p>{{$eventico->descripcion}}</p></div>
    </li>
    <li>
    <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Fecha</div>
      <div class="collapsible-body"><p>{{$eventico->fecha}}</p></div>
    </li>
    <li>
    <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Lugar</div>
      <div class="collapsible-body"><p>{{$eventico->fecha}}</p></div>
    </li>
     <li>
    <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Encargado</div>
      <div class="collapsible-body"><p>{{$eventico->encargado}}</p></div>
    </li>
     <li>
    <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Categoria</div>
      <div class="collapsible-body"><p>{{$eventico->categoria->nombre}}</p></div>
    </li>
    <li>
    <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Centro Organizador</div>
      <div class="collapsible-body"><p>{{$eventico->centro->nombre}}</p></div>
    </li>
  </ul>
      </p>
    </div>
  </div>
  </div>
 
          @endforeach
           </div>


<!-- Section para las ultimas cuatro imagenes agregadas -->

<div class="section">
   <h5 class="header center teal-text text-darken-4">Imagenes</h5>
  </div>




<div class="row">
@foreach($imagenes as $imagen)
<div class="col s12 m6 l6">
  <div class="card medium">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator responsive-img" src="{{$imagen->imagen}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
          <h5 class="header center teal-text text-darken-4"></h5>
      <p class="darken-4 blue-text">
       <strong> Album:</strong> {{$imagen->album->nombre}}<br>
       <strong> Creado:</strong> {{$imagen->created_at->diffForHumans()}}
</p>
 </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
      <p>
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Descripcion</div>
      <div class="collapsible-body"><p>{{$imagen->descripcion}}</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Album</div>
      <div class="collapsible-body"><p>{{$imagen->album->nombre}}</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Fecha de creacion</div>
      <div class="collapsible-body"><p>{{$imagen->created_at->diffForHumans()}}</p></div>
    </li>
    <li>
    
    </li>
  </ul>
      </p>
    </div>
  </div>
  </div>
 
          @endforeach
           </div>


<!-- Seccion para los albums -->
<div class="section">
   <h5 class="header center teal-text text-darken-4">Albums</h5>
  </div>






<div class="row">
@foreach($albumns as $album)
<div class="col s12 m6 l6">
  <div class="card medium">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator responsive-img" src="{{$album->imagen}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
          <h5 class="header center teal-text text-darken-4">{{$album->nombre}}</h5>
      <p class="darken-4 blue-text">
       <strong> Evento:</strong> {{$album->evento->nombre}}<br>
       <strong> Creado:</strong> {{$album->created_at->diffForHumans()}}
</p>
 </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">{{$album->nombre}}<i class="material-icons right">close</i></span>
      <p>
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header waves-effect waves-purple"><i class="material-icons teal600">date_range</i>Descripcion</div>
      <div class="collapsible-body"><p>{{$album->descripcion}}</p></div>
    </li>
      <li>
      <div class="collapsible-header waves-effect waves-purple"><i class="material-icons teal600">date_range</i>Evento al que pertenece</div>
      <div class="collapsible-body"><p>{{$album->evento->nombre}}</p></div>
    </li>
      <li>
      <div class="collapsible-header waves-effect waves-purple"><i class="material-icons teal600">date_range</i>Creado</div>
      <div class="collapsible-body"><p class="darken-4 blue-text">{{$album->created_at->diffForHumans()}}</p></div>
    </li>
    <li>
    
    </li>
  </ul>
      </p>
    </div>
  </div>
  </div>
 
          @endforeach
           </div>



@endsection

@section('js')

{!! Html::script('js/jquery.jrumble.1.3.js'); !!}

<script type="text/javascript">
// Demo 5
$(function(){

$('.iconSobre').jrumble({
        x: 6,
	y: 6,
	rotation: 6,
	speed: .02,
	opacity: true,
	opacityMin: .05
});


$('.iconSobre').hover(function(){
	$(this).trigger('startRumble');
}, function(){
	$(this).trigger('stopRumble');
});


swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
//$.ajax({
            //url: '{{ url('/home') }}',
          //  type: 'GET',
           // dataType : JSON,
        //    success: swal 'Deleted!', 'The member was deleted successfully.'
      //      });

swal("Deleted!", "Your imaginary file has been deleted.", "success");
} else {
	    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
});
</script>
@endsection
