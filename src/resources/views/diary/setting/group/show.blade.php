    @extends('layouts.app')
@section('title')
Group {{$group->name}}
@endsection
@section('content')

<section id="home" class="p-0" style="margin-top: -90px;">
<div id="banner-area">
    <img src="{{ asset('my/images/banner/banner1.jpg') }}" alt="" />
    <div class="parallax-overlay"></div>
    <!-- Subpage title start -->
    <div class="banner-title-content">
        <div class="text-center">
            <br><br>
            <h2>{{$group->name}}</h2><br>
            
            
        </div>
    </div><!-- Subpage title end -->
</div><!-- Banner area end -->
<!-- Main container start -->
<section id="main-container">
    <div class="container">
        <div>
            <div class="text-center">
                <h5>{{$group->description}}</h5>
            </div>
            <div class="col-md-12 text-right">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#groupeditmodal">
                        Edit Group
                    </button>
            </div>
        </div>
        <!-- Company Profile -->
            <table class="table table-striped table-bordered">
                <thead style="background-color: #2F4F4F; color:white; ">
                    <th>Name</th>
                    <th>Description</th>
                </thead>
            @foreach ($group->permissions as $per)
                <tr>
                    <td>
                        <strong>{{$per->name}}</strong>
                    </td>
                    <td>
                        {{$per->description}}
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
        </div>
    </section>
</section>
  

  @include('diary/setting/group/edit')

@endsection


