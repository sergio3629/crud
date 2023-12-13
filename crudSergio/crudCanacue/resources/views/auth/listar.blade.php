@extends('layouts.app')

@section('titulo')
    Lista de Usuarios
@endsection

@section('contenido')
    <div class="container mx-auto mt-5 p-5">

<div class="overflow-x-auto">
<table class="table-auto w-full border-collapse border border-gray-300">
<thead>
 <tr class="bg-gray-200">
    <th class="py-3 px-4 border-b border-gray-300">Nombre</th>
    <th class="py-3 px-4 border-b border-gray-300">Cédula</th>
    <th class="py-3 px-4 border-b border-gray-300">Teléfono</th>
    <th class="py-3 px-4 border-b border-gray-300">Dirección</th>
    <th class="py-3 px-4 border-b border-gray-300">Acciones</th>
 </tr>
</thead>
<tbody>
@foreach ($usuarios as $usuario)
 <tr class="{{ $loop->even ? 'bg-gray-100' : 'bg-white' }}">
    <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $usuario->name }}</td>
    <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $usuario->cedula }}</td>
    <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $usuario->numero_telefono }}</td>
    <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $usuario->direccion }}</td>
    <td class="py-3 px-4 border-b border-gray-300 flex gap-2 text-center">
<a href="{{ route('editar', $usuario->id) }}" class="bg-blue-500 text-white p-2 rounded">Actualizar</a>
<form action="{{ route('eliminar', $usuario->id) }}" method="post">
@csrf
@method('delete')
<button type="submit" class="bg-red-500 text-white p-2 rounded">Eliminar</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
