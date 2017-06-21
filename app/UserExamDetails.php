<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserExamDetails extends Model
{
    //
	 protected $table = 'ietsuserexam';
	//protected $fillable = ['filename', 'mime', 'original_filename', 'created_at', 'updated_at','user_nric'];
	protected $fillable = ['user_id', 'schedule_id', 'seat_available'];
 //protected $dates = ['exam_date'];
		public function id()
  {
      return $this->hasOne('App\iets_examschedule');
  }
  
  
}
