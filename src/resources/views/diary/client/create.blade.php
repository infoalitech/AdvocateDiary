@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container ">
        <form action="{{ route('client.store') }}" method="post" class="mx-auto">
            @csrf     
            <div class="row">
                <div class="col-lg-6 col-sm-6 mx-auto">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control"  type="text" name="c_name" required="">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control"  type="text" name="phone" required="">
                    </div>
                    <div class="form-group">
                        <label>Cell</label>
                        <input class="form-control"  type="text" name="cell" required="">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control"  type="text" name="address" required="">
                    </div>
                    <div  class="form-group text-right">
                        <input class="btn btn-primary solid blank"  type="submit" name="" value="Submit">
                        <div class="form-group text-left" >
                         <a href="{{route('client.index')}}" class=" btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection