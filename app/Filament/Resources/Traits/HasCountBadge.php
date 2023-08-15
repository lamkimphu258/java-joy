<?php

namespace App\Filament\Resources\Traits;

trait HasCountBadge
{
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
