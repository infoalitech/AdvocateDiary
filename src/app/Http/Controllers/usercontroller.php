<?php

namespace App\Http\Controllers;

use App\User;
use App\Group;
use App\Permission;
use App\UserGroup;
use Image;
use Session;
use App\UserPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::all();
        $groups=Group::all();
        $permissions=Permission::all();
        return view('diary.setting.users.index',compact('users','groups','permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myprofile()
    {
        //
        $user=Auth::user();
        // dd($user);
        $groups=Group::all();
        $permissions=Permission::all();
        return view('diary.setting.My_Profile.index',compact('user','groups','permissions'));

    }
    public function update_avatar(Request $request){
            if($request->hasFile('avatar')){
                $avatar=$request->file('avatar');
                $filename=time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300,300)->save(public_path('uploads/avatars/' . $filename ) );
                $user=Auth::user();
                $user->avatar=$filename;
                $user->save();
            }
            return view('diary.setting.My_Profile.index',array('user' => Auth::user()));
            // return view('profile', array('user' => Auth::user()));

        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=User::create(['name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make('123456789'),
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
        Session::flash('success','Group Created Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,$id)
    {
        //
        $user=User::find($id);
        $groups=Group::all();
        $permissions=Permission::all();
        return view('diary.setting.users.show',compact('user','groups','permissions'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $user=User::find($request->user_id);
        $user->name=$request->name;
        $user->email=$request->email;

        $user->permissions()->detach();
        $user->groups()->detach();

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
        $user->save();
        Session::flash('success','Group Created Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
