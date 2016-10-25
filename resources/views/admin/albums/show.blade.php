@extends('galeria.main')

@section('content')

<div class="section">
   <h5 class="header center teal-text text-darken-4">{{$album->nombre}}</h5>
  </div>

<div class="container"><div class="row">
  <div class="col s12 m12 l12">
     <div class="fotorama"
     data-nav="thumbs" data-width="100%" data-ratio="700/467" data-max-width="100%" data-keyboard="true"  data-allowfullscreen="native" data-autoplay="true">
  @foreach($imagenes as $img)
<img src="/uploads/{{$img->imagen}}"></a>
  @endforeach
     </div>
  </div>
</div>
</div>

@endsection