<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = ['id'];

    protected $table = 'news';

    protected $dates = ['published_date'];

    public static function latestNews()
    {
        return static::latest()
            ->orderBy('published_date', 'asc')
            ->take(3)
            ->get();
    }
}
