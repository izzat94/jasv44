<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\ExamTitle;
use App\Exam;
use App\Venue;
use Session;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function index()
    {
        $schedule = Schedule::all();
        $examtitles = ExamTitle::all();
        $exam = Exam::count();
        $venues = Venue::all();
        return view('schedule.show', compact('schedule', 'examtitles','exam', 'venues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedule.create');
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

            'typeofexam' => 'required',
            'examtitle_id' => 'required|integer',
            'date' => 'required',
            'start' => 'required',
            'end' => 'required',
            'venue_id' => 'required|integer',
            'address' => 'required',
            'state' => 'required',
            'seat' => 'required'

            ));

        //store in the database

        $schedule = new Schedule;

        $schedule->typeofexam = $request->typeofexam;
        $schedule->examtitle_id = $request->examtitle_id;
        $schedule->date = $request->date;
        $schedule->start = $request->start;
        $schedule->end = $request->end;
        $schedule->venue_id = $request->venue_id;
        $schedule->address = $request->address;
        $schedule->state = $request->state;
        $schedule->seat = $request->seat;

        $schedule -> save();

        Session::flash('success', 'The exam schedule has been added!');

        // $examtitles = new ExamTitle;
        // $examtitles->examtitle = $request->examtitles;

        // $schedule->save();

        return redirect() -> route(('schedule.show'),$schedule->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule = Schedule::all();
        $examtitles = ExamTitle::all();
        $exam = Exam::count();
        $venues = Venue::all();
        return view('schedule.show', compact('schedule', 'examtitles','exam', 'venues'));
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
        $schedule = Schedule::find($id);
        $examtitles = ExamTitle::all();
        $cats = array();
        foreach ($examtitles as $cat) {
            $cats[$cat->id] = $cat->examtitle;
        }
        $venues = Venue::all();
        $catvs = array();
        foreach ($venues as $catv) {
            $catvs[$catv->id] = $catv->venue;
        }
        //return the view and pass in the var we previously created
        return view('schedule.edit')->withschedule($schedule)->withexamtitles($cats)->withvenues($catvs);
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

            'typeofexam' => 'required',
            'examtitle_id' => 'required|integer',
            'date' => 'required',
            'start' => 'required',
            'end' => 'required',
            'venue_id' => 'required|integer',
            'address' => 'required',
            'state' => 'required',
            'seat' => 'required'

            ));

        //store in the database
        $schedule = Schedule::find($id);

        $schedule->typeofexam = $request->input('typeofexam');
        $schedule->examtitle_id = $request->input('examtitle_id');
        $schedule->date = $request->input('date');
        $schedule->start = $request->input('start');
        $schedule->end = $request->input('end');
        $schedule->venue_id = $request->input('venue_id');
        $schedule->address = $request->input('address');
        $schedule->state = $request->input('state');
        $schedule->seat = $request->input('seat');

        $schedule -> save();

        Session::flash('success', 'The exam schedule has been updated!');

        return redirect() -> route(('schedule.show'),$schedule->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::find($id);

        $schedule->delete();

        Session::flash('success', 'The exam schedule has been deleted!');
        return redirect()->route('schedule.index');
    }
}
