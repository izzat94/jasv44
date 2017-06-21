<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EiaPayment;
use App\User;
use Session;

class EiaPaymentController extends Controller
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
        $eiapayment = EiaPayment::all();
        return view('eiapayment.create', compact('eiapayment', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eiapayment = new EiaPayment;
        $eiapayment->by = $request->by;
        $eiapayment->status = $request->status;

        $eiapayment -> save();

        Session::flash('success', 'The payment information has been added!');

        return redirect() -> route(('eiapayment.show'),$eiapayment->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eiapayment = EiaPayment::all();
        $user = User::all();
        return view('eiapayment.show', compact('eiapayment','user'));
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
