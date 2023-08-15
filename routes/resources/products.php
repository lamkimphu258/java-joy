<?php

use App\Livewire\Pages\Products\Index;
use App\Livewire\Pages\Products\Show;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('products.index');
Route::get('/{slug}', Show::class)->name('products.show');
