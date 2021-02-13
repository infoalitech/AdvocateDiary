@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>List of Witnesses</h3>
            </div> 
               <div class="col-lg-6 text-right px-5" >
                 <a href="{{route('witnes.create')}}" class=" btn btn-info mx-5">Create</a>
            </div>
        </div>
        <table class="table table-responsive-sm">
            <thead>
                <th>Id</th>
                <th>Case Id</th>
                <th>Case Title</th>
                <th>Witnes Name</th>
                <th>Witnes In Case of</th>
                <th>Phone</th>
                <th>Cell</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach(Auth::user()->lawyer->kase as $kas)
                @foreach($kas->witnes as $witnes)
                <tr>
                    <td>{{ $witnes->id}}</td>
                    <td>{{ $kas->id}}</td>
                    <td>{{ $kas->name}}</td>
                    <td>{{ $witnes->name}}</td>
                    <td>{{ $witnes->Kase->title}}</td>
                    <td>{{ $witnes->phone}}</td>
                    <td>{{ $witnes->cell}}</td>
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