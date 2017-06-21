<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eiaSectionD;
use App\EiaAppd;
use Session;
use Auth;

class eiaSectionDController extends Controller
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
        return view('eiaSectionD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array('participate' => 'required', 'project_name' => 'required', 'position' => 'required', 'responsibilities' => 'required', 'dateStart' => 'required', 'dateEnd' => 'required', 'ref_name' => 'required', 'ref_address' => 'required', 'ref_email' => 'required'));

        $eiaSectionD = new eiaSectionD;
        $eiaappd = new EiaAppd;

        $eiaSectionD->participate = $request->participate;
        $eiaSectionD->project_name = $request->project_name;
        $eiaSectionD->position = $request->position;
        $eiaSectionD->responsibilities = $request->responsibilities;
        $eiaSectionD->dateStart = $request->dateStart;
        $eiaSectionD->dateEnd = $request->dateEnd;
        $eiaSectionD->numdays = $request->numdays;
        $eiaSectionD->numMonths = $request->numMonths;
        $eiaSectionD->ref_name = $request->ref_name;
        $eiaSectionD->ref_address = $request->ref_address;
        $eiaSectionD->ref_email = $request->ref_email;
        $eiaSectionD->user_id = Auth::id();
        $eiaSectionD->applicant_id = $request->applicant_id;

        $eiaappd->participate = $request->participate;
        $eiaappd->project_name = $request->project_name;
        $eiaappd->position = $request->position;
        $eiaappd->responsibilities = $request->responsibilities;
        $eiaappd->dateStart = $request->dateStart;
        $eiaappd->dateEnd = $request->dateEnd;
        $eiaappd->numdays = $request->numdays;
        $eiaappd->numMonths = $request->numMonths;
        $eiaappd->ref_name = $request->ref_name;
        $eiaappd->ref_address = $request->ref_address;
        $eiaappd->ref_email = $request->ref_email;
        $eiaappd->user_id = Auth::id();
        $eiaappd->applicant_id = $request->applicant_id;
        


        $eiaSectionD->save();
        $eiaappd->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page

        return redirect()->route('eiaSectionD.show', $eiaSectionD->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $eiaSectionD = eiaSectionD::where('user_id',Auth::id())->get();
        //from session
        return view('eiaSectionD.show', compact('eiaSectionD'));        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database and save as a var
        $eiaSectionD = eiaSectionD::find($id);

        //return the view and pass in the var we previously created
        return view('eiaSectionD.edit', compact('eiaSectionD'));
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
        $this->validate($request, array('participate' => 'required', 'project_name' => 'required', 'position' => 'required', 'responsibilities' => 'required', 'dateStart' => 'required', 'dateEnd' => 'required', 'ref_name' => 'required', 'ref_address' => 'required', 'ref_email' => 'required'));

        $eiaSectionD = eiaSectionD::find($id);
        $eiaSectionD->participate = $request->participate;
        $eiaSectionD->project_name = $request->project_name;
        $eiaSectionD->position = $request->position;
        $eiaSectionD->responsibilities = $request->responsibilities;
        $eiaSectionD->dateStart = $request->dateStart;
        $eiaSectionD->dateEnd = $request->dateEnd;
        $eiaSectionD->numdays = $request->numdays;
        $eiaSectionD->numMonths = $request->numMonths;
        $eiaSectionD->ref_name = $request->ref_name;
        $eiaSectionD->ref_address = $request->ref_address;
        $eiaSectionD->ref_email = $request->ref_email;

        $eiaappd = EiaAppd::find($id);
        $eiaappd->participate = $request->participate;
        $eiaappd->project_name = $request->project_name;
        $eiaappd->position = $request->position;
        $eiaappd->responsibilities = $request->responsibilities;
        $eiaappd->dateStart = $request->dateStart;
        $eiaappd->dateEnd = $request->dateEnd;
        $eiaappd->numdays = $request->numdays;
        $eiaappd->numMonths = $request->numMonths;
        $eiaappd->ref_name = $request->ref_name;
        $eiaappd->ref_address = $request->ref_address;
        $eiaappd->ref_email = $request->ref_email;



        $eiaappd->save();

        $eiaSectionD->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page

        return redirect()->route('eiaSectionD.show', $eiaSectionD->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eiaSectionD = eiaSectionD::find($id);
        $eiaappd = EiaAppd::find($id);
        $eiaappd->delete();
        $eiaSectionD->delete();
        Session::flash('success', 'The announcement was successfully deleted!');        
        return redirect()->route('eiaSectionD.show', $eiaSectionD->id);
    }
}
