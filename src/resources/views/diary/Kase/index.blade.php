@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>List of Cases</h3>
            </div> 
               <div class="col-lg-6 text-right px-5" >
                 <a href="{{route('kase.create')}}" class=" btn btn-info mx-5">Create</a>
            </div>
        </div>
        <table class="table table-responsive-sm">
            <thead>
                <th>Id</th>
                <th>Case Title</th>
                <th>Client Name</th>
                <th>Case Category</th>
                <th>Status</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach(Auth::user()->lawyer->kase as $kase)
                <tr>
                    <td>{{ $kase->id}}</td>
                    <td>{{ $kase->title}}</td>
                    <td>{{ $kase->client->name}}</td>
                    <td>{{ $kase->CaseCategory->name}}</td>
                    <td>{{ $kase->status}}</td>
                    <td>
                        <a href="\kase\{{$kase->id}}" class="btn btn-primary btn-sm">View</a>
                    </td>
                    <td>
                        <a href="\kase\{{$kase->id}}\edit" class="btn btn-primary btn-sm">Edit</a>
                    </td>   
                    <td>
                        <a href="\kase\{{$kase->id}}\delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Delete</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                    <th colspan="2" class="text-right">
                       
                    </th>
            </tfoot>
        </table>
    </div>
    
</div>

@endsection