@extends('layouts.app')

@section('content')
<div class="container p-5 d-flex justify-content-center">
    <div class="row justify-content-center">
        <form action="{{ route('facultad.update',$facultad->id) }}" method="POST" class="p-5">
            @csrf
            @method('PUT')
            <h2>Actualizar Facultad</h2>
            <div class="form-group">
                <legend>Nombre</legend>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre"
                    value="{{ $facultad->nombre }}">
                <span class=" help-black">
                    {{ $errors->first('nombre') }}
                </span>
            </div>

            <div class="form-group p-3">
                <input type="submit" class="btn btn-primary" value="Actualizar">
                <a class="btn btn-primary" href="{{ route('facultad.index') }}">Regresar</a>
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
