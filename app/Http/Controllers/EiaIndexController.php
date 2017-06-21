<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EiaIndex;
use App\EiaAnnounce;
use App\EiaApplicant;
use App\EiaPayment;
use App\EiaAssignApp;
use App\EiaProIv;
use App\EiaCert;
use App\EiaCpd;
use Session;

class EiaIndexController extends Controller
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
        $eiaannounce = EiaAnnounce::count();
        $eiaapplicant = EiaApplicant::count();
        $eiapayment = EiaPayment::count();
        $eiaassignapp = EiaAssignApp::count();
        $eiaproiv = EiaProIv::count();
        $eiacert = EiaCert::count();
        $eiacpd = EiaCpd::count();
        return view('eiaindex.create', compact('eiaannounce', 'eiaapplicant', 'eiapayment', 'eiaassignapp', 'eiaproiv', 'eiacert', 'eiacpd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eiaindex = new EiaIndex;

        return redirect() -> route(('eiaindex.show'),$eiaindex->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
