<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apcsSectionF;
use App\ApcsAppf;
use App\mainReg;
use App\Payment;
use App\PayInfo;
use Session;
use Auth;
use Mail;

class apcsSectionFController extends Controller
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
        return view('apcsSectionF.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apcsappf = new ApcsAppf;
         $apcsSectionF = new apcsSectionF;
         $payment = new Payment;
         $payinfo = new PayInfo;
        $apcsSectionF->confession = $request->confession;
        // $apcsSectionF->declaration = $request->declaration;
        $apcsSectionF->user_id = Auth::id();
        $apcsSectionF->applicant_id = $request->applicant_id;
        // $apcsSectionF->name = $request->name;
        $apcsappf->user_id = Auth::id();
        $payment->user_id = Auth::id();
        $payinfo->user_id = Auth::id();

        $apcsappf->confession = $request->confession;
        $apcsappf->applicant_id = $request->applicant_id;
        // $apcsappf->name = $request->name;
        
		Mail::send('emails.request', ['apcsappf' => $apcsappf], function ($m) use ($apcsappf) {
           // $m->from($users->email, 'Your Application');
			
            $m->to('nazifasmohdhussein@gmail.com')->subject('New Registration');
			$m->to('noorhazirahassan@gmail.com')->subject('New Registration');
        });	
        $apcsSectionF->save();
        $apcsappf->save();
        $payment->save();
        $payinfo->save();


        //  $mainReg = new mainReg;
        //  $mainReg->status_id = $request->status_id;

        // $mainReg->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page
         return redirect("/homepage/create");
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
