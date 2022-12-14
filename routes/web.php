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
        "pageTitle" => "Laravel primi passi",
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
    $pageTitle = "Laravel primi passi";
    return view('about', compact("pageTitle"));
})->name('about');

Route::get('/contenuti', function () {
    $data = [
        "pageTitle" => "Contenuti del sito",
        "numbers" => [14, 64, 76, 64, 2, 1, 656, 2, 234],
    ];
    return view('contents', $data);
})->name('contents');

Route::get('/fonti', function () {
    $pageTitle = "Fonti";
    return view('sources', compact("pageTitle"));
})->name('sources');
