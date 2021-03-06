<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;
use Session;
use App\Uploads;
use Auth;
use App\User;
use DB;

class UploadsController extends Controller {
    public function index() {
		$upload = uploads::all();
		/*foreach ($upload as $uploads) {
            $uploads->original_filename = DB::table('upload')
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('users')
                      ->whereRaw('users.id = upload.user_id');
            })
            ->get();
        }*/
		
		
		return view('upload.index',['upload' => $upload]);
		
		//select * from upload where exists ( select * from users where users.id = upload.user_id )
      return view('upload.index');
	  
    }
    public function multiple_upload() {
      // getting all of the post data
      $files = Input::file('images');
      // Making counting of uploaded images
      $file_count = count($files);
	  $file_count = 10;
	  
      // start count how many uploaded
      $uploadcount = 0;

      foreach ($files as $file) {
        $rules = array('file' => 'required|mimes:pdf|max:10240'); //'required|mimes:pdf'
        $validator = Validator::make(array('file'=> $file), $rules);
        if($validator->passes()){
          $destinationPath = 'uploads'; // upload folder in public directory
          $filename = $file->getClientOriginalName();
          $upload_success = $file->move($destinationPath, $filename);
          $uploadcount ++;

          // save into database
          $extension = $file->getClientOriginalExtension();
          $entry = new Uploads();
		  $entry->user_id=Auth::id();
          $entry->mime = $file->getClientMimeType();
          $entry->original_filename = $filename;
		  $entry->sizefile=$file->getClientSize();
          $entry->filename = $file->getFilename().'.'.$extension;
          $entry->save();
        }
      }
      if($uploadcount < $file_count){
        Session::flash('success', 'Upload successfully');
        return Redirect::to('upload');
      } else {
		  Session::flash('success', 'the file upload is not pdf file');
        return Redirect::to('upload')->withInput()->withErrors($validator);
      }
    }
	
	public function showupload($user_id){
		 
		foreach ($upload as &$uploads) {
            $uploads->original_filename = User::where('id', $uploads->user_id)->get();
        }
		//return view('upload.index',['upload' => $upload]);
		
		return view('showupload.index',['upload' => $upload]);
	}
	
	public function delete($original_filename){
	
		
		uploads::where('original_filename',$original_filename)->delete();
		return back();
	}
}
