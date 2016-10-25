@extends('galeria.main')
@section('content')


<!--

<table class="bordered responsive-table highlight">
        <thead>
          <tr>
             
              <th data-field="id">Nombre</th>
              <th data-field="name">Descripcion</th>
              <th data-field="name">Imagen</th>
              <th data-field="name">Evento</th>
          </tr>
        </thead>

        <tbody>
        @foreach($album as $al)
          <tr>
            
            <td>{{$al->nombre}}</td>
            <td>{{$al->descripcion}}</td>
            <td>{{$al->imagen}}</td>
            <td>{{$al->evento->nombre}}</td>

            <td><a  href="{{route('album.destroy1',$al->id)}}" class="waves-effect waves-light btn red darken-1 tooltipped" onclick="return confirm('Esta seguro que desea eliminar?')" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons left">delete</i></a></td>
            <td><a href="{{route('album.edit1',$al->id)}}" class="waves-effect waves-light btn teal lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons left">mode_edit</i></a></td>

           
             
          </tr>
          @endforeach
        </tbody>
      </table>





-->

<div class="section">
   <h5 class="header center teal-text text-darken-4">Albums</h5>
  </div>

<div class="row">
@foreach($albums as $album)
<div class="col s12 m4 l4">
  <div class="card small">
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
      
@endsection

@section('js')

<script type="text/javascript">
  $(function(){


$('.collapsible').collapsible();
  });
</script>
@endsection



 