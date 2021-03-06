@extends('layouts.app')

@section('content')
<div class="container p-5 d-flex justify-content-center">
    <div class="row justify-content-center">
        <form action="{{ route('facultad.store') }}" method="POST" class="p-5">
            <h2>Nuevo facultad</h2>
            <div class="form-group">
                <legend>Nombre</legend>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ old('nombre') }}">
                {{-- <span class=" help-black">
                    {{ $errors->first('nombre') }}
                </span> --}}
                @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror()
            </div>

            <div class="form-group p-3">
                <input type="submit" class="btn btn-primary" value="Crear">
                <a class="btn btn-primary" href="{{ route('facultad.index') }}">Regresar</a>
            </div>
            @if (session()->has('estado'))
            <div class="alert alert-success">{{ session('estado') }}</div>
            @endif
            @csrf
        </form>
    </div>
</div>
@endsection
