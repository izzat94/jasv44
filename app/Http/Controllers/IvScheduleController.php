<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IvSchedule;
use App\Venue;
use Session;

class IvScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ivschedule = IvSchedule::all();
        $venues = Venue::all();
        return view('ivschedule.show', compact('ivschedule', 'venues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ivschedule.create');
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
            'venue_id' => 'required|integer',
            'address' => 'required',
            'state' => 'required'

            ));

        //store in the database
        $ivschedule = new IvSchedule;

        $ivschedule->title = $request->title;
        $ivschedule->date = $request->date;
        $ivschedule->time = $request->time;
        $ivschedule->venue_id = $request->venue_id;
        $ivschedule->address = $request->address;
        $ivschedule->state = $request->state;

        $ivschedule -> save();

        Session::flash('success', 'The interview schedule has been added!');

        return redirect() -> route(('ivschedule.show'),$ivschedule->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ivschedule = IvSchedule::all();
        $venues = Venue::all();
        return view('ivschedule.show', compact('ivschedule', 'venues'));
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
        $ivschedule = IvSchedule::find($id);
        $venues = Venue::all();
        $catvs = array();
        foreach ($venues as $catv) {
            $catvs[$catv->id] = $catv->venue;
        }
        //return the view and pass in the var we previously created
        return view('ivschedule.edit')->withivschedule($ivschedule)->withvenues($catvs);
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
        // Validate the data 

         $this->validate($request, array(

            'title' => 'required',
            'date' => 'required',
            'time' => 'required',
            'venue_id' => 'required|integer',
            'address' => 'required',
            'state' => 'required'

            ));

        // Save the data to the database

         $ivschedule = IvSchedule::find($id);

         $ivschedule->title = $request->input('title');
         $ivschedule->date = $request->input('date');
         $ivschedule->time = $request->input('time');
         $ivschedule->venue_id = $request->input('venue_id');
         $ivschedule->address = $request->input('address');
         $ivschedule->state = $request->input('state');

         $ivschedule -> save();

        // Set flash data with success message

         Session::flash('success', 'The interview schedule has been updated!');

        // Redirect with flash data to show form

         return redirect() -> route(('ivschedule.show'),$ivschedule->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ivschedule = IvSchedule::find($id);

        $ivschedule->delete();

        Session::flash('success', 'The interview schedule has been deleted!');
        return redirect()->route('ivschedule.index');
    }
}
