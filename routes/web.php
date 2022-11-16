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

Route::post('loginEncrypt', 'Auth\\AuthController@customLogin')->name('logincustom');
Route::post('logoutEncrypt', 'Auth\\AuthController@LogOut')->name('logoutcustom');


Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {

    Route::resource('usuarios', UsersController::class)->name('usuarios', '*');
    Route::get('perfil', 'UsersController@index_perfil')->name('perfil.index');
    Route::get('usersL', 'UsersController@getUsuarios');
    Route::get('catalogos', 'HelperController@getCatalogos');

    // Calendario
    Route::resource('hospedaje', TblHospedajeController::class)->name('hospedaje', '*');
    Route::resource('reservaciones', TblReservacioneController::class)->name('reservaciones', '*');

    Route::post('/save-token', 'HelperController@saveToken')->name('save-token');
    Route::get('/send_notification/{id}', 'HelperController@sendNotification')->name('send_notification');
    Route::get('/notificaciones/{id}', 'HelperController@getNotificaciones')->name('notificaciones');
    Route::get('helper/{id}/visto', 'HelperController@notificaciones')->name('helper.visto');
});


require __DIR__.'/auth.php';
