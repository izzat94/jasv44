<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'apcsquestions';

    public function specialized()
    {
    	return $this->belongsTo('App\Specialized');
    }

    public function related()
    {
    	return $this->belongsTo('App\Related');
    }
}
