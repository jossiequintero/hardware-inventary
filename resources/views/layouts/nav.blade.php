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
