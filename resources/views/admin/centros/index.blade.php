@extends('galeria.main')
@section('content')




<table class="bordered responsive-table highlight">
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="id">Direccion</th>
              <th data-field="name">Region</th>
              <th data-field="name">Codigo Postal</th>
              <th data-field="name">Telefono</th>
              <th data-field="name">Responsable</th>
            
          </tr>
        </thead>

        <tbody>
        @foreach($centros as $centro)
          <tr>
            <td>{{$centro->nombre}}</td>
            <td>{{$centro->direccion}}</td>
            <td>{{$centro->region}}</td>
            <td>{{$centro->codigoPostal}}</td>
            <td>{{$centro->telefono}}</td>
            <td>{{$centro->responsable}}</td>
            
            <td><a href="{{route('centros.destroy1',$centro->id)}}" class="waves-effect waves-light btn red darken-1 tooltipped" data-position="bottom" onclick="return confirm('Esta seguro que desea eliminar?')" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete_sweep</i></a></td>
            <td><a href=""class="waves-effect waves-light btn teal lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons left">mode_edit</i></a></td>
             
          </tr>
          @endforeach
        </tbody>
      </table>
      



@endsection