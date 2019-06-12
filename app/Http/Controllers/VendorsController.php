<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\Taluk;
use App\ModelType;
use App\ModelVarient;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();
        return view('pages.vendordash')->with('vendors', $vendors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taluks = Taluk::all();
        return view('pages.addvendor')->with('taluks', $taluks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data=$request->all();
        $lastid=Vendor::create($data)->id;
        if(count($request->modelvarient) > 0)
        {
        foreach($request->modelvarient as $vendor=>$v){
            $data2=array(
                'vendor_id'=>$lastid,
                'modelvarient'=>$request->modelvarient[$vendor],
                'acinfo'=>$request->acinfo[$vendor],
                'seats'=>$request->seats[$vendor],
                'totalnos'=>$request->totalnos[$vendor],
                'pushback'=>$request->pushback[$vendor]
            );
            ModelVarient::insert($data2);
        }
        }
        return redirect('/vendors');
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
