<?php

namespace App\Resources\IssueResource\Pages;

use App\Resources\IssueResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIssue extends ViewRecord
{
    //resources/views/issue.blade.php
    // protected static string $view = 'issue';
    protected static string $resource = IssueResource::class;
}
