<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ietsSectionB;
use App\IetsAppb;
use Validator;
use Response;
use Redirect;
use Session;
use App\Uploads;
use DB;
use App\User;
use Auth;

class ietsSectionBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ietsSectionB.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array('coursetitle' => 'required', 'major' => 'required',
            'universityname' => 'required', 'from' => 'required', 'to' => 'required'));

        $ietsSectionB = new ietsSectionB;
        $ietsappb = new IetsAppb;

        $ietsSectionB->coursetitle = $request->coursetitle;
        $ietsSectionB->major = $request->major;
        $ietsSectionB->universityname = $request->universityname;
        $ietsSectionB->from = $request->from;
        $ietsSectionB->to = $request->to;
        $ietsSectionB->user_id = Auth::id();
        $ietsSectionB->applicant_id = $request->applicant_id;
        // $ietsSectionB->name = $request->name;

    
        //save file
        if ($request->hasFile('cert_file')){
            $file = $request->file('cert_file');
            $filename = time() . '.' . $file->getClientOriginalExtension(); //save image as .png @ etc
            $request->file('cert_file')->move(base_path() . '/public/uploads/',$filename); //path file to save

            $ietsSectionB->cert = $filename; //save file to which column
            $ietsappb->cert = $filename;
        }

        $ietsappb->coursetitle = $request->coursetitle;
        $ietsappb->major = $request->major;
        $ietsappb->universityname = $request->universityname;
        $ietsappb->from = $request->from;
        $ietsappb->to = $request->to;
        $ietsappb->user_id = Auth::id();
        $ietsappb->applicant_id = $request->applicant_id;
        // $ietsappb->name = $request->name;


        $ietsappb->save();


        $ietsSectionB->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page

        return redirect()->route('ietsSectionB.show', $ietsSectionB->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $ietsSectionB = ietsSectionB::where('user_id',Auth::id())->get();
        //from session
         return view('ietsSectionB.show', compact('ietsSectionB'));
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
        $ietsSectionB = ietsSectionB::find($id);

        //return the view and pass in the var we previously created
        return view('ietsSectionB.edit', compact('ietsSectionB'));
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
        //validate the data
        $this->validate($request, array('coursetitle' => 'required', 'major' => 'required',
            'universityname' => 'required', 'from' => 'required', 'to' => 'required'));

       $ietsSectionB = ietsSectionB::find($id);
        $ietsSectionB->coursetitle = $request->coursetitle;
        $ietsSectionB->major = $request->major;
        $ietsSectionB->universityname = $request->universityname;
        $ietsSectionB->from = $request->from;
        $ietsSectionB->to = $request->to;
        $ietsSectionB->user_id = Auth::id();
        $ietsSectionB->applicant_id = $request->applicant_id;
        // $ietsSectionB->name = $request->name;
 
        //save file
        if ($request->hasFile('featured_image')){
            $file = $request->file('featured_image');
            $filename = time() . '.' . $file->getClientOriginalExtension(); //save image as .png @ etc
            $request->file('featured_image')->move(base_path() . '/public/image/',$filename); //path file to save

            $ietsSectionB->image = $filename; //save file to which column
        }
    
        $ietsappb = IetsAppb::find($id);
        $ietsappb->coursetitle = $request->coursetitle;
        $ietsappb->major = $request->major;
        $ietsappb->universityname = $request->universityname;
        $ietsappb->from = $request->from;
        $ietsappb->to = $request->to;
        $ietsappb->user_id = Auth::id();
        $ietsappb->applicant_id = $request->applicant_id;
        // $ietsappb->name = $request->name;
 
        //save file
        if ($request->hasFile('featured_image')){
            $file = $request->file('featured_image');
            $filename = time() . '.' . $file->getClientOriginalExtension(); //save image as .png @ etc
            $request->file('featured_image')->move(base_path() . '/public/image/',$filename); //path file to save

            $ietsappb->image = $filename; //save file to which column
        }
    



        $ietsappb->save();


        $ietsSectionB->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page

        return redirect()->route('ietsSectionB.show', $ietsSectionB->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ietsSectionB = ietsSectionB::find($id);
        $ietsappb = IetsAppb::find($id);
        $ietsappb->delete();
        $ietsSectionB->delete();
        Session::flash('success', 'The announcement was successfully deleted!');        
        return redirect()->route('ietsSectionB.show', $ietsSectionB->id);

    }

 


}

