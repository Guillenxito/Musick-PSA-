<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function album()
    {
        return $this->hasOne(Album::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function style()
    {
        return $this->hasOne(Style::class);
    }
}
