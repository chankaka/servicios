@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))

{{Session::get('mensaje')}}
@endif

<a href="{{ url('servicio/create')}}">Registrar Nuevo Servicio</a>
<table class="table table-light">
    
<thead class="thead-light">
        <tr>
        <th>#</th>
        <th>Servicio</th>
        <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($servicios_var as $servicio)
        <tr>
            <td>{{ $servicio->id}}</td>
            <td>{{ $servicio->servicio}}</td>
            <td><a href="{{ url('/servicio/'.$servicio->id.'/edit')}}">Editar</a> | 
                <form action="{{url('/servicio/'.$servicio->id)}}" method="post">
                 @csrf
                 {{ method_field('DELETE') }}   
                <input type="submit" onclick="return confirm ('Desea borrar el servicio?')" value="Borrar">

                </form>
</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection