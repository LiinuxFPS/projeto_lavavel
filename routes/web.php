<?php

use App\Http\Controllers\ClienteCOntroller;
use Faker\Guesser\Name;
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

Route::prefix('app')->group(function(){
    Route::get('/cliente', 'ClienteCOntroller@teste')->name('app.cadastrar');
    Route::post('/cliente', 'ClienteCOntroller@salvar')->name('app.cadastrar');
    Route::get('/lista', 'ClienteCOntroller@listaClientes')->name('app.listar');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
