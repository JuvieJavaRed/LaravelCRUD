<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;

class EnquirysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquirys = Enquiry::all();
        return view('pages.openbookdashboard')->with('enquirys',$enquirys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addenquiry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enquiry = new Enquiry();
        $enquiry->enqid = $request->input('enqid');
        $enquiry->enqdate = $request->input('enqdate');
        $enquiry->startdate = $request->input('startdate');
        $enquiry->starttime = $request->input('starttime');
        $enquiry->enddate = $request->input('enddate');
        $enquiry->cxname = $request->input('cxname');
        $enquiry->cxnumber = $request->input('cxnumber');
        $enquiry->whatsappnum = $request->input('whatsappnum');
        $enquiry->endtime = $request->input('endtime');
        $enquiry->noofpax = $request->input('noofpax');
        $enquiry->location1 = $request->input('location1');
        $enquiry->location2 = $request->input('location2');
        $enquiry->location3 = $request->input('location3');
        $enquiry->vehiclepref = $request->input('vehiclepref');
        $enquiry->duration = $request->input('duration');
        $enquiry->totalkm = $request->input('totalkm');
        $enquiry->notes = $request->input('notes');
        $enquiry->startarea = $request->input('startarea');
        $enquiry->endarea = $request->input('endarea');
        $enquiry->startcity = $request->input('startcity');
        $enquiry->endcity = $request->input('endcity');
        $enquiry->save();
        return redirect ('/enquirys');
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
