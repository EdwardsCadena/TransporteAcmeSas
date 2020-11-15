@extends('layout.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Roles</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rol.create') }}"> Crear Nuevo Rol</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Descripcion</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($rol as $rols)
        <tr>
            <td>{{$rols->IdRol}}</td>
            <td>{{$rols->Descripcion}}</td>
            <td>
                <form action="{{ route('rol.destroy',$rols->IdRol) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('rol.show',$rols->IdRol) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('rol.edit',$rols->IdRol) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
   
@endsection
