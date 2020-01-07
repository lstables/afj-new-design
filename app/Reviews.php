<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $guarded = [];

    protected $table = 'reviews';

    protected $with = ['replies'];

    public function replies()
    {
    	return $this->hasMany(Replies::class, 'comment_id', 'id');	
    }

}
