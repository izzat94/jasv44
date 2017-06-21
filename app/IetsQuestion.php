<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IetsQuestion extends Model
{
    protected $table = 'iets_questions';

     public function ietsrelated()
    {
    	return $this->belongsTo('App\IetsRelated');
    }
}
