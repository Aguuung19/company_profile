<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LandingPageController;

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

route::get("/", [ViewController::class, "index"]);

Route::get("/visi-misi", function () {
    return view("main.pages.visionAndMission");
});

route::get("/struktur-organisasi", function () {
    return view("main.pages.organizationalStructure");
});

route::get("team", function () {
    return view("main.pages.team");
});

route::get("service", function () {
    return view("main.pages.servicesDetail");
});

route::get("document", function () {
    return view("main.pages.documents");
});

route::get("faq", function () {
    return view("main.pages.faq");
});

route::get("kontak", function () {
    return view("main.pages.aboutus");
});

route::get("article", function () {
    return view("main.pages.articles");
});

route::get("article-detail", function () {
    return view("main.pages.articleDetail");
});

route::get("/login", [LoginController::class, "index"])
    ->middleware("guest")
    ->name("login");
route::post("/user-login", [LoginController::class, "authenticate"]);
route::post("/logout", [LoginController::class, "logout"])->middleware("auth");

route::get("/dashboard", [dashboardController::class, "index"])->middleware(
    "auth"
);

route::resource("landing_page", LandingPageController::class)
    ->only(["index", "edit", "update"])
    ->middleware("auth");

route::resource("footer_link", FooterController::class)
    ->only(["store", "destroy"])
    ->middleware("auth");
