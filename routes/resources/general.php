<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class)->name('welcome');
Route::get('/about-me', About::class)->name('about-me');
