<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EiaSchedule;
use App\ExamCandidate;
//use App\EiaExamTitle;
use App\EiaVenue;
use Session;

class ExamsScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eiaschedule = EiaSchedule::all();
        //$eiaexamtitles = EiaExamTitle::all();
        $eiavenues = EiaVenue::all();
        $examuser=ExamCandidate::count();
        return view('examschedules.index', compact('eiaschedule', 'eiaexamtitles', 'eiavenues', 'examuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if (ExamCandidate::where('user_id', '=', Auth::id())->exists()) {
        return response('You have already make the confirmation', 422);
    }
    
    else{
        $examuser=ExamCandidate::count();
        $ietsuserexam=new ExamCandidate;
        $eiaschedule = EiaSchedule::all();
        $ietsuserexam->user_id = Auth::id();
        $ietsuserexam->schedule_id = $eiaschedule->last()->id;
        $ietsuserexam->seat_available=$eiaschedule->last()->seat - $examuser;
        $ietsuserexam->save();
        $ietsuserexam=ExamCandidate::where(
    ['schedule_id', '=', $eiaschedule->last()->id],
    ['user_id', '=', Auth::id()]);
            
return response('You have already make the confirmation', 422);
        return view('examschedules.index',['eiaschedule' => $eiaschedule,'ietsuserexam'=>$ietsuserexam],compact('examuser','ietsuserexam'));
    }


        /*$result = 0;

        $test = EiaSchedule::create([
            'user_id' => Auth::id(),
            'result'  => $result,
        ]);

        foreach ($request->input('questions', []) as $key => $question) {
            //$status = 0;

            if ($request->input('answers.'.$question) != null
                && QuestionsOption::find($request->input('answers.'.$question))->correct
            ) {

                $status = 1;
                //$result++;
            }
            ExamCandidate::create([
                'user_id'     => Auth::id(),
                'eiaschedule_id'     => $eiaschedule->id,
                'seat_left' => $eiaschedule->seat - $status,
                
            ]);
           
        }


        return redirect()->route('examschedules.show', [$test->id]);*/
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
