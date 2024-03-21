<?php

use Illuminate\Support\Facades\Route;


Route::get('/', App\Livewire\Idx::class)->name('idx');
Route::get('/author/papers', App\Livewire\Author\Papers\Idx::class)->name('author.papers');
Auth::routes();