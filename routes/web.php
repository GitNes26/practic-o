<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('prueba');
});

Route::prefix('admin')->group(function () {
    // Matches The "/admin/tipe"
    Route::get('/', function () {
        return view('Admin.Admin');
    });   
    Route::get('/bonos', function () {
        return view('Admin.Bonos.index');
    });    
    Route::get('/categorias', function () {
        return view('Admin.Categorias.index');
    });
    Route::get('/promociones', function () {
        return view('Admin.Promociones.index');
    });
    Route::get('/quejas', function () {
        return view('Admin.Quejas.index');
    });
    Route::get('/usuarios', function () {
        return view('Admin.Usuarios.index');
    });
});




Route::prefix('admin/edit')->group(function () {
    Route::get('/bonos', function () {
        return view('Admin.Bonos.edit');
    });    
    Route::get('/categorias', function () {
        return view('Admin.Categorias.edit');
    });
    Route::get('/promociones', function () {
        return view('Admin.Promociones.edit');
    });
    Route::get('/quejas', function () {
        return view('Admin.Quejas.edit');
    });
    Route::get('/usuarios', function () {
        return view('Admin.Usuarios.edit');
    });

});







Route::prefix('admin/create')->group(function () {
    Route::get('/bonos', function () {
        return view('Admin.Bonos.create');
    });    
    Route::get('/categorias', function () {
        return view('Admin.Categorias.create');
    });
    Route::get('/promociones', function () {
        return view('Admin.Promociones.create');
    });
    Route::get('/quejas', function () {
        return view('Admin.Quejas.create');
    });
    Route::get('/usuarios', function () {
        return view('Admin.Usuarios.create');
    });

});