@extends('layouts.app')

@section('content')
<div class="container p-5">
    <a href="{{ route('departamento.create') }}" class="btn btn-primary">{{ __('Añadir') }}</a>
    <table class="table table-bordered">

        <h2>
            <caption class="text-center">Departamentos</caption>
        </h2>

        <thead class=" bg-primary text-white ">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach ($departamentos as $departamento)
        <tr>
            <td>{{ $departamento->id }}</td>
            <td>{{ $departamento->nombre }}</td>
            <td class="" >
                <a href="{{ route('departamento.edit', $departamento->id)}}" class="text-white btn btn-primary">Editar</a>
               <form action="{{ route('departamento.destroy', $departamento->id) }}" method="POST" class="d-inline">
                <input type="submit" value="Eliminar" class="btn btn-danger">
                {{ method_field('DELETE') }}
                @csrf
               </form>
            </td>
        </tr>
        @endforeach
       @if (session()->has('estado'))
            <div class="alert alert-success">{{ session('estado') }}</div>
        @endif
    </table>
</div>
@endsection