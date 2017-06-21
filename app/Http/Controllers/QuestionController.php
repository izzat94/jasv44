<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Question;
use App\Specialized;
use App\Related;
use Session;
use storage;
use Validator;
use Response;
use Redirect;
use App\Uploads;
use Image;
use DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::all();
        $specializes = Specialized::all();
        $relates = Related::all();
        $correct = [
            '' => '--Please Select--',
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D'
        ];
        return view('apcsquestion.show', compact('question', 'specializes', 'relates', 'correct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apcsquestion.create');
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

            'specialized_id' => 'required|integer',
            'question' => 'required|max:255',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'correct' => 'required',
            'level' => 'required'

            ));

        $correct = [
            '' => '--Please Select--',
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D'
        ];

        //store in the database
        $question = new Question;

        if ($request->hasFile('fileToUpload')){
            $question->fileToUpload = $request->fileToUpload;
            $file = $request->file('fileToUpload');
            $filename = time() . '.' . $file->getClientOriginalExtension(); //save image as .png @ etc
            $question->fileToUpload = $filename; //save file to which column
            $request->file('fileToUpload')->move(base_path().'/public/images/',$filename);
        }

        $question->limg = $request->limg;
        $question->specialized_id = $request->specialized_id;
        $question->question = $request->question;
        $question->i = $request->i;
        $question->ii = $request->ii;
        $question->iii = $request->iii;
        $question->iv = $request->iv;
        $question->a = $request->a;
        $question->b = $request->b;
        $question->c = $request->c;
        $question->d = $request->d;
        $question->correct = $request->correct;
        $question->related_id = $request->related_id;
        $question->level = $request->level;

        $question -> save();

        Session::flash('success', 'The question has been added!');

        return redirect() -> route(('apcsquestion.show'),$question->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::all();
        $specializes = Specialized::all();
        $relates = Related::all();

        $correct = [
            '' => '--Please Select--',
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D'
        ];
        return view('apcsquestion.show', compact('question', 'specializes', 'relates', 'correct'));
        
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
        $question = Question::find($id);
        $specializes = Specialized::all();
        $cats = array();
        foreach ($specializes as $cat) {
            $cats[$cat->id] = $cat->specialized;
        }
        $relates = Related::all();
        $catrs = array();
        foreach ($relates as $cat) {
            $catrs[$cat->id] = $cat->related;
        }

        $correct = [
            '' => '--Please Select--',
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D'
        ];
        //return the view and pass in the var we previously created
        return view('apcsquestion.edit')->withquestion($question)->withspecializes($cats)->withrelates($catrs)->withcorrect($correct);
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

            'specialized_id' => 'required|integer',
            'question' => 'required|max:255',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'correct' => 'required',
            'level' => 'required'

            ));

        


        //store in the database
        $question = Question::find($id);

        // if ($request->hasFile('fileToUpload')){
        //     $question->fileToUpload = $request->input('fileToUpload');
        //     $question = $request->file('fileToUpload');
        //     $filename = time() . '.' . $question->getClientOriginalExtension(); //save image as .png @ etc
        //     $location = public_path('images/' . $filename); //path image to save
        //     Image::make($question)->resize(800, 400)->save($location);
        //     $ietsSectionB->question = $filename; //save file to which column
        // }
        if ($request->hasFile('original_filename')){
            $question->original_filename = $request->input('original_filename');
            $file = $request->file('original_filename');
            $filename = time() . '.' . $file->getClientOriginalExtension(); //save image as .png @ etc
            $question->original_filename = $filename; //save file to which column
            $request->file('original_filename')->move(base_path().'/public/uploads/',$filename);
        }

        $question->limg = $request->input('limg');
        $question->specialized_id = $request->input('specialized_id');
        $question->question = $request->input('question');
        $question->i = $request->input('i');
        $question->ii = $request->input('ii');
        $question->iii = $request->input('iii');
        $question->iv = $request->input('iv');
        $question->a = $request->input('a');
        $question->b = $request->input('b');
        $question->c = $request->input('c');
        $question->d = $request->input('d');
        $question->correct = $request->input('correct');
        $question->related_id = $request->input('related_id');
        $question->level = $request->input('level');

        $correct = [
            '' => '--Please Select--',
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D'
        ];

        $question -> save();

        Session::flash('success', 'The question has been updated!');

        return redirect() -> route(('apcsquestion.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);

        $question->delete();

        Session::flash('success', 'The question has been deleted!');
        return redirect()->route('apcsquestion.index');
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
          $entry = new Question();

          $entry->mime = $file->getClientMimeType();
          $entry->original_filename = $filename;
          $entry->filename = $file->getFilename().'.'.$extension;


          $entry->limg = $request->limg;
          $entry->specialized_id = $request->specialized_id;
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
          $entry->related_id = $request->related_id;
          $entry->level = $request->level;
          $entry->save();
        }
      }
  }

        elseif (is_array($files) || is_object($files) == null)
        {

            $question = new Question;

        $question->limg = $request->limg;
        $question->specialized_id = $request->specialized_id;
        $question->question = $request->question;
        $question->i = $request->i;
        $question->ii = $request->ii;
        $question->iii = $request->iii;
        $question->iv = $request->iv;
        $question->a = $request->a;
        $question->b = $request->b;
        $question->c = $request->c;
        $question->d = $request->d;
        $question->correct = $request->correct;
        $question->related_id = $request->related_id;
        $question->level = $request->level;

        $question -> save();

        Session::flash('success', 'The question has been successfully added!');

        return redirect() -> route(('apcsquestion.show'),$question->id);
        }

      if($uploadcount == $file_count){
        Session::flash('success', 'The question has been successfully added!');
        return Redirect::to('apcsquestion/show');
      } else {
          Session::flash('success', 'The file upload is neither pdf, .doc, .docx nor .txt file');
        return Redirect::to('apcsquestion/show')->withInput()->withErrors($validator);
      }
    }
}
