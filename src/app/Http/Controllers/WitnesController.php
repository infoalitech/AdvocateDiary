<?php

namespace App\Http\Controllers;

use App\Kase;
use App\Witnes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WitnesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $witnesses=Witnes::all();
        return view('diary.witnes.index',compact('witnesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $kases=Kase::where('lawyer_id',$user->lawyer->id)->get();
        return view('diary.witnes.create', compact('kases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $witnes=Witnes::create(['name'=>$request->w_name,
                                'kase_id'=>$request->kase_id,
                                'phone'=>$request->w_phone,
                                'cell'=>$request->w_cell,
                                  ]);
 
        return redirect()->route('witnes.index',['id'=>$witnes->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Witnes  $witnes
     * @return \Illuminate\Http\Response
     */
    public function show(Witnes $witnes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Witnes  $witnes
     * @return \Illuminate\Http\Response
     */
    public function edit(Witnes $witnes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Witnes  $witnes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Witnes $witnes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Witnes  $witnes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Witnes $witnes)
    {
        //
    }
}
