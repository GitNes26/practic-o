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
    return view('welcome');
});
Route::get('/categoriassss', function () {
    return view('Admin.Categorias.index');
});


Route::prefix('admin')->group(function () {
    // Matches The "/admin/tipe"
    Route::get('/categorias', function () {
        return view('Admin.Categorias.index');
    });


    Route::get('/bonos', function () {
        return view('Admin.Bonos.index');
    });

    Route::get('/promociones', function () {
        return view('Admin.Promociones.index');
    });
    Route::get('/quejas', function () {
        return view('Admin.Quejas.index');
    });
    Route::get('/reportes', function () {
        return view('Admin.Reportes.index');
    });
    Route::get('/usuarios', function () {
        return view('Admin.Usuarios.index');
    });
});



