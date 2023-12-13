@extends('layouts.app')

@section('titulo')
    Actualizar Usuario
@endsection

@section('contenido')
    <div class="container mx-auto mt-5 p-5">
        

        <form action="{{ route('usuarios.actualizar', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $usuario->name) }}"
                    class="border-2 border-gray-300 p-2 w-full rounded">
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="cedula" class="block text-gray-700 text-sm font-bold mb-2">Cédula:</label>
                <input type="number" id="cedula" name="cedula" value="{{ old('cedula', $usuario->cedula) }}"
                    class="border-2 border-gray-300 p-2 w-full rounded">
                @error('cedula')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="numero_telefono" class="block text-gray-700 text-sm font-bold mb-2">Teléfono:</label>
                <input type="text" id="numero_telefono" name="numero_telefono"
                    value="{{ old('numero_telefono', $usuario->numero_telefono) }}"
                    class="border-2 border-gray-300 p-2 w-full rounded">
                @error('numero_telefono')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="direccion" class="block text-gray-700 text-sm font-bold mb-2">Dirección:</label>
                <input type="text" id="direccion" name="direccion" value="{{ old('direccion', $usuario->direccion) }}"
                    class="border-2 border-gray-300 p-2 w-full rounded">
                @error('direccion')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-5 ">
                <div class="flex items-center">
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded">Actualizar</button>
                </div>

            </div>
        </form>
    </div>
@endsection
