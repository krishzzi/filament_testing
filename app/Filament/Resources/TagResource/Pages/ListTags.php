<?php

namespace App\Filament\Resources\TagResource\Pages;

use App\Filament\Resources\TagResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTags extends ListRecords
{

    use ListRecords\Concerns\Translatable;
    protected static string $resource = TagResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
