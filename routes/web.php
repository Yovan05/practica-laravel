<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//Importa el orden en que ponga las rutas en este archivo, ya que el servidor lo leera de arriba hacia abajo

//Cuando el controlador solo tiene un metodo, se le asigna el nombre de __invoke al metodo y no es necesario especificar el metodo
Route::get('/', HomeController::class);
/*
Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
*/

//Esta ruta crea todas las rutas del CRUD siempre y cuando los metodos ya esten hechos en el controlador
//Dichas rutas que crea, son las misma que estan comentadas arriba, ahorra mucho codigo
//el metodod ->except, es para que no se cree una ruta
//el metodo ->only, sirve para que solo se creen las rutas que especifiques
//el metodo ->parameters, es para indicarle el nombre que queremos que tengan lo que va dentro del {}, si no se indica, se pondra el nombre asignado en singular
//
Route::resource('articulos', PostController::class)
    ->parameters(['articulos' => 'post'])
    ->names('posts');

//si en vez de usar resource, usamos apiResourse, se crearan solo las rutas de la api
//es decir, no se crearan las rutas que te llevan a la vista, solo las funcionales



Route::get('prueba', function(){
    
    //   crear un registro
    /*    $post = new Post;

        $post->title = 'TITULo de prueba 5';
        $post->content = 'Contenido de prueba 5';
        $post->category = 'Categoria de prueba 5';

        $post->save();
    
    return $post;*/
    /*
    $post = Post::find(5); //metodo para buscar
    return $post;*/
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

    //Estos metodos solo funcionan con el created_at y updated_at, no con otros campos aunque sean de fecha
    //Para que funcione con otros campos, se debe de cambiar el tipo de dato en el archivo modelo
    //$post = Post::find(2);
    //return $post->created_at->format('d-m-Y');
    //return $post->published_at->diffForHumans();

    $post = Post::find(1);
    dd($post->is_active);
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