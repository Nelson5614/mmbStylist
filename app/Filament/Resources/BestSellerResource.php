<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BestSellerResource\Pages;
use App\Filament\Resources\BestSellerResource\RelationManagers;
use App\Models\BestSeller;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BestSellerResource extends Resource
{
    protected static ?string $model = BestSeller::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Shop Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set) => 
                        $set('slug', Str::slug($state))),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->required()
                    ->columnSpan('full'),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->prefix('LSL')
                    ->numeric(),
                Forms\Components\FileUpload::make('image')
                ->disk('public')
                    ->directory('bestseller')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                    ->image()
                    ->maxSize(5120) // 5MB in kilobytes
                    ->enableDownload()
                    ->enableOpen()
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->square(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->prefix('LSL')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_visible')
                    ->label('Visibility')
                    ->placeholder('All Products')
                    ->trueLabel('Visible Products')
                    ->falseLabel('Hidden Products'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBestSellers::route('/'),
            'create' => Pages\CreateBestSeller::route('/create'),
            'edit' => Pages\EditBestSeller::route('/{record}/edit'),
        ];
    }    
}
