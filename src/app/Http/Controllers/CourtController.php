<?php

namespace App\Http\Controllers;

use App\Court;
use Illuminate\Http\Request;

class CourtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Courts=Court::all();
        return view('diary.court.index',compact('Courts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diary.court.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $court=Court::create(['name'=>$request->c_name,
                                'location'=>$request->c_location,
                                'city'=>$request->c_city,
                            ]);
        return redirect()->route('court.index',['id'=>$court->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function show(Court $court,Request $request)
    {
        $court=Court::find($request->id);
        return view('diary.court.show',compact('court'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function edit(Court $court,$id)
    {
        $court=Court::find($id);
        return view('diary.court.edit',compact('court'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Court $court)
    {
        $court=Court::where('id',$request->id)->update([
                        'name'=>$request->c_name,
                        'location'=>$request->c_location,
                        'city'=>$request->c_city,
                        ]);
        $id=$request->id;
        return redirect()->route('court.index',['id'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function destroy(Court $court,$id)
    {
        $court=Court::find($id);
        $court->delete();
        return redirect()->route('court.index');
    }
}
