<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
    <title>Mon blog | @yield('title')</title>
</head>

<body class="overflow-scroll p-4">
    
    <header class="container mx-auto p-5 bg-gray-100 text-center">
        <h1 class="text-4xl uppercase font-bold">
            <a href="{{ Route('welcome') }}">Mon blog</a>
        </h1>
    </header>

    <nav class="container mx-auto bg-gray-900 text-white gap-x-5 flex">
        <a href="{{ Route('welcome') }}" class="border-b-4 border-violet-500 p-2">Welcome</a>
        <a href="{{ Route('post.create') }}" class="border-b-4 border-violet-500 p-2">Ajouter un article</a>
    </nav>

    <main class="my-5">
        @yield('content')
    </main>

    <footer class="container mx-auto p-5 bg-gray-900 text-white text-center">
        <p>Le footer de mon blog</p>
    </footer>
    
</body>

</html>
