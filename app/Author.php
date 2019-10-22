<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
}
