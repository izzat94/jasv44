<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eiaSectionA;
use App\EiaApplicant;
use App\EiaAppa;
use App\EiaAppInfo;
use App\Country;
use Session;
use Image;
use Auth;

class eiaSectionAController extends Controller
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
        // $countries = Country::all();
        return view('eiaSectionA.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $this->validate($request, array(
            
            'title' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'state' => 'required',
            'country_id' => 'required',
            'mailaddress' => 'required',
            'mailpostcode' => 'required',
            'email' => 'required',
            'bumiputerastatus' => 'required',
            'phoneno' => 'required'));

        //store in database
        
        $eiaSectionA = new eiaSectionA;
        $eiaapplicant = new EiaApplicant;
        $eiaappa = new EiaAppa;
        $eiaappinfo = new EiaAppInfo;
        // $eiaSectionA->name = $request->name;
        $eiaSectionA->title = $request->title;
        $eiaSectionA->address = $request->address;
        $eiaSectionA->city = $request->city;
        $eiaSectionA->postcode = $request->postcode;
        $eiaSectionA->state = $request->state;
        $eiaSectionA->country_id = $request->country_id;
        $eiaSectionA->mailaddress = $request->mailaddress;
        $eiaSectionA->mailpostcode = $request->mailpostcode;
        $eiaSectionA->email = $request->email;
        $eiaSectionA->bumiputerastatus = $request->bumiputerastatus;
        $eiaSectionA->phoneno = $request->phoneno;
        $eiaSectionA->faxno = $request->faxno;
        $eiaSectionA->regNo = $request->regNo;
        $eiaSectionA->placeofissue = $request->placeofissue;
        $eiaSectionA->dateofissue = $request->dateofissue;
        $eiaSectionA->user_id = Auth::id();
        $eiaSectionA->applicant_id = $request->applicant_id;

        $eiaappa->title = $request->title;
        $eiaappa->address = $request->address;
        $eiaappa->city = $request->city;
        $eiaappa->postcode = $request->postcode;
        $eiaappa->state = $request->state;
        $eiaappa->country_id = $request->country_id;
        $eiaappa->mailaddress = $request->mailaddress;
        $eiaappa->mailpostcode = $request->mailpostcode;
        $eiaappa->email = $request->email;
        $eiaappa->bumiputerastatus = $request->bumiputerastatus;
        $eiaappa->phoneno = $request->phoneno;
        $eiaappa->faxno = $request->faxno;
        $eiaappa->regNo = $request->regNo;
        $eiaappa->placeofissue = $request->placeofissue;
        $eiaappa->dateofissue = $request->dateofissue;
        $eiaappa->user_id = Auth::id();
        $eiaapplicant->user_id = Auth::id();
        $eiaappinfo->user_id = Auth::id();
        $eiaappa->applicant_id = $request->applicant_id;

        //save image
        if ($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension(); //save image as .png @ etc
            $location = public_path('image/' . $filename); //path image to save
            Image::make($image)->resize(800, 400)->save($location);

            $eiaSectionA->image = $filename; //save file to which column
        }

        //save image
        if ($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension(); //save image as .png @ etc
            $location = public_path('image/' . $filename); //path image to save
            Image::make($image)->resize(800, 400)->save($location);

            $eiaappa->image = $filename; //save file to which column
        }

        $eiaSectionA->save();

        $eiaappa->save();

        $eiaapplicant->save();

        $eiaappinfo->save();

        Session::flash('success', 'The post sucessfull');

        //redirect to another page

        return redirect()->route('eiaSectionB.create', $eiaSectionA->id);   
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
