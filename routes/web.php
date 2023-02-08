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

Route::get('canciones2/{id?}', function ($id = null) {
    $canciones =[];
    $canciones[] = ['cancion'=>'Bones', 'artista'=>'Imagine Dragones'];
    $canciones[] = ['cancion'=>'Natural', 'artista'=>'Imagine Dragones'];
    if(!is_null($id)){
        $cancion = $canciones[$id];
    }else{
        $cancion=null;
    }
    //dd($canciones);
    return view('canciones2', compact('canciones', 'cancion')); //se pueden mandar más variables
    //->with(['canciones' => $canciones]);
});

//Route::get('canciones2/{id}', function ($id) {
//    $canciones =[];
//    $canciones[] = ['cancion'=>'Bones', 'artista'=>'Imagine Dragones'];
//    $canciones[] = ['cancion'=>'Natural', 'artista'=>'Imagine Dragones'];
//    $cncion = $canciones[$id];

//    return view('cancion', compact('cncion')); 
//});