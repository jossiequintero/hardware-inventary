{{-- $templatefacultad = "Facultades";
@include($templatefacultad) --}}
@extends('layouts.app')
@section('title')
{{ 'Facultades | ' . config('app.name') }}
@endsection()
@section('active_facultad')
{{ 'active ' }}
@endsection()
@section('content')
<div class="container p-5">
    <div class="d-flex justify-content-end">
        <a href="{{ route('facultad.create') }}" class="btn btn-primary">{{ __('Añadir') }}</a>
    </div>
    <table class="table table-bordered">
        <h2>
            <caption class="text-center">Facultades</caption>
        </h2>
        <thead class=" bg-primary text-white ">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach ($facultades as $facultad)
        <tr>
            <td>{{ $facultad->id }}</td>
            <td>{{ $facultad->nombre }}</td>
            <td class="">
                <a href="{{ route('facultad.edit', $facultad->id)}}" class="text-white btn btn-primary">Editar</a>
                <form action="{{ route('facultad.destroy', $facultad->id) }}" method="POST" class="d-inline">
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
{{-- @extends('layout-facultad.base')
@section('main')
<div class="container p-5">
    <div class="d-flex justify-content-end">
        <a href="{{ route('facultad.create') }}" class="btn btn-primary">{{ __('Añadir') }}</a>
    </div>
    <table class="table table-bordered">
        <h2>
            <caption class="text-center">Facultades</caption>
        </h2>
        <thead class=" bg-primary text-white ">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach ($facultades as $facultad)
        <tr>
            <td>{{ $facultad->id }}</td>
            <td>{{ $facultad->nombre }}</td>
            <td class="">
                <a href="{{ route('facultad.edit', $facultad->id)}}" class="text-white btn btn-primary">Editar</a>
                <form action="{{ route('facultad.destroy', $facultad->id) }}" method="POST" class="d-inline">
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
@endsection() --}}
