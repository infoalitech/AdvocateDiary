<?php

namespace App\Http\Controllers;

use App\Kase;
use Illuminate\Http\Request;
use App\Case_categorie;
use App\Client;
use Illuminate\Support\Facades\Auth;


class KaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $kases=Kase::where('lawyer_id',$user->lawyer->id)->get();
        return view('diary.kase.index',compact('kases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $categories=Case_categorie::all();
            $clients=Client::all();
            return view('diary.kase.create', compact('categories','clients'));
        
    }
    public function create_result($id)
    {
            $case=Kase::find($id);
            return view('diary.kase.create_result', compact('case'));
    }
    public function store_result(Request $request)
    {
            $case=Kase::find($request->id);
            $case->result=$request->result;
            $case->save();

            return redirect()->route('kase.show',['id'=>$case->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        // dd($request);
        $kase=Kase::create(['category_id'=>$request->Category_id,
                            'client_id'=>$request->client_id,
                            'lawyer_id'=>$user->lawyer->id,
                            'total'=>$request->amount,
                            'title'=>$request->title,
                            'received'=>0,
                                  ]);
 
        return redirect()->route('kase.index',['id'=>$kase->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kase  $kase
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $case=Kase::find($id);
        return view('diary.Kase.show',compact('case'));

    }
    public function close($id)
    {
        //
        $case=Kase::find($id);
        $case->status='C';
        $case->save();

        return redirect()->route('kase.show',['id'=>$case->id]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kase  $kase
     * @return \Illuminate\Http\Response
     */
    public function edit(Kase $kase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kase  $kase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kase $kase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kase  $kase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kase $kase)
    {
        //
    }
}
