<?php

namespace App\Resources;

use App\Resources\IssueResource\Pages;
use App\Resources\IssueResource\RelationManagers;
use App\Models\Issue;
use Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use TorMorten\Eventy\Facades\Eventy;


class IssueResource extends Resource
{
    protected static ?string $model = Issue::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function infolist(Infolist $infolist) : Infolist
    {
        // $list = \Eventy::addFilter('issue.view.infolist', [
        //     Infolists\Components\TextEntry::make('title'),
        //     Infolists\Components\TextEntry::make('description')
        //         ->columnSpanFull(),
        // ] );
        return $infolist
            ->schema([
                // Infolists\Components\TextEntry::make('title'),
                // Infolists\Components\TextEntry::make('description')
                // ->columnSpanFull(),
                Infolists\Components\TextEntry::make('description')
                    ->prose()
                    ->columnSpanFull()
                    ->markdown()
                    ->hiddenLabel(),
                // Infolists\Components\View::make('issue-single' ),
                // Infolists\Components\View::make('issue-after-description' ),
            ]);
    }



    public static function form(Form $form) : Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpan('full')
                    ->maxLength(255),
                Forms\Components\MarkdownEditor::make('description')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\Select::make('group_id')
                    ->relationship('group', 'name')

            ])
            ->columns(2);
    }

    public static function table(Table $table) : Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->searchable()->numeric(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('group'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations() : array
    {
        return [
            //
        ];
    }

    public static function getPages() : array
    {
        return [
            'index' => Pages\ListIssues::route('/'),
            'view' => Pages\ViewIssue::route('/{record}'),
            'create' => Pages\CreateIssue::route('/create'),
            'edit' => Pages\EditIssue::route('/{record}/edit'),
        ];
    }
}
