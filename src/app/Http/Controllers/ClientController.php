<?php

namespace App\Http\Controllers;

use App\Client;
use App\lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $clients=Client::where('lawyer_id',$user->lawyer->id)->get();
        return view('diary.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diary.client.create');
        
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

        $client=Client::create([
            'name'=>$request->c_name,
            'phone'=>$request->phone,
            'cell'=>$request->cell,
            'address'=>$request->address,
            'lawyer_id'=>$user->lawyer->id,
            ]);
        // dd($lawyer);

        return redirect()->route('client.show',['id'=> $client->id]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client, Request $request)
    {
        $client=Client::find($request->id);
        return view('diary.client.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client, $id)
    {        
        $client=Client::find($id);
        return view('diary.client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client=Client::where('id',$request->id)->update([
                         'name'=>$request->c_name,
                         'phone'=>$request->phone,
                         'cell'=>$request->cell,
                         'address'=>$request->address,
                        ]); 
        $client=Client::find($request->id);
        $id=$client->lawyer_id;
        return redirect()->route('client.show',['id'=> $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client, $id)
    {
        $client=Client::find($id);
        $client->delete();
        return redirect()->route('client.index');
    }
}
