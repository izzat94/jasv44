<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApcsQuestion;
use Session;
use storage;
use Validator;
use Response;
use Redirect;
use App\Uploads;
use Image;
use DB;

class ApcsQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = ApcsQuestion::all();
        return view('question.show', compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.create');
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

            'specialized' => 'required',
            'question' => 'required|max:255',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'correct' => 'required',
            'level' => 'required'

            ));

        //store in the database
        $question = new ApcsQuestion;

        if ($request->hasFile('fileToUpload')){
            $question->fileToUpload = $request->fileToUpload;
            $file = $request->file('fileToUpload');
            $filename = time() . '.' . $file->getClientOriginalExtension(); //save image as .png @ etc
            $question->fileToUpload = $filename; //save file to which column
            $request->file('fileToUpload')->move(base_path().'/public/images/',$filename);
        }

        $question->specialized = $request->specialized;
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
        $question->related = $request->related;
        $question->level = $request->level;

        $question -> save();

        Session::flash('success', 'The question has been added!');

        return redirect() -> route(('question.show'),$question->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = ApcsQuestion::all();
        return view('question.show', compact('question'));
        
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
        $question = ApcsQuestion::find($id);
        //return the view and pass in the var we previously created
        return view('question.edit')->withquestion($question);
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

            'specialized' => 'required',
            'question' => 'required|max:255',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'correct' => 'required',
            'level' => 'required'

            ));

        //store in the database
        $question = ApcsQuestion::find($id);

        // if ($request->hasFile('fileToUpload')){
        //     $question->fileToUpload = $request->input('fileToUpload');
        //     $question = $request->file('fileToUpload');
        //     $filename = time() . '.' . $question->getClientOriginalExtension(); //save image as .png @ etc
        //     $location = public_path('images/' . $filename); //path image to save
        //     Image::make($question)->resize(800, 400)->save($location);
        //     $ietsSectionB->question = $filename; //save file to which column
        // }
        if ($request->hasFile('fileToUpload')){
            $question->fileToUpload = $request->input('fileToUpload');
            $file = $request->file('fileToUpload');
            $filename = time() . '.' . $file->getClientOriginalExtension(); //save image as .png @ etc
            $question->fileToUpload = $filename; //save file to which column
            $request->file('fileToUpload')->move(base_path().'/public/images/',$filename);
        }

        
        $question->specialized = $request->input('specialized');
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
        $question->related = $request->input('related');
        $question->level = $request->input('level');

        $question -> save();

        Session::flash('success', 'The question has been updated!');

        return redirect() -> route(('question.show'),$question->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = ApcsQuestion::find($id);

        $question->delete();

        Session::flash('success', 'The question has been deleted!');
        return redirect()->route('question.index');
    }
}
