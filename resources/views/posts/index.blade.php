<!DOCTYPE html>
<html lang="en">
<head>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 12 post</title>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        <x-alert type="warning" class="mb-4">
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>
            Contenido de la alerta
        </x-alert>
        <p>Hola, Adios</p>
    </div>
    
</body>
</html>