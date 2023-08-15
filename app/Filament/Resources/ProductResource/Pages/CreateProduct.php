<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $data['slug'] = Str::slug($data['title']);
        return static::getModel()::create($data);
    }
}
