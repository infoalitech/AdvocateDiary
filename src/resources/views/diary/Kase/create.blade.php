@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container ">
        <form action="{{ route('kase.store') }}" method="post" class="mx-auto">
            @csrf     
            <div class="row">
                <div class="col-lg-6 col-sm-6 mx-auto">
                    <div class="form-group">
                        <label>Case Title</label>
                        <input class="form-control"  type="text" name="title" required="">
                    </div>
                    <div class="form-group">
                        <label>Client</label>
                        <select class="form-control" name="client_id">
                        @foreach(Auth::user()->lawyer->clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Total Amount</label>
                        <input class="form-control"  type="text" name="amount" required="">
                    </div>
                    <div class="form-group">
                        <label>Case Category</label>
                        <select class="form-control" name="Category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div  class="form-group text-right">
                        <input class="btn btn-primary solid blank"  type="submit" name="" value="Submit">
                        <div class="form-group text-left" >
                         <a href="{{route('kase.index')}}" class=" btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection