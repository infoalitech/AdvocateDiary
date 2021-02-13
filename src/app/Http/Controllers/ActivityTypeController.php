<?php

namespace App\Http\Controllers;

use App\Activity_type;
use Illuminate\Http\Request;

class ActivityTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities=Activity_type::all();
        return view('diary.activity_type.index',compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diary.activity_type.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activity=Activity_type::create(['name'=>$request->a_name,
                                  ]);
 
        return redirect()->route('activitytype.index',['id'=>$activity->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity_type  $activity_type
     * @return \Illuminate\Http\Response
     */
    public function show(Activity_type $activity_type,Request $request)
    {
        $activity=Activity_type::find($request->id);
        return view('diary.activity_type.show',compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity_type  $activity_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity_type $activity_type, $id)
    {
        $activity=Activity_type::find($id);
        return view('diary.activity_type.edit',compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity_type  $activity_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity_type $activity_type)
    {
        $activity=Activity_type::where('id',$request->id)->update([
                        'name'=>$request->a_name,
                         ]); 
        $id=$request->id;
        return redirect()->route('activitytype.index',['id'=> $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity_type  $activity_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity_type $activity_type,$id)
    {
        $activity_type=Activity_type::find($id);
        $activity_type->delete();
        return redirect()->route('activitytype.index');
    }
}
