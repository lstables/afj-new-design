<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    protected $guarded = [];

    public $table = 'replies';

    public function review()
    {
    	return $this->belongsTo(Reviews::class, 'id', 'comment_id');
    }
}
