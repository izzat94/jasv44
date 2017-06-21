<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\IetsQuestion;
use App\IetsRelated;
use Session;
use storage;
use Validator;
use Response;
use Redirect;
use App\Uploads;
use Image;
use DB;

class IetsQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ietsquestion = IetsQuestion::all();
        $ietsrelates = IetsRelated::all();
        $correct = [
            '' => '--Please Select--',
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D'
        ];
        return view('ietsquestion.show', compact('ietsquestion', 'ietsrelates', 'correct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ietsquestion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(

            'type' => 'required',
            'question' => 'required|max:255',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'correct' => 'required',
            'level' => 'required'

            ));

        //store in the database
        $ietsquestion = new IetsQuestion;

        if ($request->hasFile('fileToUpload')){
            $ietsquestion->fileToUpload = $request->fileToUpload;
            $file = $request->file('fileToUpload');
            $filename = time() . '.' . $file->getClientOriginalExtension(); //save image as .png @ etc
            $ietsquestion->fileToUpload = $filename; //save file to which column
            $request->file('fileToUpload')->move(base_path().'/public/images/',$filename);
        }

        $ietsquestion->limg = $request->limg;
        $ietsquestion->type = $request->type;
        $ietsquestion->question = $request->question;
        $ietsquestion->i = $request->i;
        $ietsquestion->ii = $request->ii;
        $ietsquestion->iii = $request->iii;
        $ietsquestion->iv = $request->iv;
        $ietsquestion->a = $request->a;
        $ietsquestion->b = $request->b;
        $ietsquestion->c = $request->c;
        $ietsquestion->d = $request->d;
        $ietsquestion->correct = $request->correct;
        $ietsquestion->ietsrelated_id = $request->ietsrelated_id;
        $ietsquestion->level = $request->level;

        $correct = [
            '' => '--Please Select--',
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D'
        ];

        $ietsquestion -> save();

        Session::flash('success', 'The question has been added!');

        return redirect() -> route(('ietsquestion.show'),$ietsquestion->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ietsquestion = IetsQuestion::all();
        $ietsrelates = IetsRelated::all();
        $correct = [
            '' => '--Please Select--',
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D'
        ];
        return view('ietsquestion.show', compact('ietsquestion', 'ietsrelates', 'correct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database and save as a var
        $ietsquestion = IetsQuestion::find($id);
        $ietsrelates = IetsRelated::all();
        $catrs = array();
        foreach ($ietsrelates as $cat) {
            $catrs[$cat->id] = $cat->ietsrelated;
        }
        $correct = [
            '' => '--Please Select--',
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D'
        ];
        //return the view and pass in the var we previously created
        return view('ietsquestion.edit')->withietsquestion($ietsquestion)->withietsrelates($catrs)->withcorrect($correct);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(

            'type' => 'required',
            'question' => 'required|max:255',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'correct' => 'required',
            'level' => 'required'

            ));

        //store in the database
        $ietsquestion = IetsQuestion::find($id);

        // if ($request->hasFile('fileToUpload')){
        //     $ietsquestion->fileToUpload = $request->input('fileToUpload');
        //     $ietsquestion = $request->file('fileToUpload');
        //     $filename = time() . '.' . $ietsquestion->getClientOriginalExtension(); //save image as .png @ etc
        //     $location = public_path('images/' . $filename); //path image to save
        //     Image::make($ietsquestion)->resize(800, 400)->save($location);
        //     $ietsSectionB->ietsquestion = $filename; //save file to which column
        // }
        if ($request->hasFile('original_filename')){
            $ietsquestion->original_filename = $request->input('original_filename');
            $file = $request->file('original_filename');
            $filename = time() . '.' . $file->getClientOriginalExtension(); //save image as .png @ etc
            $ietsquestion->original_filename = $filename; //save file to which column
            $request->file('original_filename')->move(base_path().'/public/uploads/',$filename);
        }

        $ietsquestion->limg = $request->input('limg');
        $ietsquestion->type = $request->input('type');
        $ietsquestion->question = $request->input('question');
        $ietsquestion->i = $request->input('i');
        $ietsquestion->ii = $request->input('ii');
        $ietsquestion->iii = $request->input('iii');
        $ietsquestion->iv = $request->input('iv');
        $ietsquestion->a = $request->input('a');
        $ietsquestion->b = $request->input('b');
        $ietsquestion->c = $request->input('c');
        $ietsquestion->d = $request->input('d');
        $ietsquestion->correct = $request->input('correct');
        $ietsquestion->ietsrelated_id = $request->input('ietsrelated_id');
        $ietsquestion->level = $request->input('level');

        $correct = [
            '' => '--Please Select--',
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D'
        ];

        $ietsquestion -> save();

        Session::flash('success', 'The question has been updated!');

        return redirect() -> route(('ietsquestion.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ietsquestion = IetsQuestion::find($id);

        $ietsquestion->delete();

        Session::flash('success', 'The question has been deleted!');
        return redirect()->route('ietsquestion.index');
    }

        public function multiple_upload(Request $request) {
      // getting all of the post data
      $files = Input::file('fileToUpload');
      // Making counting of uploaded images
      $file_count = count($files);
      // start count how many uploaded
      $uploadcount = 0;
      if (is_array($files) || is_object($files))
        {
      foreach ($files as $file) {
        $rules = array('photo' => 'mimes:jpeg,bmp,png|max:10240'); //'required|mimes:pdf'
        $validator = Validator::make(array('file'=> $file), $rules);
        if($validator->passes()){
          $destinationPath = 'uploads'; // upload folder in public directory
          $filename = $file->getClientOriginalName();
          $upload_success = $file->move($destinationPath, $filename);
          $uploadcount ++;

          // save into database
          $extension = $file->getClientOriginalExtension();
          $entry = new IetsQuestion();

          $entry->mime = $file->getClientMimeType();
          $entry->original_filename = $filename;
          $entry->filename = $file->getFilename().'.'.$extension;


          $entry->limg = $request->limg;
          $entry->type = $request->type;
          $entry->question = $request->question;
          $entry->i = $request->i;
          $entry->ii = $request->ii;
          $entry->iii = $request->iii;
          $entry->iv = $request->iv;
          $entry->a = $request->a;
          $entry->b = $request->b;
          $entry->c = $request->c;
          $entry->d = $request->d;
          $entry->correct = $request->correct;
          $entry->ietsrelated_id = $request->ietsrelated_id;
          $entry->level = $request->level;
          $entry->save();
        }
      }
  }

        elseif (is_array($files) || is_object($files) == null)
        {

            $ietsquestion = new IetsQuestion;

        $ietsquestion->limg = $request->limg;
        $ietsquestion->type = $request->type;
        $ietsquestion->question = $request->question;
        $ietsquestion->i = $request->i;
        $ietsquestion->ii = $request->ii;
        $ietsquestion->iii = $request->iii;
        $ietsquestion->iv = $request->iv;
        $ietsquestion->a = $request->a;
        $ietsquestion->b = $request->b;
        $ietsquestion->c = $request->c;
        $ietsquestion->d = $request->d;
        $ietsquestion->correct = $request->correct;
        $ietsquestion->ietsrelated_id = $request->ietsrelated_id;
        $ietsquestion->level = $request->level;

        $ietsquestion -> save();

        Session::flash('success', 'The question has been successfully added!');

        return redirect() -> route(('ietsquestion.show'),$ietsquestion->id);
        }

      if($uploadcount == $file_count){
        Session::flash('success', 'The question has been successfully added!');
        return Redirect::to('ietsquestion/show');
      } else {
          Session::flash('success', 'The file upload is neither pdf, .doc, .docx nor .txt file');
        return Redirect::to('ietsquestion/show')->withInput()->withErrors($validator);
      }
    }
}
