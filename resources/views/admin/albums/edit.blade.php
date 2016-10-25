@extends('galeria.main')
@section('css')
@endsection

@section('content')




<div class="container">

   <div class="card bordered z-depth-5" style="margin:0% auto;">
        

	   <div class="row">
		    <div class="col s12 m12 l12">
			
				 {!! Form::open(['route' => ['album.update',$album], 'method' => 'PUT', 'files' => 'true','class'=>'col s12']) !!}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
<div class="row">
						<div class="col s12 cyan">
						<div class="panel-heading"><h3 class="header center teal-text ">Editar Album</h3></div>
						</div>

					</div>
					<div class="row">

						<div class="input-field	col s12">
						{!! form::label('nombre','Nombre')!!}
                            {!! form::text('nombre',$album->nombre,['class' => 'form-control']) !!}


							</div>	
							<div class="input-field col s12">
						{!! form::label('descripcion','Descripcion')!!}
                            {!! form::text('descripcion',$album->descripcion,['class' => 'form-control']) !!}
						</div>
						<div class="col s12">
						{!! form::label('image','Imagen')!!}
                            {!! form::file('imagen',null,['class' => 'form-control']) !!}
						</div>	

						  <div class="input-field col s12">
                <select name="evento_id">
                    <option disabled selected>Elige Evento</option>
                    @foreach($alleventos as $allevento)
                    <option value="{{$allevento->id}}">{{$allevento->nombre}}</option>
                    @endforeach
                </select>
                <label>Categoria</label>
            </div>	
					
					
		

            </div>
         
<div class="row">
              <div class="col s6 offset-s3">
			
     <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
    <i class="material-icons right">send</i>
  </button>
  </div></div>
				
				</form>
			
		</div>
	</div>
	</div>
</div>



@endsection

@section('js')
@endsection