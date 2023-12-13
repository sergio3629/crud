<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
 
    <header class="p-5 border-b bg-white shadow flex justify-between items-center">
        <h1 class="text-3xl font-black">
            Sergio Canacue

        </h1>



        @guest()
            <nav class="flex gap-2 items-center">
                <a href="{{ route('register') }}" class="">
                    <button class="font-bold bg-blue-500 p-2 rounded-lg text-white">Registrate</button>
                </a>
                <a class="font-bold uppercase text-gray-600" href="{{ route('listar') }}">
                    <button class="font-bold bg-blue-500 p-2 rounded-lg text-white">Lista de Usuarios</button>
                </a>
            </nav>
        @endguest

    </header>

    <main class="container mx-auto mt-10">
        <h1 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h1>
        @yield('contenido')
    </main>

</body>

</html>
