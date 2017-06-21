<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EiaAppa;
use App\EiaAppb;
use App\EiaAppc;
use App\EiaAppd;
use App\EiaAppe;
use App\EiaAppf;
use App\User;
use Auth;
use DB;

class EiaAppController extends Controller
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
        $eiaappa = EiaAppa::all();
        $eiaappb = EiaAppb::all();
        $eiaappc = EiaAppc::all();
        $eiaappd = EiaAppd::all();
        $eiaappe = EiaAppe::all();
        $eiaappf = EiaAppf::all();
        $user = User::all();
        return view('eiaapp.create', compact('eiaappa', 'eiaappb','eiaappc','eiaappd','eiaappe','eiaappf', 'user'));
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
        $eiaapp= new EiaApp;

        return redirect() -> route(('eiaapp.show'),$eiaapp->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $eiaappa = EiaAppa::all();
        $eiaappb = EiaAppb::all();
        $eiaappc = EiaAppc::all();
        $eiaappd = EiaAppd::all();
        $eiaappe = EiaAppe::all();
        $eiaappf = EiaAppf::all();
        $user = User::all();
        return view('eiaapp.show', compact('eiaappa', 'eiaappb','eiaappc','eiaappd','eiaappe','eiaappf', 'user'));
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
