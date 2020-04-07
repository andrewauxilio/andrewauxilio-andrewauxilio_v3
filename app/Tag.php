<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Many-to-many relationship with articles
    public function tags()
    {
        return $this->belongsToMany(Article::class);
    }
}
