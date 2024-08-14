@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <center><h1>
        itemes</h1></center>
    <a href="{{ route('personas.create') }}" class="mb-3 btn btn-secondary">Agregar Personas
    </a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th colspan="2"></th>

            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->apellido_paterno }}</td>
                    <td>${{ $item->apellido_materno }}</td>



                    <td>
                        <a href="{{ route('personas.edit', $item->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('personas.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
