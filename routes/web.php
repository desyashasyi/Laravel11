<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', App\Livewire\Idx::class)->name('home');
Route::get('/author/papers', App\Livewire\Author\Papers\Idx::class)->name('author.papers');
Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
