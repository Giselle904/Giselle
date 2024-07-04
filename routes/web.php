<?php
// este archivo es encargado de las peticiones
 
use Illuminate\Support\Facades\Route;
//utilizaremos el controlador principal
 
use App\Http\Controllers\HomeController;
 
// ruta principal que manda llamar la vista de home.blade.php
Route::get('/', function () {
    return view('welcome');
});
 
 
// ruta de contenido fijo que manda llamar la vista llamada posts.blade.php
route::get('/posts', function(){
    return view('posts');
});
 
// ruta de contenido variable, esta mandara llamar la vista de acuerdo al parametro recibido, si el parametro enviado es TEST, y en el return
// mandamos buscar la vista con el parametro $pagina, este buscara la pagina TEST.blade.php
Route::get('/{pagina}', function ($pagina) {
    return "bienvenido a mi $pagina";
});
 
// el orden de las rutas es muy importante !
Route::get('/posts/create', function(){
    return "Creando un post";
});
 
// rutas con parametros usamos /contenido fijo / contenido variable identificado por {}
// se pueden enviar tantas variables como se necesiten
route::get('/users/{id}', function($id){
    return "Mostrando el post {$id}";
});
 
 
// get peticiones que hacemos desde los enlaces o direcciones en el url
// post peticiones que hacemos desde forms donde mandamos la informacion de manera oculta al usuario
// put   se utiliza para actualizar registros
// patch //
// delete se utiliza para eliminar registros
 
 