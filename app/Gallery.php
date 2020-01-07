<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = ['id'];

    protected $table = 'galleries';

    public $timestamps = false;
}
