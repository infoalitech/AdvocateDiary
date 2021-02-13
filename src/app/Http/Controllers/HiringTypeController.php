<?php

namespace App\Http\Controllers;

use App\Hiring_type;
use Illuminate\Http\Request;

class HiringTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Hiringtypes=Hiring_type::all();
        return view('diary.Hiring_type.index',compact('Hiringtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diary.hiring_type.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $hiring=Hiring_type::create(['name'=>$request->h_name,
                                  ]);
 
        return redirect()->route('hiringtype.index',['id'=>$hiring->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hiring_type  $hiring_type
     * @return \Illuminate\Http\Response
     */
    public function show(Hiring_type $hiring_type,Request $request)
    {
         $hiring=Hiring_type::find($request->id);
        return view('diary.hiring_type.show',compact('hiring'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hiring_type  $hiring_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Hiring_type $hiring_type,$id)
    {
        $hiring=Hiring_type::find($id);
        return view('diary.hiring_type.edit',compact('hiring'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hiring_type  $hiring_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hiring_type $hiring_type)
    {
        $hiring=Hiring_type::where('id',$request->id)->update([
                        'name'=>$request->h_name,
                         ]); 
        $id=$request->id;
        return redirect()->route('hiringtype.index',['id'=> $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hiring_type  $hiring_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hiring_type $hiring_type,$id)
    {
        $hiring_type=Hiring_type::find($id);
        $hiring_type->delete();
        return redirect()->route('hiringtype.index');
    }
}
