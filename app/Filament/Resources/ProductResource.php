<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\Traits\HasCountBadge;
use App\Models\Product;
use App\Models\ProductCategory;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ProductResource extends Resource
{
    use HasCountBadge;

    protected static ?string $model = Product::class;

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationGroup = 'Product';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                    ->relationship(name: 'category', titleAttribute: 'name'),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(50),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->inputMode('decimal')
                    ->required()
                    ->columnSpanFull(),
                Checkbox::make('is_featured'),
                Repeater::make('variants')
                    ->relationship('variants')
                    ->schema([
                        TextInput::make('size'),
                        TextInput::make('price')
                            ->numeric()
                            ->inputMode('decimal'),
                    ])->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('variants_count')->counts('variants'),
                IconColumn::make('is_featured')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('category')
                    ->relationship('category', 'name')
                    ->options(ProductCategory::all()->pluck('name', 'id')),
                Filter::make('is_featured')
                    ->query(fn (Builder $query): Builder => $query->where('is_featured', true))
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
