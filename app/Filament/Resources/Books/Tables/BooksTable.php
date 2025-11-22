<?php

namespace App\Filament\Resources\Books\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BooksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Judul Buku'),
                TextColumn::make('author.name')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Penulis'),
                TextColumn::make('genre.name')
                    ->sortable()
                    ->label('Genre'),
                ImageColumn::make('cover')
                    ->label('Kover'),
                TextColumn::make('synopsis')
                    ->searchable()
                    ->label('Sinopsis'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
