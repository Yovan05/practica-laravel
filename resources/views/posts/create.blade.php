<x-app-layout>

    <h1>Aqui se mostrara el formulario</h1>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf

        <label>
            Titulo:
            <input type="text" name="title">
        </label>

        <br>

        <label>
            Categoria:
            <input type="text" name="category">
        </label>

        <br>

        <label>
            Contenido: 
            <textarea name="content"></textarea>
        </label>

        <br>

        <button type="submit">
            Crear post
        </button>
    </form>


</x-app-layout>