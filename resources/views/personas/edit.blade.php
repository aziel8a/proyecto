@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="mb-4 text-center">
        <h1>Editar personas</h1>
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

    <form action="{{ route('personas.update', $personas->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input type="text" value="{{ old('nombre', $personas->nombre) }}" name="nombre" class="form-control form-control-custom" id="inputNombre" placeholder="Introduce el nombre">
            <small class="form-text form-text-custom">El nombre de la persona.</small>
        </div>
        <div class="mb-3">
            <label for="inputNombre" class="form-label">Apellido Paterno</label>
            <input type="text" value="{{ old('apellido_paterno', $personas->apellido_paterno) }}" name="apellido_paterno" class="form-control form-control-custom" id="inputNombre" placeholder="Introduce el apellido paterno de la persona">
            <small class="form-text form-text-custom">El apellido paterno de la persona</small>
        </div>

        <div class="mb-3">
            <label for="inputNombre" class="form-label">Apellido Materno</label>
            <input type="text" value="{{ old('apellido_materno', $personas->apellido_materno) }}" name="apellido_materno" class="form-control form-control-custom" id="inputNombre" placeholder="Introduce el apellido materno de la persona">
            <small class="form-text form-text-custom">El apellido materno de la persona.</small>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary col-12">Guardar Cambios</button>
        </div>
    </form>
</div>
@endsection
