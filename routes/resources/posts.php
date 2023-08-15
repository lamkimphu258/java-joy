<?php

use App\Livewire\Pages\Posts\Index;
use App\Livewire\Pages\Posts\Show;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('posts.index');
Route::get('/{slug}', Show::class)->name('posts.show');
