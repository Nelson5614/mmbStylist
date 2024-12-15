<?php

namespace App\Filament\Resources\BestSellerResource\Pages;

use App\Filament\Resources\BestSellerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBestSellers extends ListRecords
{
    protected static string $resource = BestSellerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
