<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ComicController;
use App\Http\Controllers\ProfileController;
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
    return view('index');
});

Route::middleware(['auth', 'verified'])
    ->prefix("admin")
    ->name("admin.")
    ->group(function () {

        Route::get('/', [DashboardController::class, "home"])->name('dashboard');

        Route::resource("comics", ComicController::class);
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/', [ComicController::class, "index"])->name("home");

Route::get("/comics", [ComicController::class, "index"])->name("comics.index");

Route::get("/comics/{comic}", [ComicController::class, "show"])->name("comics.show");

Route::post("/comics", [ComicController::class, "store"])->name("comics.store");

