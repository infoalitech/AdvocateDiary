@extends('layouts.app')

@section('content')

<div class="row">
<div class="container ">
    <form action="{{ route('court.store') }}" method="post" class="mx-auto">
        @csrf     
        <div class="row">        
        <div class="col-lg-6 col-sm-6 mx-auto">        
            <div class="form-group">
                <label>Name</label>
                <input class="form-control"  type="text" name="c_name" required="">
            </div>
            <div class="form-group">
                <label>Location</label>
                <input class="form-control"  type="text" name="c_location" required="">
            </div>
            <div class="form-group">
                <label>City</label>
                <input class="form-control"  type="text" name="c_city" required="">
            </div>
            <div  class="form-group text-right">
                <input class="btn btn-primary solid blank"  type="submit" name="" value="Submit">
            <div class="form-group text-left" >
                 <a href="{{route('court.index')}}" class=" btn btn-secondary">Back</a>
            </div>
            </div>
        </div>
        </div>
    </form>
</div>
</div>

@endsection