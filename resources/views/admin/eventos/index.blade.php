@extends('galeria.main')
@section('content')
<div class="row">
  <div class="col s12 m12 l12">
     <div class="fotorama"
     data-nav="thumbs" data-width="100%" data-ratio="700/467" data-max-width="100%" data-keyboard="true"  data-allowfullscreen="native" data-autoplay="true">
  @foreach($alleventos as $allevento)
<img src="uploads/{{'event_'.$allevento->imagen}}"></a>
  @endforeach
     </div>
  </div>
</div>




        <div class="row">
        	@foreach($alleventos as $allevento)
        	<div class="col s12 m6 l6">
        		<div class="card medium blue-grey darken-1">
                 <div class="card-content">
                <img src="uploads/{{'event_'.$allevento->imagen}}" class="img-responsive">
        		</div>
        		<div class="card-action">
        		<p class="darken-4 blue-text">
               <strong> Categoria:</strong> {{$allevento->categoria->nombre}}<br>
       <strong> Organiza:</strong> {{$allevento->centro->nombre}}
            </p></div>

              </div>

        	</div>@endforeach
        </div>
@endsection



 