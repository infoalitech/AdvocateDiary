<?php

namespace App\Http\Controllers;

use App\Case_categorie;
use Illuminate\Http\Request;

class CaseCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Case_categorie::all();
        return view('diary.kcategory.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('diary.kcategory.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $category=Case_categorie::create(['name'=>$request->c_name,
                                  ]);
 
        return redirect()->route('category.index',['id'=>$category->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Case_categorie  $case_categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Case_categorie $case_categorie,Request $request)
    {
        $category=Case_categorie::find($request->id);
        return view('diary.kcategory.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Case_categorie  $case_categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Case_categorie $case_categorie,$id)
    {
        $category=Case_categorie::find($id);
        return view('diary.kcategory.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Case_categorie  $case_categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Case_categorie $case_categorie)
    {
        $category=Case_categorie::where('id',$request->id)->update([
                        'name'=>$request->c_name,
                         ]); 
        $id=$request->id;
        return redirect()->route('category.index',['id'=> $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Case_categorie  $case_categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Case_categorie $case_categorie,$id)
    {
        $category=Case_categorie::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
