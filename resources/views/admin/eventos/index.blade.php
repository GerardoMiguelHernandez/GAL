@extends('galeria.main')
@section('content')
<!--
<div class="container"><div class="row">
  <div class="col s12 m12 l12">
     <div class="fotorama"
     data-nav="thumbs" data-width="100%" data-ratio="700/467" data-max-width="100%" data-keyboard="true"  data-allowfullscreen="native" data-autoplay="true">
  @foreach($alleventos as $allevento)
<img src="/uploads/{{$allevento->imagen}}"></a>
  @endforeach
     </div>
  </div>
</div>
</div> -->

 <div class="section">
   <h5 class="header center teal-text text-darken-4">Eventos</h5>
  </div>


<div class="row">
@foreach($alleventos as $eventico)
<div class="col s12 m4 s4">
  <div class="card small sticky-action">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator responsive-img" src="/uploads/{{$eventico->imagen}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
          <h5 class="header center teal-text text-darken-4"> <a href="{{route('eventos.show',$eventico->id)}}">{{$eventico->nombre}}</a></h5>
      <p class="darken-4 blue-text">
       <strong> Categoria:</strong> {{$eventico->categoria->nombre}}
       </p>
         <p class="darken-4 blue-text"><strong> Creado:</strong> {{$eventico->created_at->diffForHumans()}}</p>
             

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
      <div class="collapsible-body"><p>{{$eventico->lugar}}</p></div>
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



      
@endsection

@section('js')

<script type="text/javascript">
  $(function(){


$('.collapsible').collapsible();
  });
</script>
@endsection



 