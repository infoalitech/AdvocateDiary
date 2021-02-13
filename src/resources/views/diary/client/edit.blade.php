@extends('layouts.app')

@section('content')

    <!-- Subpage title start -->
    <div class="banner-title-content">
        <div class="text-center">
            <br><br>
            <h2>Edit Client Mr {{$client->name}}'s Record</h2>
        </div>
    </div><!-- Subpage title end -->
<div class="row">
    <div class="container">
        <form action="{{ route('client.update') }}" method="post">
            @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-6 mx-auto">        
                        <div class="form-group">
                                <input class="form-control"  type="hidden" name="id" value="{{$client->id}}">
                            <label>Name</label>
                            <input class="form-control"  type="text" name="c_name" required="" value="{{$client->name}}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control"  type="text" name="phone" required="" value="{{$client->phone}}">
                        </div>
                        <div class="form-group">
                            <label>Cell</label>
                            <input class="form-control"  type="text" name="cell" required="" value="{{$client->cell}}">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input class="form-control"  type="text" name="address" required="" value="{{$client->address}}">
                        </div>
                        <div class="form-group text-right">
                            <input class="btn btn-primary solid blank"  type="submit" name="" value="Submit">
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection