@extends('layouts.app')

@section('content')

<div class="banner-title-content">
    <div class="text-center">
        <h2>Mr {{$lawyer->name}}</h2>
    </div>
</div>
<!-- Subpage title end -->
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <h3>Personal Detail</h3>
            <strong>Name : {{$lawyer->name}}</strong><br>
            <strong>Email : {{$lawyer->user->email}}</strong>
        </div>
    </div>
</div>
<div class="form-group text-center py-5" >
    <a href="{{route('lawyer.index')}}" class=" btn btn-secondary">Back</a>
</div>



  @endsection