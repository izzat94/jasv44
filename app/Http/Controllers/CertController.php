<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cert;
use Session;

class CertController extends Controller
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
        return view('cert.create');
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

        $cert = new Cert;

        $cert->name = $request->name;
        $cert->nric = $request->nric;
        $cert->title = $request->title;
        $cert->specialized = $request->specialized;
        $cert->endorse = $request->endorse;
        $cert->cert = $request->cert;
        $cert->remark = $request->remark;
        $cert->by = $request->by;

        $cert -> save();

        Session::flash('success', 'The certificate endorsement was successfully saved!');

        return redirect() -> route(('cert.show'),$cert->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cert = Cert::all();
        return view('cert.show', compact('cert'));
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
