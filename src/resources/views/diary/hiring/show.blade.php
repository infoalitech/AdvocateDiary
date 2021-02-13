@extends('layouts.app')

@section('content')

<div class="banner-title-content">
    <div class="text-center">
        <h2>{{$court->name}}</h2>
    </div>
</div>
<!-- Subpage title end -->
<div class="row">
<div class="container">
    <div class="col-md-8">
        <h4>Details</h4>
    </div>
</div>
</div> 
	<div class="form-group text-center py-5" >
        <a href="{{route('court.index')}}" class=" btn btn-secondary">Back</a>
    </div>



  @endsection