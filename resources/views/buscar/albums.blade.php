@extends('galeria.main')
@section('css')
@endsection

@section('content')




<div class="section">
   <h5 class="header center teal-text text-darken-4">Resultados Obtenidos</h5>
  </div>

<div class="row">
@foreach($albumsss as $album)
<div class="col s12 m6 l6">
  <div class="card medium">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator responsive-img" src="/uploads/{{$album->imagen}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
          <h5 class="header center teal-text text-darken-4">
          <a href="{{route('album.show',$album->id)}}"> 
          {{$album->nombre}}</a></h5>
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
      {!! $albumsss->render() !!}
@endsection

@section('js')

<script type="text/javascript">
  $(function(){


$('.collapsible').collapsible();
  });
</script>
@endsection





