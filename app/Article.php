<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'summary', 'body', 'image', 'user_id'
    ];

    //Inverse one-to-many relationship with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Many-to-many relationship with tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
