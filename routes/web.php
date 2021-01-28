<?php

use Illuminate\Support\Facades\Route;
use App\Models\User as User;
use App\Models\Storypost as Storypost;

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

Route::get('index', function () {
    return view('index');
});

Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function(){
    Route::get('/modifStory/{id}', 'App\Http\Controllers\AccountController@modifStory')->name('modif.Story');
    Route::post('/modifStory/{id}', 'App\Http\Controllers\AccountController@postModifStory');

    Route::get('/Storyboard/{id}', 'App\Http\Controllers\AccountController@Storyboard')->name('Story.board');

    Route::get('/dashboard', 'App\Http\Controllers\AccountController@compte');
    Route::post('/dashboard', 'App\Http\Controllers\AccountController@ajoutStory');

});

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@formulaire');
Route::post('/connexion', 'App\Http\Controllers\ConnexionController@connexion');


Route::get('/inscription', 'App\Http\Controllers\InscriptionController@formulaire');
Route::post('/inscription', 'App\Http\Controllers\InscriptionController@inscription');

Route::get('/signout', 'App\Http\Controllers\AccountController@deconnexion');

// Route::group([
//     'middleware' => 'App\Http\Middleware\Auth',
// ], function(){

//     Route::get('index/{id}', 'App\Http\Controllers\AccountController@history');
   
// });

Route::get('/index', 'App\Http\Controllers\AccountController@history');


