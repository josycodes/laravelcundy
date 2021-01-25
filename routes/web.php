<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function() {
    return view('cundysmithpub.index');
});

Route::get('/about', function() {
    return view('cundysmithpub.about');
});


Route::get('/blogs', [BlogController::class, 'ViewAllBlogs'])->name('blogs');

Route::get('/blogdetail/{id}', [BlogController::class, 'BlogDetail'])->name('blogdetail');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/newposts', [BlogController::class, 'blogPage'])->name('newposts');

Route::post('/SubmitPost', [BlogController::class, 'postblogDB'])->name('SubmitPost');

Route::get('/allpost', [BlogController::class, 'ShowBlog'])->name('allpost');

Route::get('/editpost/{id}', [BlogController::class, 'EditBlog'])->name('editpost');

Route::post('/editpost', [BlogController::class, 'UpdateBlog'])->name('editpost');

Route::get('/delete/{id}', [BlogController::class, 'DeleteBlog'])->name('delete');

Route::get('/contact', [ContactController::class, 'getContactPage'])->name('contact');

Route::post('/SubmitContact', [ContactController::class, 'SubmitContactUs'])->name('SubmitContact');
