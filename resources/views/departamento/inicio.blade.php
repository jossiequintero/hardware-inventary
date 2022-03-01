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
            </tr>
        </thead>
        @foreach ($departamentos as $departamento)
        <tr>
            <td>{{ $departamento->id }}</td>
            <td>{{ $departamento->nombre }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
