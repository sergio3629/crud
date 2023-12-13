@extends('layouts.app')

@section('titulo')
    Registrate
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
<div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
<form action="{{route('register')}}" method="POST" novalidate>
@csrf
    <div class="mb-5">
        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold" >Nombre</label>
        <input type="text" id="name" name="name" placeholder="name" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror " value="{{ old('name') }}">
        @error('name')
        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
@enderror
    </div>
    <div class="mb-5">
        <label for="cedula" class="mb-2 block uppercase text-gray-500 font-bold" >Cedula</label>
        <input type="number" id="cedula" name="cedula" placeholder="cedula" class="border p-3 w-full rounded-lg">
        @error('cedula')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
        @enderror
        </div>
    <div class="mb-5">
        <label for="numero_telefono" class="mb-2 block uppercase text-gray-500 font-bold" >Numero de Telefono</label>
        <input type="text" id="numero_telefono" name="numero_telefono" placeholder="telefono" class="border p-3 w-full rounded-lg">
        @error('numero_telefono')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="direccion" class="mb-2 block uppercase text-gray-500 font-bold" >Dirección</label>
        <input type="text" id="direccion" name="direccion" placeholder="direccion" class="border p-3 w-full rounded-lg">
        @error('direccion')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
        @enderror
</div>
    <input type="submit" value="Registrar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>
@endsection
