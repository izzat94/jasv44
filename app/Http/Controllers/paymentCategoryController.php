<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paymentCategory;
use App\PayInfo;
use App\Payment;
use App\EiaPayInfo;
use App\EiaPayment;
use App\IetsPayInfo;
use App\IetsPayment;
use Validator;
use Response;
use Redirect;
use Session;
use App\Uploads;
use DB;
use Auth;
use Mail;

class paymentCategoryController extends Controller
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
        return view('paymentCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array('type' => 'required', 'paymentType' => 'required', 'amount' => 'required',
            'date' => 'required', 'referenceNo' => 'required'));

        $paymentCategory = new paymentCategory;
        $payinfo = new PayInfo;
        $eiapayinfo = new EiaPayInfo;
        $ietspayinfo = new IetsPayInfo;
        $payment = new Payment;
        $eiapayment = new EiaPayment;
        $ietspayment = new IetsPayment;


        $paymentCategory->type = $request->type;
        $paymentCategory->paymentType = $request->paymentType;
        $paymentCategory->amount = $request->amount;
        $paymentCategory->date = $request->date;
        $paymentCategory->referenceNo = $request->referenceNo;
        $paymentCategory->user_id = Auth::id();
        $paymentCategory->applicant_id = $request->applicant_id;

        $payment->type = $request->type;
        $payment->paymentType = $request->paymentType;
        $payinfo->amount = $request->amount;
        $payinfo->date = $request->date;
        $payinfo->referenceNo = $request->referenceNo;
        $payinfo->user_id = Auth::id();
        $payinfo->applicant_id = $request->applicant_id;

        $eiapayment->type = $request->type;
        $eiapayment->paymentType = $request->paymentType;
        $eiapayinfo->amount = $request->amount;
        $eiapayinfo->date = $request->date;
        $eiapayinfo->referenceNo = $request->referenceNo;
        $eiapayinfo->user_id = Auth::id();
        $eiapayinfo->applicant_id = $request->applicant_id;

        $ietspayment->type = $request->type;
        $ietspayment->paymentType = $request->paymentType;
        $ietspayinfo->amount = $request->amount;
        $ietspayinfo->date = $request->date;
        $ietspayinfo->referenceNo = $request->referenceNo;
        $ietspayinfo->user_id = Auth::id();
        $ietspayinfo->applicant_id = $request->applicant_id;

        //save file
        if ($request->hasFile('receipt')){
            $file = $request->file('receipt');
            $filename = time() . '.' . $file->getClientOriginalExtension(); //save image as .png @ etc
            $request->file('receipt')->move(base_path() . '/backend/uploads/',$filename); //path file to save

            $paymentCategory->slip = $filename; //save file to which column
            $payinfo->slip = $filename;
            $eiapayinfo->slip = $filename;
            $ietspayinfo->slip = $filename;
        }

        Mail::send('emails.request', ['payment' => $payment], function ($m) use ($payment) {
           // $m->from($users->email, 'Your Application');
            
            $m->to('nazifasmohdhussein@gmail.com')->subject('New Registration');
            $m->to('noorhazirahassan@gmail.com')->subject('New Registration');
        }); 

        $paymentCategory->save();
        $payinfo->save();
        $eiapayinfo->save();
        $ietspayinfo->save();
        $payment->save();
        $eiapayment->save();
        $ietspayment->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page

        // return redirect()->route('paymentCategory.create', $paymentCategory->id);
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

    // public function storeCheck(Request $request)
    // {
    //     $this->validate($request, array('type' => 'required', 'amount' => 'required',
    //         'date' => 'required', 'referenceNo' => 'required'));

    //     $paymentCategory = new PaymentCategory;
    //     $paymentCategory->type = $request->type;
    //     $paymentCategory->cash = $request->amount;
    //     $paymentCategory->date = $request->date;
    //     $paymentCategory->referenceNo = $request->referenceNo;

    //     //save file
    //     if ($request->hasFile('receipt')){
    //         $file = $request->file('receipt');
    //         $filename = time() . '.' . $file->getClientOriginalExtension(); //save image as .png @ etc
    //         $request->file('receipt')->move(base_path() . '/backend/uploads/',$filename); //path file to save

    //         $paymentCategory->slip = $filename; //save file to which column
    //     }

    //     $paymentCategory->save();

    //     Session::flash('success', 'The post sucessfull');

    //     //redirect to another page

    //     return redirect()->route('paymentCategory.create', $paymentCategory->id);
    // }
}
