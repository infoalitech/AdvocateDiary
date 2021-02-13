@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>List of Case Categories</h3>
            </div> 
               <div class="col-lg-6 text-right px-5" >
                 <a href="{{route('category.create')}}" class=" btn btn-info mx-5">Create</a>
            </div>
        </div>
        <table class="table table-responsive-sm">
            <thead>
                <th>Id</th>
                <th>Category</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id}}</td>
                    <td>{{ $category->name}}</td>
                    <td>
                        <a href="\category\{{$category->id}}" class="btn btn-primary btn-sm">View</a>
                    </td>
                    <td>
                        <a href="\category\{{$category->id}}\edit" class="btn btn-primary btn-sm">Edit</a>
                    </td>   
                    <td>
                        <a href="\category\{{$category->id}}\delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Delete</i></a>
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