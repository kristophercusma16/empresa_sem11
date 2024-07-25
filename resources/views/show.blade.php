@extends('layout')
@section('title', 'Persona | ' . $persona->nPerCodigo)

@section('content')
<style>
.action-buttons {
    display: flex;
    align-items: center;
    gap: 10px;
}

.action-button {
    background-color: #f0f0f0; /* Color de fondo para los botones */
    border: 1px solid #ddd; /* Borde para los botones */
    border-radius: 5px; /* Bordes redondeados */
    cursor: pointer;
    padding: 5px 10px; /* Espaciado interno */
    font-size: 1em; /* Tamaño del texto */
    text-align: center;
    text-decoration: none; /* Elimina el subrayado en los enlaces */
}

.edit-button {
    color: #fcaa5d;
}

.edit-button:hover {
    color: gold; /* Cambia el color cuando el mouse pasa por encima */
}

.delete-button {
    color: red;
}

.delete-button:hover {
    color: darkred; /* Cambia el color cuando el mouse pasa por encima */
}
</style>
@auth
<div class="action-buttons" style="background-color: white;">
    <h5>Persona <strong><span>{{$persona->cPerNombre}} {{$persona->cPerApellido}}</strong></span></h5>
    <a href="{{ route('personas.edit', $persona) }}" class="action-button edit-button" title="Editar">
        Editar
    </a>
    <form action="{{ route('personas.destroy', $persona) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="action-button delete-button" title="Eliminar">
            Eliminar
        </button>
    </form>
</div>

<table class="table" style="font-size: 0.9em; background-color: white;" >
    <tr>
        <th>Código:</th>
        <td>{{$persona->nPerCodigo}}</td>
    </tr>
    <tr>
        <th>Apellido:</th>
        <td>{{$persona->cPerApellido}}</td>
    </tr>
    <tr>
        <th>Nombre:</th>
        <td>{{$persona->cPerNombre}}</td>
    </tr>
    <tr>
        <th>Dirección:</th>
        <td>{{$persona->cPerDireccion}}</td>
    </tr>
    <tr>
        <th>Fecha de Nacimiento:</th>
        <td>{{$persona->dPerFecNac}}</td>
    </tr>
    <tr>
        <th>Edad:</th>
        <td>{{$persona->nPerEdad}}</td>
    </tr>
    <tr>
        <th>Sexo:</th>
        <td>{{$persona->cPerSexo == 'Masculino' ? 'Masculino' : 'Femenino' }}</td>
    </tr>
    <tr>
        <th>Sueldo:</th>
        <td>{{number_format($persona->nPerSueldo, 2) }}</td>
    </tr>
    <tr>
        <th>RND:</th>
        <td>{{$persona->cPerRnd }}</td>
    </tr>
    <tr>
        <th>Estado:</th>
        <td>{{ $persona->nPerEstado == 1 ? '1' : '2' }}</td>
    </tr>
    <tr>
        <th>Fecha de Creación:</th>
        <td>{{$persona->created_at->diffForHumans() }}</td>
    </tr>
</table>
@endauth
@endsection