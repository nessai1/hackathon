<?php

use App\Http\Controllers\PostController;
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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::post('/posts/{id}/{reaction}', 'App\Http\Controllers\PostController@reaction')
	->where(['id' => '[0-9]+', 'reaction' => '[a-z]+'])
;
Route::resource('posts', PostController::class);
//Route::resource('room', RoomController::class);
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');


Route::get('/soksok', function () {

    $post = new \App\Models\Post();
    $post->content = 'Three';
    $post->like = 0;
    $post->dislike = 2;
    $post->user_id = 1;
    $post->column_type = 'summary';
    $post->room_id = 'qwerty123';

    return $post->save();

});

Route::get('/{any}', 'App\Http\Controllers\PagesController@index')->where('any', '.*');
