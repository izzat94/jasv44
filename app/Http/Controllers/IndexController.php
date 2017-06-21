<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Announce;
use App\Applicant;
use App\Payment;
use App\AssignApp;
use App\ProIv;
use App\Cert;
use App\Cpd;
use Session;
use App\APCSSME_addinfo;

class IndexController extends Controller
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
        $announce = Announce::count();
        $applicant = Applicant::count();
        $payment = Payment::count();
        $assignapp = AssignApp::count();
        $proiv = ProIv::count();
        $cert = Cert::count();
        $cpd = Cpd::count();
       $addinfo = APCSSME_addinfo::count();
        return view('index.create', compact('announce', 'applicant', 'payment', 'assignapp', 'proiv', 'cert', 'cpd','addinfo'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $index = new Index;

        return redirect() -> route(('index.show'),$index->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $index = Index::all();
        return view('index.show', compact('index'));
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
