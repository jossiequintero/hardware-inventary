@extends('layouts.app')
@section('title')
{{ 'Areas | ' . config('app.name') }}
@endsection()
@section('active_area')
{{ 'active ' }}
@endsection()
@section('content')
<div class="container p-5">
    <div class="d-flex justify-content-end">
        <a href="{{ route('area.create') }}" class="btn btn-primary">{{ __('Añadir') }}</a>
    </div>
    <table class="table table-bordered">
        <h2>
            <caption class="text-center">Areas</caption>
        </h2>
        <thead class=" bg-primary text-white ">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach ($areas as $area)
        <tr>
            <td>{{ $area->id }}</td>
            <td>{{ $area->nombre }}</td>
            <td class="">
                <a href="{{ route('area.edit', $area->id)}}" class="text-white btn btn-primary">Editar</a>
                <form action="{{ route('area.destroy', $area->id) }}" method="POST" class="d-inline">
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
