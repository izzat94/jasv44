<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EiaCert;
use Session;

class EiaCertController extends Controller
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
        return view('eiacert.create');
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

            'remark' => 'required|max:255',
            'endorse' => 'required',
            'cert' => 'required'

            ));

        $eiacert = new EiaCert;

        $eiacert->name = $request->name;
        $eiacert->nric = $request->nric;
        $eiacert->title = $request->title;
        $eiacert->specialized = $request->specialized;
        $eiacert->endorse = $request->endorse;
        $eiacert->cert = $request->cert;
        $eiacert->remark = $request->remark;
        $eiacert->by = $request->by;

        $eiacert -> save();

        Session::flash('success', 'The certificate endorsement was successfully saved!');

        return redirect() -> route(('eiacert.show'),$eiacert->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eiacert = EiaCert::all();
        return view('eiacert.show', compact('eiacert'));
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
