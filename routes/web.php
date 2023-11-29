<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [FrontController::class, 'accueil'])->name('accueil');

require __DIR__.'/auth.php';
Route::get('/dashboard', [PostController::class, 'index'])->name('post.index');
Route::resource('posts', PostController::class)->except('index');


Route::get('/search', [PostController::class, 'search'])->name('posts.search');
Route::get('/blog', [PostController::class, 'article'])->name('front_blog');
Route::get('/a_propos', [FrontController::class, 'apropos'])->name('apropos');
Route::get('/formps', [FrontController::class, 'formps'])->name('formps');