<?php

use Illuminate\Support\Facades\Route;
//AUTH
use App\Http\Controllers\Auth\LoginController;

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
    return view('auth.login');
});

Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'MasterController@index');


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// CONFIGURACION
    /// MI CUENTA
    Route::resource('mi_cuenta', 'UserController')->name('mi_cuenta','*');
    Route::post('/profile/update', 'UserController@updateProfile')->name('profile.updates');
    /// USUARIOS
    Route::resource('usuarios', 'UsersController')->name('usuarios','*');
    Route::get('usuarioslist', 'UsersController@usuariosList')->name('usuarioslist');

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// CATALOGOS
    Route::get('catalogos', 'HelperController@catalogos')->name('catalogos');
    
     /// USUARIOS
     Route::resource('hotelPrecio', 'HotelPrecioController')->name('hotelPrecio','*');
     Route::get('preciosList', 'HotelPrecioController@list')->name('preciosList');
});
