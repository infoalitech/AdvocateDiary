@extends('layouts.app')

@section('content')

<div class="row">
<div class="container ">
    <form action="{{ route('payment.store') }}" method="post" class="mx-auto">
        @csrf     
        <input type="hidden" name="case" value="{{$case->id}}">
        <div class="row">        
        <div class="col-lg-6 col-sm-6 mx-auto">

            <div class="form-group">
                <label>Total</label>
                {{$case->total}}
            </div>
            <div class="form-group">
                <label>Receiived</label>
                {{$case->total}}
            </div>
            <div class="form-group">
                <label>Remaining</label>
                {{$case->total}}
            </div>
            <div class="form-group">
                <label>Received</label>
                <input type="text" name="amount" class="form-control">
            </div>

            <div class="form-group">
                <label>Date</label>
                <input class="form-control"  type="date" name="date" required="">
            </div>

            <div  class="form-group text-right">
                <input class="btn btn-primary solid blank"  type="submit" name="" value="Submit">
            </div>
        </div>
        </div>
    </form>
</div>
</div>

@endsection