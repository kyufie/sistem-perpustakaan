<?php

namespace App\Filament\Resources\Borrows\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BorrowsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('borrower.name')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Peminjam'),
                TextColumn::make('book.title')
                    ->searchable()
                    ->sortable()
                    ->label('Judul Buku'),
                IconColumn::make('has_returned')
                    ->sortable()
                    ->boolean()
                    ->label('Sudah Dikembalikan')
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
