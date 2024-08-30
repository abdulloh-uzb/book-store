<?php

use App\Http\Controllers\backend\AuthorController;
use App\Http\Controllers\backend\BookController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\frontend\BookController as FrontendBookController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/", [PageController::class, "home"])->name("home");
Route::get("/about", [PageController::class, "about"])->name("about");
Route::get("/contact", [PageController::class, "contact"])->name("contact");
Route::get("/books", [FrontendBookController::class, "list"])->name("list");
Route::get("/book/{book}", [FrontendBookController::class, "view"])->name("book.view");

Route::controller(UserController::class)->middleware("guest")->group(function () {
    Route::get('/register', [RegistrationController::class, 'create']);
    Route::post('/register', [RegistrationController::class, 'store'])->name("register");
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store'])->name("login");
});

Route::post('/logout', [SessionController::class, "logout"])->name("logout")->middleware("auth");

Route::prefix("admin")->middleware("auth")->group(function () {
    Route::resource('book', BookController::class)->middleware("role:admin|seller");
    Route::resource('author', AuthorController::class)->middleware("role:admin");
    Route::resource('category', CategoryController::class)->middleware("role:admin");
});


Route::middleware("auth", "role:user")->group(function () {

    Route::controller(UserController::class)->prefix("user")->name("user.")->group(function () {
        Route::get("/orders", "showOrders")->name("orders");
        Route::get("/settings", "showSettings")->name("settings");
        Route::post("/update", "edit")->name("edit");
        Route::delete('/delete', "delete")->name("delete");
    });

    Route::controller(CartController::class)->group(function () {
        Route::post("/add-cart", "addCart")->name("add");
        Route::get("/cart", "showCart")->name("cart");
        Route::delete("/delete-cart/{id}", "removeItem")->name("cart.remove");
        Route::delete("/delete", "clearCart")->name("cart.clear");
    });
});
