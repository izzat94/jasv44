<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eiaSectionC;
use App\EiaAppc;
use Validator;
use Response;
use Redirect;
use Session;
use App\Uploads;
use DB;
use Auth;

class eiaSectionCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eiaSectionC.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $this->validate($request, array('course' => 'required', 'date_complete' => 'required', 'cert_no' => 'required'));

        $eiaSectionC = new eiaSectionC;

        $eiaappc = new EiaAppc;

        $eiaSectionC->course = $request->course;
        $eiaSectionC->date_complete = $request->date_complete;
        $eiaSectionC->cert_no = $request->cert_no;
        $eiaSectionC->user_id = Auth::id();
        $eiaSectionC->applicant_id = $request->applicant_id;

        $eiaappc->course = $request->course;
        $eiaappc->date_complete = $request->date_complete;
        $eiaappc->cert_no = $request->cert_no;
        $eiaappc->user_id = Auth::id();
        $eiaappc->applicant_id = $request->applicant_id;
    

        $eiaSectionC->save();

        $eiaappc->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page

        return redirect()->route('eiaSectionC.show', $eiaSectionC->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $eiaSectionC = eiaSectionC::where('user_id',Auth::id())->get();
        //from session
        return view('eiaSectionC.show', compact('eiaSectionC'));    
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
        $eiaSectionC = eiaSectionC::find($id);

        //return the view and pass in the var we previously created
        return view('eiaSectionC.edit', compact('eiaSectionC'));
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
        $this->validate($request, array('course' => 'required', 'date_complete' => 'required',
            'cert_no' => 'required'));

        $eiaSectionC = eiaSectionC::find($id);
        $eiaSectionC->course = $request->course;
        $eiaSectionC->date_complete = $request->date_complete;
        $eiaSectionC->cert_no = $request->cert_no;

       $eiaappc = EiaAppc::find($id);
        $eiaappc->course = $request->course;
        $eiaappc->date_complete = $request->date_complete;
        $eiaappc->cert_no = $request->cert_no;

       

        $eiaappc->save();

        $eiaSectionC->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page

        return redirect()->route('eiaSectionC.show', $eiaSectionC->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eiaSectionC = eiaSectionC::find($id);
        $eiaappc = EiaAppc::find($id);
        $eiaappc->delete();
        $eiaSectionC->delete();
        Session::flash('success', 'The announcement was successfully deleted!');        
        return redirect()->route('eiaSectionC.show', $eiaSectionC->id);
    }
}
