<?php

namespace App\Pages;

use Filament\Pages\Page;
// use App\Clusters\Settings;


class GeneralSettings extends Page
{
    protected static ?string $title = 'Overview';

    protected ?string $heading = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    // protected static ?string $cluster = SettingsCluster::class;
    protected static ?string $navigationGroup = 'Settings';



    protected static string $view = 'filament.pages.settings';
}
