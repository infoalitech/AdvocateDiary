<?php

namespace App\Http\Controllers;

use App\Case_hiring;
use App\Court;
use App\Hiring_type;
use App\Judge;
use App\Kase;
use Illuminate\Http\Request;

class CaseHiringController extends Controller
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
    public function create($id)
    {
        //
        $case=Kase::find($id);
        $courts=Court::all();
        $hirings=Hiring_type::all();
        $judges=Judge::all();
        // dd($id);
        return view('diary.hiring.create',compact('case','courts','hirings','judges'));
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
        $hiring=new Case_hiring;
        $hiring->kase_id=$request->case;
        $hiring->court_id=$request->court;
        $hiring->judge_id=$request->judge;
        $hiring->hiring_type=$request->hiring_type;
        $hiring->date=$request->date;
        $hiring->time=$request->time;
        $hiring->narration=$request->narration;
        $hiring->save();
        return redirect()->route('kase.show',['id'=>$request->case]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Case_hiring  $case_hiring
     * @return \Illuminate\Http\Response
     */
    public function show(Case_hiring $case_hiring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Case_hiring  $case_hiring
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $hiring=Case_hiring::find($id);
        $case=Kase::find($hiring->case_id);
        $courts=Court::all();
        $hirings=Hiring_type::all();
        $judges=Judge::all();

        return view('diary.hiring.edit',compact('hiring','case','courts','hirings','judges'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Case_hiring  $case_hiring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Case_hiring $case_hiring)
    {
        //
        $hiring=Case_hiring::find($request->id);
        $hiring->court_id=$request->court;
        $hiring->judge_id=$request->judge;
        $hiring->hiring_type=$request->hiring_type;
        $hiring->date=$request->date;
        $hiring->time=$request->time;
        $hiring->narration=$request->narration;
        $hiring->save();
        return redirect()->route('kase.show',['id',$request->case]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Case_hiring  $case_hiring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Case_hiring $case_hiring)
    {
        //
    }
}
