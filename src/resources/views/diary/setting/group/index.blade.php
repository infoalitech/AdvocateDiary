@extends('layouts.app')
@section('title')
Groups
@endsection
@section('content')

        <div class="text-center" style="margin-top:10px;">
            <h2>Groups</h2>
        </div>
<section id="main-container">
    <div class="container">
        <div>
            <div class="col-md-12 text-right" style="margin-top: 30px;">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#groupmodal">
                        Create Group
                    </button>
            </div>
        </div>
        <!-- Company Profile -->
            <table class="table table-striped table-bordered text-center">
                <thead style="background-color: #2F4F4F; color:white;">
                    <th>Name</th>
                    <th>Description</th>
                    <th>View</th>
                    <th>Delete</th>
                </thead>
            @foreach ($groups as $group)
                <tr>
                    <td>
                        <strong>{{$group->name}}</strong>
                    </td>
                    <td>
                        {{$group->description}}
                    </td>
                    <td>
                        <a href="/group/{{$group->id}}" class="btn btn-primary">View</a>
                    </td>
                    <td><a href="\group\{{$group->id}}\delete" class="btn btn-primary">delete</a></td>
                </tr>
            @endforeach
            </table>
        </div>
        </div>
    </section>
</section>
  

  @include('diary/setting/group/create')

@endsection


