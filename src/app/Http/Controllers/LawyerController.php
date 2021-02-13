<?php

namespace App\Http\Controllers;

use App\lawyer;
use App\User;
use App\Group;
use App\Permission;
use App\UserGroup;
use App\UserPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lawyers=lawyer::all();
        return view('diary.lawyer.index',compact('Lawyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $groups=Group::all();
        $permissions=Permission::all();
        return view('diary.lawyer.create',compact('groups','permissions'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=User::create([
            'name' => $request->l_name,
            'email' => $request->l_email,
            'password' => Hash::make('123456789'),
        ]);
        if (isset($request->groups)) {
            foreach ($request->groups as $grp_id) {
                $user_group=new UserGroup;
                $user_group->user_id=$user->id;
                $user_group->group_id=$grp_id;
                $user_group->save();
            }
        }
        if (isset($request->permissions)) {
            foreach ($request->permissions as $per_id) {
                $user_permission=new UserPermission;
                $user_permission->user_id=$user->id;
                $user_permission->permission_id=$per_id;
                $user_permission->save();
            }
        }




        $lawyer=lawyer::create([
                        'name'=>$request->l_name,
                        'user_id'=>$user->id,
                        ]);
        $id=$lawyer->id;

        // EMail username password

        return redirect()->route('lawyer.detail',['id'=> $id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $lawyer=lawyer::find($id);
        return view('diary.lawyer.detail',compact('lawyer'));
    }
    public function show(lawyer $lawyer, request $request)
    {
        $lawyer=lawyer::find($request->id);
        return view('diary.lawyer.show',compact('lawyer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function edit(lawyer $lawyer,$id)
    {
         $lawyer=lawyer::find($id);
        return view('diary.lawyer.edit',compact('lawyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lawyer $lawyer)
    {
        $lawyer=lawyer::where('id',$request->id)->update([
                         'name'=>$request->l_name,
                        ]); 

        $lawyer=lawyer::find($request->id);
        $id=$lawyer->user_id;
        return redirect()->route('lawyer.show',['id'=> $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(lawyer $lawyer,$id)
    {
        $lawyer=lawyer::find($id);
        $lawyer->user->delete();
        $lawyer->delete();
        return redirect()->route('lawyer.index');
    }
}
