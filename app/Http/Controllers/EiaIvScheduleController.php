<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EiaIvSchedule;
use App\EiaVenue;
use Session;

class EiaIvScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eiaivschedule = EiaIvSchedule::all();
        $eiavenues = EiaVenue::all();
        return view('eiaivschedule.show', compact('eiaivschedule', 'eiavenues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eiaivschedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(

            'title' => 'required',
            'date' => 'required',
            'time' => 'required',
            'eiavenue_id' => 'required|integer',
            'address' => 'required',
            'state' => 'required'

            ));

        //store in the database
        $eiaivschedule = new EiaIvSchedule;

        $eiaivschedule->title = $request->title;
        $eiaivschedule->date = $request->date;
        $eiaivschedule->time = $request->time;
        $eiaivschedule->eiavenue_id = $request->eiavenue_id;
        $eiaivschedule->address = $request->address;
        $eiaivschedule->state = $request->state;

        $eiaivschedule -> save();

        Session::flash('success', 'The interview schedule has been added!');

        return redirect() -> route(('eiaivschedule.show'),$eiaivschedule->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eiaivschedule = EiaIvSchedule::all();
        $eiavenues = EiaVenue::all();
        return view('eiaivschedule.show', compact('eiaivschedule', 'eiavenues'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database and save as a var
        $eiaivschedule = EiaIvSchedule::find($id);
        $eiavenues = EiaVenue::all();
        $catvs = array();
        foreach ($eiavenues as $catv) {
            $catvs[$catv->id] = $catv->eiavenue;
        }
        //return the view and pass in the var we previously created
        return view('eiaivschedule.edit')->witheiaivschedule($eiaivschedule)->witheiavenues($catvs);
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
        $this->validate($request, array(

            'title' => 'required',
            'date' => 'required',
            'time' => 'required',
            'eiavenue_id' => 'required|integer',
            'address' => 'required',
            'state' => 'required'

            ));

        //store in the database
        $eiaivschedule = EiaIvSchedule::find($id);

        $eiaivschedule->title = $request->title;
        $eiaivschedule->date = $request->date;
        $eiaivschedule->time = $request->time;
        $eiaivschedule->eiavenue_id = $request->eiavenue_id;
        $eiaivschedule->address = $request->address;
        $eiaivschedule->state = $request->state;

        $eiaivschedule -> save();

        Session::flash('success', 'The interview schedule has been updated!');

        return redirect() -> route(('eiaivschedule.show'),$eiaivschedule->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eiaivschedule = EiaIvSchedule::find($id);

        $eiaivschedule->delete();

        Session::flash('success', 'The interview schedule has been deleted!');
        return redirect()->route('eiaivschedule.index');
    }
}
