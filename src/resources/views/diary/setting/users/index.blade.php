@extends('layouts.app')
@section('title')
    Users
@endsection
@section('content')


<div class="text-center" style="margin-top:10px;">
            <h2>List of Users</h2> <hr>
</div>
<section id="main-container">
    <div class="container">
        <div>
            <div class="col-md-12 text-right" style="margin-top: 30px;">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#usermodal">
                        Create User
                    </button>
            </div>
        </div>
        <table class="table table-striped ">
            <thead style="background: #2F4F4F; color:white;">
                <th>User Name</th>
                <th>Email</th>
                <th>User Type</th>
                <th>View</th>
            </thead>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->user_type}}</td>
                <td><a href="/users/{{$user->id}}" class="btn btn-sm btn-primary">View</a></td>
            </tr>
            @endforeach
        </table>


        </div>
    </section>
  
  @include('diary/setting/users/create')

@endsection


