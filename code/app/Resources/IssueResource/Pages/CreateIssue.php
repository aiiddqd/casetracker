<?php

namespace App\Resources\IssueResource\Pages;

use App\Resources\IssueResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIssue extends CreateRecord
{
    protected static string $resource = IssueResource::class;
}
