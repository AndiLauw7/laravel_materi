<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/{id}', function ($id) {
//     return "Product " . $id;
// });
Route::get('/products/create', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/search', [ProductController::class, 'search']);

Route::get('/users/profile', [UserController::class, 'profile']);
Route::get('/students', [StudentsController::class, 'index'])->name('students.index');
Route::get('/students/form', [StudentsController::class, 'createForm'])->name('students.create');
Route::post('/students/store', [StudentsController::class, 'storeForm']);
Route::get('/students/{id}/edit', [StudentsController::class, 'edit'])->name('students.edit');
Route::patch('/students/{id}', [StudentsController::class, 'update']);
Route::delete('/students/{id}', [StudentsController::class, 'destroy'])->name('students.destroy');
// Route::get('/students/create', [StudentsController::class, 'store']);
// Route::post('/students/store', [StudentsController::class, 'store']);
Route::get('/students/search', [StudentsController::class, 'search']);

Route::get('/students/{name}', [StudentsController::class, 'show']);
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
