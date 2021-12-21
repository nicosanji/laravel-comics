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
    $data_comics = config("comics");
    return view("home.index", [
        "comics_list" => $data_comics
    ]);
})->name("home.index");


Route::get('/details/{id?}', function ($id) {
    $data_comics = config("comics");

    $single_comic = $data_comics[$id];

    return view("home.details", [
        "single_comic" => $single_comic
    ]);
})->name("home.details");
