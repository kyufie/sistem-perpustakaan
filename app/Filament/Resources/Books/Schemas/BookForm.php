<?php

namespace App\Filament\Resources\Books\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Select::make('author_id')
                    ->relationship('author', 'name')
                    ->required(),
                Select::make('genre_id')
                    ->relationship('genre', 'name')
                    ->required(),
                FileUpload::make('cover')
                    ->required(),
                TextInput::make('synopsis')
                    ->required(),
            ]);
    }
}
