<?php

namespace App\Http\Controllers;

use App\iets_question;
use Illuminate\Http\Request;

class IETSQuestController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\iets_question  $iets_question
     * @return \Illuminate\Http\Response
     */
    public function show(iets_question $iets_question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\iets_question  $iets_question
     * @return \Illuminate\Http\Response
     */
    public function edit(iets_question $iets_question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\iets_question  $iets_question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, iets_question $iets_question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\iets_question  $iets_question
     * @return \Illuminate\Http\Response
     */
    public function destroy(iets_question $iets_question)
    {
        //
    }
	public function iets_examquestion(){
		$iets_question = iets_question::inRandomOrder()->paginate(2);
			 
		 //$iets_question = iets_question::inRandomOrder()->get();
		 //$iets_question = iets_question::paginate(2);

		
		return view('iets.iets_examquestion',['iets_question' => $iets_question]);
	}
}
