@extends('layouts.app')

@section('content')

<div class="banner-title-content">
    <div class="row">
    <div class="container">
        <div class="text-right px-5">

        @if ($case->status == 'O')

            <a href="/kase/{{$case->id}}/close" class="btn btn-primary">Close Case</a>
            <a href="/kase_reult/{{$case->id}}/create" class="btn btn-primary">Add Result</a>
            <a href="/payment/{{$case->id}}/create" class="btn btn-primary">Receive Payment</a>
            <a href="/hirings/create/{{$case->id}}" class="btn btn-primary">Add Hiring</a>
        @endif
        </div>
    </div>
    </div>
    <div class="text-center">
        <h2><strong>Case No:</strong> {{$case->id}}</h2>
    </div>
</div>

<!-- Subpage title end -->
<div class="row">
<div class="container">
    <div class="col-md-12">
        <h3>Basic Details</h3>
        <div class="row">
            <div class="col-md-4">
                <strong>Title:</strong> {{$case->title}}
            </div>
            <div class="col-md-4">
                <strong>Client:</strong> {{$case->client->name}}
            </div>
            <div class="col-md-4">
                <strong>Status:</strong>
                @if ($case->status == 'C')
                    Case Closed
                @else
                    Case 
                @endif
            </div>
        </div>
    <div class="row">

        <div class="col-md-4">
            <strong>Total:</strong> {{$case->total}}
        </div>
        <div class="col-md-4">
            <strong>Receievd:</strong> {{$case->received}}
        </div>
        <div class="col-md-4">
            <strong>Remaining:</strong> {{$case->remaining}}
        </div>
        </div>
    </div>
<hr style="border: 3px solid black">

    <div class="p-3">
        <h3>Result</h3>
        <p>
            {{$case->result}}
        </p>
    </div>
<hr style="border: 3px solid black">

    <div class="col-md-12">
        <h3>Witness List</h3>
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
                @foreach($case->witnes as $witnes)
                <tr>
                    <td>{{ $witnes->id}}</td>
                    <td>{{ $witnes->name}}</td>
                    <td>{{ $witnes->phone}}</td>
                    <td>{{ $witnes->cell}}</td>
                    <td>{{ $witnes->address}}</td>
                    <td>
                        <a href="\witnes\{{$witnes->id}}" class="btn btn-primary btn-sm">View</a>
                    </td>
                    <td>
                        <a href="\witnes\{{$witnes->id}}\edit" class="btn btn-primary btn-sm">Edit</a>
                    </td>   
                    <td>
                        <a href="\witnes\{{$witnes->id}}\delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Delete</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
</table>
    </div>


<hr style="border: 3px solid black">
    <div class="col-md-12">
        <h3>Hirings</h3>
        <table class="table table-responsive-sm table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Court</th>
                    <th>Judge</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($case->CaseHiring as $hiring)
                <tr>
                    <td>{{$hiring->date}}</td>
                    <td>{{$hiring->time}}</td>
                    <td>{{$hiring->court->name}}</td>
                    <td>{{$hiring->judge->name}}</td>
                    <td>{{$hiring->type->name}}</td>
                    <td>{{$hiring->narration}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
<hr style="border: 3px solid black">
    <div class="col-md-12">
        <h3>Payments</h3>
        <table class="table table-responsive-sm table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Received</th>
                </tr>
            </thead>
            <tbody>
                @foreach($case->bill as $bill)
                <tr>
                    <td>{{$bill->date}}</td>
                    <td>{{$bill->amount}}</td>
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