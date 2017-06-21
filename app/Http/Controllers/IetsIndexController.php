<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IetsIndex;
use App\IetsAnnounce;
use App\IetsApplicant;
use App\IetsPayment;
use App\IetsAssignApp;
use App\IetsProIv;
use App\IetsCert;
use App\IetsCpd;
use App\SMEaddinfo;
use Session;

class IetsIndexController extends Controller
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
        $ietsannounce = IetsAnnounce::count();
        $ietsapplicant = IetsApplicant::count();
        $ietspayment = IetsPayment::count();
        $ietsassignapp = IetsAssignApp::count();
        $ietsproiv = IetsProIv::count();
        $ietscert = IetsCert::count();
        $ietscpd = IetsCpd::count();
		$addinfo = SMEaddinfo::count();
        return view('ietsindex.create', compact('ietsannounce', 'ietsapplicant', 'ietspayment', 'ietsassignapp', 'ietsproiv', 'ietscert', 'ietscpd','addinfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ietsindex = new IetsIndex;

        return redirect() -> route(('ietsindex.show'),$ietsindex->id);
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
