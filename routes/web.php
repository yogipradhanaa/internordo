<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/users', function () {
    return view ('Membuat pengguna baru');
});

Route::put('/users/{id}', function ($id) {
    return view ('Mengupdate')  . $id;
});

Route::delete('/users/{id}', function ($id) {
    return view ('Menghapus')  . $id;
});
 
Route::get('/test-controller', [TestController::class,'index']);



