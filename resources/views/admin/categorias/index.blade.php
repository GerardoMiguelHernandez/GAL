@extends('galeria.main')




@section('content')
<table class="bordered responsive-table highlight">
        <thead>
          <tr>
             
              <th data-field="id">Nombre</th>
              <th data-field="name">Descripcion</th>
              <th data-field="name">Creado</th>
          </tr>
        </thead>

        <tbody>
        @foreach($categories as $category)
          <tr>
            
            <td>{{$category->nombre}}</td>
            <td>{{$category->descripcion}}</td>
            <td>{{$category->created_at->diffForHumans()}}</td>

            <td><a  href="{{route('categoria.destroy1',$category->id)}}" class="waves-effect waves-light btn red darken-1 tooltipped" onclick="return confirm('Esta seguro que desea eliminar?')" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons left">delete</i></a></td>
            <td><a href="{{route('categoria.edit1',$category->id)}}" class="waves-effect waves-light btn teal lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons left">mode_edit</i></a></td>

           
             
          </tr>
          @endforeach
        </tbody>
      </table>





@endsection




