<?php
use App\Http\Controllers\FilmsController;
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
   // return view('home',['name'=>'xavi']);
   $name ='xavi';
   //return view('home')->with('name',$name);
   return view('home', compact('name'));
});

Route::get('/hola/{nombre}/{apellidos}', function($otro, $apellidos){
    return 'hola'.$otro.$apellidos;
});

Route::get('/hola/{edad?}', function(int $edad=18){
     return "Tu edad es -> $edad";
})->where('edad','[0-9]+');

Route::get('/hola/{edad}', function($edad=18){
    return "Tu edad es fgdfg -> $edad";
});

Route::get('/peliculas',function(){
    $films=[
        'Superman',
        'Spiderman',
        'Aquaman',
        'Batman',
        'Antman',
        'BocaSecaman'
    ];
     return view('films',compact('films'));
});

Route::get('/films','FilmsController@index');
Route::get('/films/{id}','FilmsController@show');
