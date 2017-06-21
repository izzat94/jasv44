<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IetsAppa;
use App\IetsAppb;
use App\IetsAppc;
use App\IetsAppd;
use App\IetsAppe;
use App\User;
use Auth;
use DB;

class IetsAppController extends Controller
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
        $ietsappa = IetsAppa::all();
        $ietsappb = IetsAppb::all();
        $ietsappc = IetsAppc::all();
        $ietsappd = IetsAppd::all();
        $ietsappe = IetsAppe::all();
        $user = User::all();
        return view('ietsapp.create', compact('ietsappa', 'ietsappb','ietsappc','ietsappd','ietsappe', 'user'));
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
        $ietsapp= new IetsApp;

        return redirect() -> route(('ietsapp.show'),$ietsapp->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ietsappa = IetsAppa::all();
        $ietsappb = IetsAppb::all();
        $ietsappc = IetsAppc::all();
        $ietsappd = IetsAppd::all();
        $ietsappe = IetsAppe::all();
        $user = User::all();
        return view('ietsapp.show', compact('ietsappa', 'ietsappb','ietsappc','ietsappd','ietsappe', 'user'));
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
