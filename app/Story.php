<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}