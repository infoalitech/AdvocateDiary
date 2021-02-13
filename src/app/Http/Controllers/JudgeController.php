<?php

namespace App\Http\Controllers;

use App\Judge;
use Illuminate\Http\Request;

class JudgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $judges=Judge::all();
        return view('diary.judge.index',compact('judges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('diary.judge.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $judge=Judge::create(['name'=>$request->j_name,
                                  ]);
 
        return redirect()->route('judge.index',['id'=>$judge->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Judge  $judge
     * @return \Illuminate\Http\Response
     */
    public function show(Judge $judge,Request $request)
    {
        $judge=Judge::find($request->id);
        return view('diary.judge.show',compact('judge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Judge  $judge
     * @return \Illuminate\Http\Response
     */
    public function edit(Judge $judge,$id)
    {
        $judge=Judge::find($id);
        return view('diary.judge.edit',compact('judge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Judge  $judge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Judge $judge)
    {
        $judge=Judge::where('id',$request->id)->update([
                        'name'=>$request->j_name,
                         ]); 
        $id=$request->id;
        return redirect()->route('judge.index',['id'=> $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Judge  $judge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Judge $judge,$id)
    {
        $judge=Judge::find($id);
        $judge->delete();
        return redirect()->route('judge.index');
    }
}
