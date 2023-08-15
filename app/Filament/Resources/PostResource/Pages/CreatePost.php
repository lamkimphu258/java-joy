<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $data['slug'] = Str::slug($data['title']);
        return static::getModel()::create($data);
    }
}
