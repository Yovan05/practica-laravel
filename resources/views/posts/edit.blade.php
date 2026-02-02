<x-app-layout>

    <h1>Aqui se mostrara el formulario</h1>

    @if ($errors->any())
    
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf
        @method('PUT')

        <label>
            Titulo:
            <input type="text" name="title" value="{{old('title', $post->title)}}">
        </label>

        <br>

        <label>
            Slug:
            <input type="text" name="slug" value="{{old('slug', $post->slug)}}">
        </label>

        <br>

        <label>
            Categoria:
            <input type="text" name="category" value="{{old('category', $post->category)}}">
        </label>

        <br>

        <label>
            Contenido: 
            <textarea name="content" >{{old('content', $post->content)}}</textarea>
        </label>

        <br>

        <button type="submit">
            Actualizar post
        </button>
    </form>


</x-app-layout>