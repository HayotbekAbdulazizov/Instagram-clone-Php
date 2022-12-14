<?php

use App\Mail\NewUserWelcomeMail;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostsController ;
use \App\Http\Controllers\FollowsController ;
use \App\Http\Controllers\ProfilesController ;

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

// Route::get('/', function () {return view('welcome');});

Auth::routes(); 


Route::get('/email', function(){
    return new NewUserWelcomeMail();
});

Route::post('/follow/{user}', [FollowsController::class, 'store']);

Route::get('/p/create', [PostsController::class, 'create'])->name('post.create');
Route::get('/p/{post}', [PostsController::class, 'show'])->name('post.show');
Route::post('/p', [PostsController::class, 'store'])->name('post.store');
Route::get('/', [PostsController::class, 'index'])->name('home');

Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profile.update');
