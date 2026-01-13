<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//Importa el orden en que ponga las rutas en este archivo, ya que el servidor lo leera de arriba hacia abajo

//Cuando el controlador solo tiene un metodo, se le asigna el nombre de __invoke al metodo y no es necesario especificar el metodo
Route::get('/', HomeController::class);

Route::get('/posts',[PostController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);
Route::get('posts/{post}', [PostController::class, 'show']);

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