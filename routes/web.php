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
    return view('site.home.index');
});

Route::get('/contato', function(){
    return view('site.pages.contato');
});

Route::get('/produtos', function(){

    $produtos = [
        'Celulares',
        'Notebooks',
        'Computadores',
        'Impressoras',
        'Tablets',
        'Mesas Digitalizadoras',
        'Monitores',
        'Consoles'
    ];

    return view('site.pages.produtos', [
        'produtos' => $produtos,
    ]);
});
