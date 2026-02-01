<x-app-layout>

    <h1>Aqui se mostrara el formulario</h1>

    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf
        @method('PUT')

        <label>
            Titulo:
            <input type="text" name="title" value="{{$post->title}}">
        </label>

        <br>

        <label>
            Slug:
            <input type="text" name="slug" value="{{$post->slug}}">
        </label>

        <br>

        <label>
            Categoria:
            <input type="text" name="category" value="{{$post->category}}">
        </label>

        <br>

        <label>
            Contenido: 
            <textarea name="content" >{{$post->content}}</textarea>
        </label>

        <br>

        <button type="submit">
            Actualizar post
        </button>
    </form>


</x-app-layout>