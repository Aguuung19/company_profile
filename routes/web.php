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
    return view('main.landingpage');
});

Route::get('/visi-misi' , function () {
    return view('main.pages.visionAndMission');
});

route::get('/struktur-organisasi' , function () {
    return view('main.pages.organizationalStructure');
});

route::get('team' , function () {
    return view('main.pages.team');
});