<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apcsSectionD;
use App\ApcsAppd;
use Validator;
use Session;
use Auth;

class apcsSectionDController extends Controller
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
        return view('apcsSectionD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array('projectStart' => 'required', 'projectComplete' => 'required',
            'proposaltitle' => 'required', 'clientname' => 'required', 'clientaddress' => 'required'));

        $apcsappd = new ApcsAppd;

        $apcsSectionD = new apcsSectionD;
        $apcsSectionD->projectStart = $request->projectStart;
        $apcsSectionD->projectComplete = $request->projectComplete;
        $apcsSectionD->numdays = $request->numdays;
        $apcsSectionD->numMonths = $request->numMonths;
        $apcsSectionD->proposaltitle = $request->proposaltitle;
        $apcsSectionD->clientname = $request->clientname;
        $apcsSectionD->clientaddress = $request->clientaddress;
        $apcsSectionD->user_id = Auth::id();
        $apcsSectionD->applicant_id = $request->applicant_id;
        // $apcsSectionD->name = $request->name;
        $apcsappd->user_id = Auth::id();

        $apcsappd->projectStart = $request->projectStart;
        $apcsappd->projectComplete = $request->projectComplete;
        $apcsappd->numdays = $request->numdays;
        $apcsappd->numMonths = $request->numMonths;
        $apcsappd->proposaltitle = $request->proposaltitle;
        $apcsappd->clientname = $request->clientname;
        $apcsappd->clientaddress = $request->clientaddress;

        $apcsappd->applicant_id = $request->applicant_id;
        // $apcsappd->name = $request->name;

        $apcsSectionD->save();
        $apcsappd->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page

        return redirect()->route('apcsSectionD.show', $apcsSectionD->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apcsSectionD = apcsSectionD::where('user_id',Auth::id())->get();
        //from session
        return view('apcsSectionD.show', compact('apcsSectionD'));
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
        $apcsSectionD = apcsSectionD::find($id);

        //return the view and pass in the var we previously created
        return view('apcsSectionD.edit', compact('apcsSectionD'));
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
        $this->validate($request, array('projectStart' => 'required', 'projectComplete' => 'required',
            'proposaltitle' => 'required', 'clientname' => 'required', 'clientaddress' => 'required'));

        $apcsSectionD = apcsSectionD::find($id);
        $apcsSectionD->projectStart = $request->projectStart;
        $apcsSectionD->projectComplete = $request->projectComplete;
        $apcsSectionD->numdays = $request->numdays;
        $apcsSectionD->numMonths = $request->numMonths;
        $apcsSectionD->proposaltitle = $request->proposaltitle;
        $apcsSectionD->clientname = $request->clientname;
        $apcsSectionD->clientaddress = $request->clientaddress;
        $apcsSectionD->user_id = Auth::id();
        $apcsSectionD->applicant_id = $request->applicant_id;
        // $apcsSectionD->name = $request->name;

        $apcsappcd = ApcsAppcd::find($id);
        $apcsappcd->projectStart = $request->projectStart;
        $apcsappcd->projectComplete = $request->projectComplete;
        $apcsappcd->numdays = $request->numdays;
        $apcsappcd->numMonths = $request->numMonths;
        $apcsappcd->proposaltitle = $request->proposaltitle;
        $apcsappcd->clientname = $request->clientname;
        $apcsappcd->clientaddress = $request->clientaddress;
        $apcsappcd->user_id = Auth::id();
        $apcsappcd->applicant_id = $request->applicant_id;
        // $apcsappcd->name = $request->name;

        $apcsappcd->save();

        $apcsSectionD->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page

        return redirect()->route('apcsSectionD.show', $apcsSectionD->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apcsSectionD = apcsSectionD::find($id);
        $apcsappcd = ApcsAppcd::find($id);
        $apcsappcd->delete();
        $apcsSectionD->delete();
        Session::flash('success', 'The announcement was successfully deleted!');        
        return redirect()->route('apcsSectionD.show', $apcsSectionD->id);
    }
}
