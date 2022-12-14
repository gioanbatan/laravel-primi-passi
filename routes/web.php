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
    $data = [
        "title" => "Laravel primi passi",
        "pages" => [
            [
                "name" => "Descrizione",
                "route" => "about"
            ],
            [
                "name" => "Contenuti",
                "route" => "contents"
            ],
            [
                "name" => "Fonti",
                "route" => "sources"
            ]
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/descrizione', function () {
    return view('about');
})->name('about');

Route::get('/contenuti', function () {
    return view('contents');
})->name('contents');

Route::get('/fonti', function () {
    return view('sources');
})->name('sources');
