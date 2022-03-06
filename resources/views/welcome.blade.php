{{-- @extends('layouts.app')

@section('content')
<div class="container p-5 my-5 bg-primary text-white">
    <div class="">
        <h1 class="">Sistema de Inventario para Hardware</h1>
        <p></p>
    </div>
</div>
@endsection --}}


@extends('layouts.app')
@section('menu')
<li class="nav-item">
    <a class="nav-link" href="{{ route('facultad.index') }}" id="facultades-link">Facultades
        <span class="visually-hidden">(current)</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#" id="areas-link">Areas</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#" id="dispositivos-link">Dispositivos</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#" id="reportes-link">Reportes</a>
</li>
@endsection()
@section('content')
<div class="container p-5 my-5 bg-primary text-white">
    <div class="">
        <h1 class="">Sistema de Inventario para Hardware</h1>
        <p></p>
    </div>
</div>
@endsection()
