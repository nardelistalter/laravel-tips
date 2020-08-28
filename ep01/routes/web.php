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

Route::get('listagem-usuario', 'UserController@listUser');

//Route::verb('uri', 'Controller@method')->name('route-name');

Route::group(['namespace' => 'form'], function(){

    /**
     * VERBO GET
     */

    Route::get('usuarios', 'TesteController@listAllUsers')->name('users.listAll');
    Route::get('usuarios/store', 'TesteController@formAddUser')->name('users.formAddUser');
    Route::get('usuarios/editar/{user}', 'TesteController@formEditUser')->name('users.formEditUser');
    Route::get('usuarios/{user}', 'TesteController@listUser')->name('users.listUser');

    /**
    * VERBO POST
    */
    Route::post('usuarios/store', 'TesteController@storeUser')->name('users.store');
    /**
    * VERBO PUT/PATCH
    */
    Route::put('usuarios/edit/{user}', 'TesteController@edit')->name('users.edit');

    /**
    * VERBO DELETE
    */
    Route::delete('usuarios/destroy/{user}', 'TesteController@destroy')->name('user.destroy');

});
