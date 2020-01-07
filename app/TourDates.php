<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class TourDates extends Model
{
    protected $fillable = ['name', 'venue', 'ticket_url', 'date'];

    protected $table = 'tour_dates';

    protected $dates = ['date'];

//    public function getDayAttribute()
//    {
//        return $this->date->format('jS');
//    }
//
//    public function getMonthAttribute()
//    {
//        return $this->date->format('M');
//    }



    public static function newest()
    {
        return static::orderBy('date', 'asc')->paginate(14);
    }

    public static function future()
    {
        return static::where('date', '>=', Carbon::yesterday())
            ->orderBy('date', 'asc')
            ->take(4)
            ->get();
    }
}
