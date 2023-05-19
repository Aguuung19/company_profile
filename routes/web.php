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

route::get('service' , function () {
    return view('main.pages.servicesDetail');
});

route::get('document' , function () {
    return view('main.pages.documents');
});

route::get('faq' , function() {
    return view('main.pages.faq');
});

route::get('kontak' , function() {
    return view('main.pages.aboutus');
});

route::get('article' , function() {
    return view('main.pages.articles');
});

route::get('article-detail' , function() {
    return view('main.pages.articleDetail');
});

route::get('login' , function() {
    return view('main.pages.login');
});