@extends('layouts.app')
<style>
    .form-control-custom {
        border: 1px solid #ced4da;
        border-radius: 0.375rem;
        padding: 0.375rem 0.75rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control-custom::placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control-custom:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }

    .form-control-custom:hover {
        border-color: #007bff;
    }

    .form-text-custom {
        font-size: 0.875rem;
        color: #6c757d;
    }
</style>
@section('content')
<div class="container mt-5">
    <div class="mb-4 text-center">
        <h1>Crear Persona</h1>
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

    <form action="{{ route('personas.store') }}" method="POST" style="padding:30px">
        @csrf
        <div class="mb-3">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control form-control-custom" id="inputNombre" placeholder="Introduce el nombre">
            <small class="form-text form-text-custom">El nombre de la persona.</small>
        </div>
        <div class="mb-3">
            <label for="inputNombre" class="form-label">Apellido Paterno</label>
            <input type="text" name="apellido_paterno" class="form-control form-control-custom" id="inputNombre" placeholder="Introduce el apellido paterno">
            <small class="form-text form-text-custom">El apellido paterno de la persona.</small>
        </div>
        <div class="mb-3">
            <label for="inputNombre" class="form-label">Apellido Materno</label>
            <input type="text" name="apellido_materno" class="form-control form-control-custom" id="inputNombre" placeholder="Introduce el apellido materno">
            <small class="form-text form-text-custom">El apellido materno de la persona.</small>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Persona</button>
        </div>
    </form>
</div>
@endsection
