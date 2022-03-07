@extends('layouts.app')
@section('title'){{ 'Areas | ' . config('app.name') }}@endsection()
@section('content')
<div class="container p-5 d-flex justify-content-center">
    <div class="row justify-content-center">
        <form action="{{ route('area.update',$area) }}" method="POST" class="p-5">
            @csrf
            @method('PUT')
            <h2>Actualizar Area</h2>
            <div class="form-group">
                <legend>Nombre</legend>
                <input type="text" name="nombre_area" class="form-control" placeholder="Nombre"
                    value="{{ $area->nombre }}">
                <span class=" help-black">
                    {{ $errors->first('nombre_area') }}
                </span>
            </div>

            <div class="form-group">
                <legend>Descripción</legend>
                <input type="text" name="descripcion" class="form-control" placeholder="Descripción"
                    value="{{ $area->descripcion }}">
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
                    <option value="{{ $facultad->id }}" @if ($facultad->id==$area->facultad_id)
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
                <input type="submit" class="btn btn-primary" value="Actualizar">
                <a class="btn btn-primary" href="{{ route('area.index') }}">Regresar</a>
            </div>
            {{-- @if (session()->has('estado'))
            <div class="alert alert-success">{{ session('estado') }}</div>
            @endif --}}
            @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @else
            @if (session()->has('estado'))
            <div class="alert alert-success">{{ session('estado') }}</div>
            @endif
            @enderror
            @csrf
        </form>
    </div>
</div>
@endsection
