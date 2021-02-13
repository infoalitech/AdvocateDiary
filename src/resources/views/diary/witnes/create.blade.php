@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container ">
        <form action="{{ route('witnes.store') }}" method="post" class="mx-auto">
            @csrf     
            <div class="row">
                <div class="col-lg-6 col-sm-6 mx-auto">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control"  type="text" name="w_name" required="">
                    </div>
                    <div class="form-group">
                        <label>Witness In Case of</label>
                        <select class="form-control" name="kase_id">
                        @foreach(Auth::user()->lawyer->kase  as $kase)
                            <option value="{{ $kase->id }}">{{ $kase->title}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control"  type="text" name="w_phone" required="">
                    </div>
                    
                    <div class="form-group">
                        <label>Cell</label>
                        <input class="form-control"  type="text" name="w_cell" required="">
                    </div>
                    <div  class="form-group text-right">
                        <input class="btn btn-primary solid blank"  type="submit" name="" value="Submit">
                        <div class="form-group text-left" >
                         <a href="{{route('witnes.index')}}" class=" btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection