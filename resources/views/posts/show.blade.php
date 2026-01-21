<x-app-layout>

    <a href="/posts">Volver a posts</a>

    <h1>Titulo: {{ $post->title }} </h1>
    <p>
        <b>Categoria: </b> {{$post->category}}
    </p>
    <p>
        {{$post->content}}
    </p>
    <a href="/posts/{{$post->id}}/edit">
        Editar post
    </a>
    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('DELETE')

        <button>Eliminar post</button>
    </form>
</x-app-layout>  
