<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IetsPayment;
use App\User;
use Session;

class IetsPaymentController extends Controller
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
        $user = User::all();
        $ietspayment = IetsPayment::all();
        return view('ietspayment.create', compact('ietspayment', 'user'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ietspayment = new IetsPayment;
        $ietspayment->by = $request->by;
        $ietspayment->status = $request->status;

        $ietspayment -> save();

        Session::flash('success', 'The payment information has been added!');

        return redirect() -> route(('ietspayment.show'),$ietspayment->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ietspayment = IetsPayment::all();
        $user = User::all();
        return view('ietspayment.show', compact('ietspayment','user'));
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
