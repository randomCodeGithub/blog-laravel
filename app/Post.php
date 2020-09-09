<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function scopeByCategory($query, $category)
    {
        return $query->orderBy('created_at', 'DESC')->where('category', $category);
    }

    public function scopeByPopularity($query)
    {
        return $query->orderBy('views', 'DESC');
    }

    public function scopeByDate($query)
    {
        return $query->orderBy('created_at', 'DESC');
    }
}
