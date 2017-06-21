<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ietsSectionC;
use App\IetsAppc;
use Session;
use Auth;
use DB;
use App\User;

class ietsSectionCController extends Controller
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
        return view('ietsSectionC.create');
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

        $ietsSectionC = new ietsSectionC;
        $ietsappc = new IetsAppc;

        $ietsSectionC->projectStart = $request->projectStart;
        $ietsSectionC->projectComplete = $request->projectComplete;
        $ietsSectionC->numdays = $request->numdays;
        $ietsSectionC->numMonths = $request->numMonths;
        $ietsSectionC->proposaltitle = $request->proposaltitle;
        $ietsSectionC->clientname = $request->clientname;
        $ietsSectionC->clientaddress = $request->clientaddress;
        $ietsSectionC->user_id = Auth::id();
        $ietsSectionC->applicant_id = $request->applicant_id;

        $ietsappc->projectStart = $request->projectStart;
        $ietsappc->projectComplete = $request->projectComplete;
        $ietsappc->numdays = $request->numdays;
        $ietsappc->numMonths = $request->numMonths;
        $ietsappc->proposaltitle = $request->proposaltitle;
        $ietsappc->clientname = $request->clientname;
        $ietsappc->clientaddress = $request->clientaddress;
        $ietsappc->user_id = Auth::id();
        $ietsappc->applicant_id = $request->applicant_id;

        $ietsappc->save();

        $ietsSectionC->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page

        return redirect()->route('ietsSectionC.show', $ietsSectionC->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ietsSectionC = ietsSectionC::where('user_id',Auth::id())->get();
        //from session
        return view('ietsSectionC.show', compact('ietsSectionC'));
        
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
        $ietsSectionC = ietsSectionC::find($id);

        //return the view and pass in the var we previously created
        return view('ietsSectionC.edit', compact('ietsSectionC'));
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

        $ietsSectionC = ietsSectionC::find($id);
         $ietsSectionC->projectStart = $request->projectStart;
        $ietsSectionC->projectComplete = $request->projectComplete;
        $ietsSectionC->numdays = $request->numdays;
        $ietsSectionC->numMonths = $request->numMonths;
        $ietsSectionC->proposaltitle = $request->proposaltitle;
        $ietsSectionC->clientname = $request->clientname;
        $ietsSectionC->clientaddress = $request->clientaddress;

        $ietsappc = IetsAppc::find($id);
         $ietsappc->projectStart = $request->projectStart;
        $ietsappc->projectComplete = $request->projectComplete;
        $ietsappc->numdays = $request->numdays;
        $ietsappc->numMonths = $request->numMonths;
        $ietsappc->proposaltitle = $request->proposaltitle;
        $ietsappc->clientname = $request->clientname;
        $ietsappc->clientaddress = $request->clientaddress;

        $ietsappc->save();

        $ietsSectionC->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page

        return redirect()->route('ietsSectionC.show', $ietsSectionC->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ietsSectionC = IetsSectionC::find($id);
        $ietsappc = IetsAppc::find($id);
        $ietsappc->delete();
        $ietsSectionC->delete();
        Session::flash('success', 'The announcement was successfully deleted!');        
        return redirect()->route('ietsSectionC.show', $ietsSectionC->id);
    }
}
