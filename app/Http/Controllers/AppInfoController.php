<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use App\AppInfo;
use App\apcsSectionA;
use App\User;
use Session;
use Mail;
use App\Mail\AppApprove;
use Auth;

class AppInfoController extends Controller
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

    public function email(Request $request, Mailer $mailer )
    {
        // Mail::to(Auth::user()->email)->send(new AppApprove($request));
        // $mailer->to($request->input('email'))->send(new \App\Mail\AppApprove($request));
        // return redirect()->back();

        Mail::send('emails.appapprove', [], function ($message)
        {

            $message->from('nafauser49@gmail.com', 'Jabatan Alam Sekitar');

            $message->to('syakirwahab5@gmail.com');

            $message->subject('Pre-Qualification Registration of Applicant Information');

        });
        Session::flash('success', 'The approval has been send to the applicant Email.');
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apcsSectionA = apcsSectionA::all();
        $user = user::all();
        return view('appinfo.create', compact('apcsSectionA', 'user'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appinfo = new AppInfo;

        return redirect() -> route(('appinfo.show'),$appinfo->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apcsSectionA = ApcsSectionA::all();
        return view('appinfo.create', compact('apcsSectionA'));
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
