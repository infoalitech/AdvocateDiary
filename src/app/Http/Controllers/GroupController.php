<?php

namespace App\Http\Controllers;

use App\Group;
use App\Permission;
use App\GroupPermission;
use Illuminate\Http\Request;
use Session;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $groups=Group::all();
        $permissions=Permission::all();
        return view('diary.setting.group.index',compact('groups','permissions'));
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
        $group=new Group;
        $group->name=$request->name;
        $group->description=$request->description;
        $group->save();
        // dd($request);
        foreach ($request->permissions as $per_id) {
            $group_permission=new GroupPermission;
            $group_permission->group_id=$group->id;
            $group_permission->permission_id=$per_id;
            $group_permission->save();
        }
        Session::flash('success','Group Created Successfully');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group,$id)
    {
        //
        $group=Group::find($id);
        $permissions=Permission::all();
        return view('diary.setting.group.show',compact('group','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
        $group=Group::find($request->group_id);
        $group->name=$request->name;
        $group->description=$request->description;
        $group->save();
        $group->permissions()->detach();
        $group->save();
        foreach ($request->permissions as $per_id) {
                $group_permission=new GroupPermission;
                $group_permission->group_id=$group->id;
                $group_permission->permission_id=$per_id;
                $group_permission->save();
        }
        Session::flash('success','Group Updated Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group,$id)
    {
        $group=Group::find($id);
        $group->delete();
        Session::flash('warning','Group Deleted Successfully');
        return redirect()->route('group');

    }
}
