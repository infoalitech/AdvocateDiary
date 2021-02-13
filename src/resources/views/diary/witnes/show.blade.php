@extends('layouts.app')

@section('content')

<div class="banner-title-content">
    <div class="text-center">
        <h2>Clients of Lawyer Mr {{$lawyer->name}}</h2>
    </div>
</div>
<!-- Subpage title end -->
<div class="row">
<div class="container">
    <div class="col-md-12">
        <table class="table table-responsive-sm">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Cell</th>
                <th>Address</th>
                <th>View</th>
                <th>Edit</th> 
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach($lawyer->clients as $client)
                <tr>
                    <td>{{ $client->id}}</td>
                    <td>{{ $client->name}}</td>
                    <td>{{ $client->phone}}</td>
                    <td>{{ $client->cell}}</td>
                    <td>{{ $client->address}}</td>
                    <td>
                        <a href="\client\{{$client->id}}" class="btn btn-primary btn-sm">View</a>
                    </td>
                    <td>
                        <a href="\client\{{$client->id}}\edit" class="btn btn-primary btn-sm">Edit</a>
                    </td>   
                    <td>
                        <a href="\client\{{$client->id}}\delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Delete</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
</table>
    </div>
</div></div>
</div>
	<div class="form-group text-center py-5" >
        <a href="{{route('lawyer.index')}}" class=" btn btn-secondary">Back</a>
    </div>



  @endsection