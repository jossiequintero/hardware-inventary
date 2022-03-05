@extends('layouts.app')

@section('content')
<div class="container p-5 d-flex justify-content-center">
 <div class="row justify-content-center">
        <form action="{{ route('departamento.update',$departamento->id) }}" method="POST" class="p-5">
          @csrf
            @method('PUT')
            <h2>Nuevo Departamento</h2>
            <div class="form-group">
                <legend>Nombre</legend>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $departamento->nombre }}">
                <span class=" help-black">
                    {{ $errors->first('nombre') }}
                </span>
            </div>

            <div class="form-group p-3">
                <input type="submit" class="btn btn-primary" value="Actualizar">
                <a class="btn btn-primary" href="{{ route('departamento.index') }}">Regresar</a>
            </div>
            @if (session()->has('estado'))
                <div class="alert alert-success">{{ session('estado') }}</div>
            @endif
            @csrf
        </form>
    </div>
    </div>
@endsection