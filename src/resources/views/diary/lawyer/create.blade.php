@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container ">
        <form action="{{ route('lawyer.store') }}" method="post" class="mx-auto">
            @csrf     
            <div class="row">
                <div class="col-lg-6 col-sm-6 mx-auto">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control"  type="text" name="l_name" required="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control"  type="text" name="l_email" required="">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label>Groups</label>
                          <select name="groups[]" size="10" multiple class="form-control">
                            @foreach ($groups as $group)
                                @if($group->id != 1)
                                <option value="{{$group->id}}">{{$group->name}}</option>
                                @endif
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Permissions</label>
                          <select name="permissions[]" size="10" multiple class="form-control">
                            @foreach ($permissions as $permission)
                              @if($permission->id != 1 )
                              @if($permission->id != 11 )
                                <option value="{{$permission->id}}">{{$permission->name}}</option>
                                @endcan
                                @endcan
                            @endforeach
                          </select>
                        </div>
                    </div>





                    <div  class="form-group text-right">
                        <input class="btn btn-primary solid blank"  type="submit" name="" value="Submit">
                        <div class="form-group text-left" >
                         <a href="{{route('lawyer.index')}}" class=" btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection