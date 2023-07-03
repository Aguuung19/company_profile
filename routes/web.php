<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\MasterJobsController;
use App\Http\Controllers\MasterMenuController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MasterRolesController;
use App\Http\Controllers\MasterCategoryController;
use App\Http\Controllers\MasterJobStatusController;

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

Route::get("/visi-misi" , [ViewController::class, "visiMisi"]);

route::get("/struktur-organisasi", [ViewController::class, "organisasi"]);

route::get("team", function () {
    return view("main.pages.team");
});

route::get("service", function () {
    return view("main.pages.servicesDetail");
});

route::get("document", function () {
    return view("main.pages.documents");
});

route::get("frequently-asked-questions" , [ViewController::class , "faq"]);

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

route::resource("profile", ProfileController::class)
    ->only(["index", "edit", "update"])
    ->middleware("auth");

route::resource("faq", FaqController::class)
    ->except(['show'])
    ->middleware("auth");

route::resource("master_menu" , MasterMenuController::class)
    ->except(['show'])
    ->middleware("auth");

route::resource("master_category" , MasterCategoryController::class)
    ->except(['show'])
    ->middleware("auth");

route::resource("master_roles" , MasterRolesController::class)
    ->except(['show'])
    ->middleware("auth");

route::resource("master_jobs" , MasterJobsController::class)
    ->except(['show'])
    ->middleware("auth");

route::resource("master_jobs_status" , MasterJobStatusController::class)
    ->except(["show"])
    ->middleware("auth");