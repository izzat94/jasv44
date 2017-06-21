<?php

namespace App\Http\Controllers;

use App\apcs_examschedule;
use App\iets_examschedule;
use App\UserExamDetails;
use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class APCS_ExamScheduleController extends Controller
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
    { //iets_examschedule
        //
		/*$schedule = new iets_examschedule;
		$schedule->exam_date = Input::get('exam_date');
    $schedule->exam_time = Input::get('exam_time');
 	$schedule->exam_venue = Input::get('exam_venue');
    $schedule->exam_seatavailable = Input::get('exam_seatavailable');
    $schedule->save();
dd( Input::all() );
    return Redirect::back();*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
   // $iets_examschedule = iets_examschedule::content();

   // return view('iets_examschedule', array('iets_examschedule' => $iets_examschedule, 'exam_date' => 'exam_time', 'exam_venue' => '', 'page' => 'home'));
    //$iets_examschedules = new iets_examschedule;
	//$iets_examschedules->exam_seatavailable= Input::get("exam_seatavailable");
	//$iets_examschedules->save();
					//$iets_examschedule = IETS_ExamSchedule::findOfFail(id)
					//$iets_examschedule = new iets_examschedule;
					//$iets_examschedule->exam_date = iets_examschedule::exam_date();
					//$iets_examschedule->exam_time = iets_examschedule::exam_time();
				    //$iets_examschedule->exam_venue = iets_examschedule::exam_venue();
					 //$iets_examschedule->exam_seatavailable = iets_examschedule::exam_seatavailable();
				   // $iets_examschedule->save();
					$iets_examschedule = IETS_ExamSchedule::all()->last()->exam_seatavailable-1;
				$iets_examschedule->save();
	
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\iets_examschedule  $iets_examschedule
     * @return \Illuminate\Http\Response
     */
    public function show(apcs_examschedule $apcs_examschedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\iets_examschedule  $iets_examschedule
     * @return \Illuminate\Http\Response
     */
    public function edit(apcs_examschedule $apcs_examschedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\iets_examschedule  $iets_examschedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, apcs_examschedule $apcs_examschedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\iets_examschedule  $iets_examschedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(apcs_examschedule $apcs_examschedule)
    {
        //
    }
	public function apcs_exam(){
		/*$examuser=UserExamDetails::count();
		 $iets_examschedule = iets_examschedule::all();
		if(($iets_examschedule->last()->exam_seatavailable - $examuser) ==1){
		 $ietsuserexam=UserExamDetails::where(
    ['schedule_id', '=', $iets_examschedule->last()->id],
    ['user_id', '=', Auth::id()]);
		}
		else{
			//$nextUserID = iets_examschedule::where('id', '>', $currentUser->id)->min('id');
			return response("hai");
		}*/
		
	 $iets_examschedule = Schedule::take(1)->get();;
	// $ietsuserexam=new UserExamDetails;
	//$examuser=UserExamDetails::count();
		 //$iets_examschedule = iets_examschedule::all();
		/*if (UserExamDetails::where('user_id', '=', Auth::id())->exists()){
			if(UserExamDetails::where('schedule_id', '=',$iets_examschedule->last()->id )){
		 return view('iets.iets_examconfirm',['iets_examschedule' => $iets_examschedule,'ietsuserexam'=>$ietsuserexam],compact('examuser','ietsuserexam'));
			}
		}
		else{
			
				if(($iets_examschedule->last()->exam_seatavailable - $examuser) ==0){
					$iets_examschedule->next()->next();
					$ietsuserexam=UserExamDetails::where(
					['schedule_id', '=', $iets_examschedule->last()->id],
					['user_id', '=', Auth::id()]);
		} 
			//$nextUserID = iets_examschedule::where('id', '>', $currentUser->id)->min('id');
			
		}*/
		
	//$examuser=UserExamDetails::count();
	
	/*$count=App\iets_examschedule::where(['exam_seatavailable'=>0])->count();*/
		
		//return view('iets.iets_exam',['iets_examschedule' => $iets_examschedule,'ietsuserexam'=>$ietsuserexam],compact('examuser','ietsuserexam'));
	return view('apcs.apcs_exam',['iets_examschedule' => $iets_examschedule]);
	
	
	}
	public function confirm(){
		
	
	if (UserExamDetails::where('user_id', '=', Auth::id())->exists()) {
		return response('You have already make the confirmation', 422);
	}
	
	else{
		$examuser=UserExamDetails::count();
	//	$ietsuserexam=new UserExamDetails;
		$iets_examschedule = Schedule::all();
		//$ietsuserexam->user_id = Auth::id();
		//$ietsuserexam->schedule_id = $iets_examschedule->last()->id;
		//$ietsuserexam->seat_available=$iets_examschedule->last()->seat - $examuser;
		//$ietsuserexam->save();
		//$ietsuserexam=UserExamDetails::where(
   // ['schedule_id', '=', $iets_examschedule->last()->id],
   // ['user_id', '=', Auth::id()]);
			
return response('You have already make the confirmation', 422);
		//return view('iets.iets_exam',['iets_examschedule' => $iets_examschedule,'ietsuserexam'=>$ietsuserexam],compact('examuser','ietsuserexam'));
	return view('apcs.apcs_exam',['iets_examschedule' => $iets_examschedule]);
	
	}
	}
	
	
}
