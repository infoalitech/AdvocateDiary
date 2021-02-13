@extends('layouts.app')

@section('content')

<div class="banner-title-content">
    <div class="text-center">
        <div class="row">
            <div class="col-md-6">
                <h2>Mr {{$client->name}}</h2>
            </div>
            <div class="col-md-6">
                <a href="/kase/create" class="btn btn-primary btn-sm">New Case</a>
            </div>
        </div>
        
    </div>
</div>
<!-- Subpage title end -->
<div class="row">
<div class="container">
    <div class="col-md-12 py-5">
        <h4>Cases List</h4>
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
                @foreach($client->kase as $kase)
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
</div> 
	<div class="form-group text-center py-5" >
        <a href="{{route('lawyer.index')}}" class=" btn btn-secondary">Back</a>
    </div>



  @endsection