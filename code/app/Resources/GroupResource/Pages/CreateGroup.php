<?php

namespace App\Resources\GroupResource\Pages;

use App\Resources\GroupResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGroup extends CreateRecord
{
    protected static string $resource = GroupResource::class;
}
