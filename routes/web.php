<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class
// return "Bienvenido a la página Principal";
);

Route::resource('clientes', ClienteController::class);
Route::get('login',array('as'=>'login',function(){
    return view('login');
}));
/*Route::controller(ClienteController::class)->group(function(){
    Route::get('clientes', 'create');
    Route::get('persona','create');
});*/
/*Route::get('cursos', function () {
    //return view('welcome');
    return "Bienvenido a la página Principal";
});

Route::get('cursos/create', function () {
    //return view('welcome');
    return "En esta pagina crear curso";
});

Route::get('cursos/{curso}', function ($curso) {
    //return view('welcome');
    return "Bienvenido al curso: $curso";
});

Route::controller('users', 'UserController');*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
