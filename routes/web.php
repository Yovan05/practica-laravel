<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//Importa el orden en que ponga las rutas en este archivo, ya que el servidor lo leera de arriba hacia abajo

//Cuando el controlador solo tiene un metodo, se le asigna el nombre de __invoke al metodo y no es necesario especificar el metodo
Route::get('/', HomeController::class);

Route::get('/posts',[PostController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);
Route::get('posts/{post}', [PostController::class, 'show']);

Route::get('prueba', function(){
    
    //   crear un registro
    /*    $post = new Post;

        $post->title = 'TITULo de prueba 5';
        $post->content = 'Contenido de prueba 5';
        $post->category = 'Categoria de prueba 5';

        $post->save();
    
    return $post;*/

    $post = Post::find(5); //metodo para buscar
    return $post;
    //metodo para buscar mediante cualquier columna, solo trae l primer registro que coincida
    /*$post = Post::where('title', 'Titulo de prueba 1')->first(); 
    $post->category = 'Desarrollo web';
    $post->save();
    */

    //metodo para obtener todos los registros
    //$posts = Post::all();

    //metodo para obtener mas de un registro
    //$posts = Post::where('id','>=',2)->get();

    //metodo para obtener registros de forma ordenada
    /*$posts = Post::orderBy('category', 'asc')
        ->select('id','category') //Especifica que columnas obtener
        ->take(2) //indica la cantidad de registros que quieres
        ->get();
    */

    //metodo para eliminar registro
    /*$post = Post::find(1);
    $post->delete();
    return "Eliminado correctamente";*/
});

//Esto es para tener rutas dinamicas
/*Route::get('/posts/{post}', function ($post){
    return "Aqui se mostraran el post {$post}";
});*/

//el simbolo de interrogacion indica que la variable es opcional, en caso de no proporcionarlo, el valor por defecto seria null
/*Route::get('/posts/{post}/{category?}', function ($post, $category = null){
    
    if($category){
        return "Aqui se mostraran el post {$post} de la categoria {$category}";
    }
    
    return "Aqui se mostraran el post {$post}";
});*/