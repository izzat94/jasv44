<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EiaSchedule extends Model
{
    public function eiaexamtitle()
    {
    	return $this->belongsTo('App\EiaExamTitle');
    }

    public function eiavenue()
    {
    	return $this->belongsTo('App\EiaVenue');
    }
}
