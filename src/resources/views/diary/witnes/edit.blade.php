@extends('layouts.app')

@section('content')

    <!-- Subpage title start -->
    <div class="banner-title-content">
        <div class="text-center">
            <br><br>
            <h2>Edit</h2>
        </div>
    </div><!-- Subpage title end -->
<div class="row">
    <div class="container">
        <form action="{{ route('witnes.update') }}" method="post">
            @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-6 mx-auto">        
                        <div class="form-group py-3">
                            <label>Name</label>
                            <input class="form-control"  type="hidden" name="id" value="{{$lawyer->id}}">
                            <input class="form-control"  type="text" name="l_name" value="{{$lawyer->name}}">
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