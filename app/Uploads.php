<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Uploads extends Model {
    // upload model
   protected $table = 'upload';
	//protected $fillable = ['filename', 'mime', 'original_filename', 'created_at', 'updated_at','user_nric'];
	protected $fillable = ['user_id', 'filename', 'mime', 'original_filename'];
		protected $dates = ['created_at'];
	public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
	
    }
	
}
