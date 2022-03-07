@extends('layouts.app')

@section('content')
<div class="container p-5 d-flex justify-content-center">
    <div class="row justify-content-center">
        <form action="{{ route('area.store') }}" method="POST" class="p-5">
            <h2 class="text-center">Nueva Area</h2>

            <div class="form-group">
                <legend>Nombre</legend>
                <input type="text" name="nombre_area" class="form-control" placeholder="Nombre"
                    value="{{ old('nombre_area') }}">
                @error('nombre_area')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror()
            </div>

            <div class="form-group">
                <legend>Descripción</legend>
                <input type="text" name="descripcion" class="form-control" placeholder="Descripción"
                    value="{{ old('descripcion') }}">
                @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror()
            </div>

            <div class="form-group">
                <legend>Facultad</legend>
                <select name="facultadselected" class="form-control">
                    @foreach ($facultades as $facultad)
                    <option value="{{ $facultad->id }}" @if ($facultad->id==old('facultadselected'))
                        selected="selected"
                        @endif>{{
                        $facultad->nombre }}</option>
                    @endforeach
                </select>
                @error('facultad')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror()
            </div>

            <div class="form-group p-3">
                <input type="submit" class="btn btn-primary" value="Crear">
                <a class="btn btn-primary" href="{{ route('area.index') }}">Regresar</a>
            </div>
            @if (session()->has('estado'))
            <div class="alert alert-success">{{ session('estado') }}</div>
            @endif
            @csrf
        </form>
    </div>
</div>
@endsection
