<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApcsAppa;
use App\ApcsAppb;
use App\ApcsAppc;
use App\ApcsAppd;
use App\ApcsAppe;
use App\ApcsAppf;
use App\User;
use Auth;
use DB;


class ApcsAppController extends Controller
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
        $apcsappa = ApcsAppa::all();
        $apcsappb = ApcsAppb::all();
        $apcsappc = ApcsAppc::all();
        $apcsappd = ApcsAppd::all();
        $apcsappe = ApcsAppe::all();
        $apcsappf = ApcsAppf::all();
        $user = User::all();
        return view('apcsapp.create', compact('apcsappa', 'apcsappb','apcsappc','apcsappd','apcsappe','apcsappf', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //store in the database
        $apcsapp= new ApcsApp;

        return redirect() -> route(('apcsapp.show'),$apcsapp->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
       $apcsappa = ApcsAppa::all();
        $apcsappb = ApcsAppb::all();
        $apcsappc = ApcsAppc::all();
        $apcsappd = ApcsAppd::all();
        $apcsappe = ApcsAppe::all();
        $apcsappf = ApcsAppf::all();
        $user = User::all();
        return view('apcsapp.show', compact('apcsappa', 'apcsappb','apcsappc','apcsappd','apcsappe','apcsappf', 'user'));
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
