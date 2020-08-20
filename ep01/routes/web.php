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

/**
 * VERBO GET
 */

 Route::get('usuarios', 'Form\\TesteController@listAllUsers')->name('users.listAll');
 Route::get('usuarios/{user}', 'Form\\TesteController@listUser')->name('users.listUser');

/**
 * VERBO POST
 */

/**
 * VERBO PUT/PATCH
 */

/**
 * VERBO DELETE
 */
