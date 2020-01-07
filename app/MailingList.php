<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailingList extends Model
{
    protected $guarded = ['id'];

    protected $table = 'mailing_lists';
}
