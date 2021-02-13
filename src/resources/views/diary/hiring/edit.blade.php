@extends('layouts.app')

@section('content')

<div class="row">
<div class="container ">
    <form action="{{ route('hiring.update') }}" method="post" class="mx-auto">
        @csrf     
        <input type="hidden" name="id" value="{{hiring->id}}">
        <input type="hidden" name="case" value="{{case->id}}">
        <div class="row">        
        <div class="col-lg-6 col-sm-6 mx-auto">        
            <div class="form-group">
                <label>Court</label>
                <select name="court">
                    <option selected="" disabled="">Select Court</option>
                    @foreach($courts as $court)
                        <option value="{{$court->id}}">{{$court->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Judge</label>
                <select name="judge">
                    <option selected="" disabled="">Select Judge</option>
                    @foreach($judges as $judge)
                        <option value="{{$judge->id}}">{{$judge->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Hiring Type</label>
                <select name="hiring_type">
                    <option selected="" disabled="">Select Court</option>
                    @foreach($hirings as $hiring)
                        <option value="{{$hiring->id}}">{{$hiring->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input class="form-control"  type="date" name="date" required="">
            </div>
            <div class="form-group">
                <label>Time</label>
                <input class="form-control"  type="time" name="time" required="">
            </div>
            <div class="form-group">
                <label>Narration</label>
                <textarea name="narration">
                    
                </textarea>
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