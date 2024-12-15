<?php

namespace App\Filament\Resources\BestSellerResource\Pages;

use App\Filament\Resources\BestSellerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBestSeller extends EditRecord
{
    protected static string $resource = BestSellerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
