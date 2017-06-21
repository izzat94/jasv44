<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PayInfo;
use App\User;
use Mail;
use App\Mail\Approve;
use Session;
use Auth;

class PayInfoController extends Controller
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
        $payinfo = PayInfo::all();
        return view('payinfo.create', compact('payinfo', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::all();
        $payinfo = PayInfo::all();
        return view('payinfo.show', compact('payinfo', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function approve(Request $request)
    {
    // Laravel validation
    
        $user = $this->create($request->all());
        // After creating the user send an email with the random token generated in the create method above
        $email = new Approve(new User());
        Mail::to($user->email)->send($email);
        
        Session::flash('message', 'We have sent you a verification email.Please check your email and verify it.');
        return redirect('ietspayment/show');
    
}

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
