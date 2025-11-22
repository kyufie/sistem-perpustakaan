<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function author() {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function genre() {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}
