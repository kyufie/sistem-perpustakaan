<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use App\Models\Borrow;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookStats extends BaseWidget
{
    protected function getColumns(): int
    {
        return 2;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Peminjaman Aktif', Borrow::where('has_returned', false)->count())
                ->description('Total peminjaman yang belum dikembalikan')
                ->icon('heroicon-o-book-open')
                ->color('primary'),
            Stat::make('Jumlah Buku', Book::count())
                ->description('Total buku yang tersedia')
                ->icon('heroicon-o-book-open')
                ->color('primary'),
        ];
    }
}
