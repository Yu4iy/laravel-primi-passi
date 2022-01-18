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
    $tasks = [
        'test1',
        'paolo',
        '42'
    ];
 return view('Hello', compact('tasks')); //COMPACT CREA ARRAY CHE CKNTIENE VARIABILI E VALORI
});

Route::get('/page1', function () {
    $page = "PAGE";
 return view('Page1', compact('page'));
})-> name('page1'); // NAME ROUTING

Route::get('/page2', function () {
    $page = "PAGE";
 return view('Page2', compact('page'));
})-> name('page2'); // NAME ROUTING