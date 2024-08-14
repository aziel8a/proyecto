@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="mb-4 text-center">
        <h1>Editar Socio</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('personas.update', $socio->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input type="text" value="{{ old('nombre', $socio->nombre) }}" name="nombre" class="form-control form-control-custom" id="inputNombre" placeholder="Introduce el nombre de la modalidad">
            <small class="form-text form-text-custom">El nombre de la modalidad.</small>
        </div>
        <div class="mb-3">
            <label for="inputNombre" class="form-label">Apellido Paterno</label>
            <input type="text" value="{{ old('apaterno', $socio->apaterno) }}" name="apaterno" class="form-control form-control-custom" id="inputNombre" placeholder="Introduce el nombre de la modalidad">
            <small class="form-text form-text-custom">El apellido paterno del socio</small>
        </div>

        <div class="mb-3">
            <label for="inputNombre" class="form-label">Apellido Materno</label>
            <input type="text" value="{{ old('amaterno', $socio->amaterno) }}" name="amaterno" class="form-control form-control-custom" id="inputNombre" placeholder="Introduce el nombre de la modalidad">
            <small class="form-text form-text-custom">El apellido materno del socio.</small>
        </div>

    </form>
</div>
@endsection
