@extends('galeria.main')
@section('css')
@endsection

@section('content')

<div class="section">
   <h5 class="header center teal-text text-darken-4">Resultados Obtenidos</h5>
  </div>
 <div class="row">
@foreach($imagenesss as $img)
<div class="col s12 m6 l6">
  <div class="card medium sticky-action">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator responsive-img" src="/uploads/{{$img->imagen}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
          <h5 class="header center teal-text text-darken-4"></h5>
      <p class="darken-4 blue-text">
       <strong> Categoria:</strong> {{$img->album->nombre}}
       </p>
         <p class="darken-4 blue-text"><strong>Descripcion:</strong> {{$img->descripcion}}</p>
             

 </div>
  

    <div class="card-reveal z-depth 5">
      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
      <p>
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Descripcion</div>
      <div class="collapsible-body"><p>{{$img->descripcion}}</p></div>
    </li>
    <li>
    <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Album</div>
      <div class="collapsible-body"><p>{{$img->album->nombre}}</p></div>
    </li>
    <li>
    <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Creado</div>
      <div class="collapsible-body"><p>{{$img->created_at->diffForHumans()}}</p></div>
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
<script type="text/javascript">
  $(function(){


$('.collapsible').collapsible();
  });
</script>
@endsection