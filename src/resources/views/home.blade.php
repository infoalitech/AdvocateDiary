@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-0" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img width="100%" height="400px;" src="{{ asset('gallery/a.jpg') }}" alt="Los Angeles">
                                <div class="carousel-caption">
                                    <h3>Advocate Diary</h3>
                                    <p>LA is always so much fun!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img width="100%" height="400px;" src="{{ asset('gallery/b.jpg') }}" alt="Chicago">
                                <div class="carousel-caption">
                                    <h3>Advocate Diary</h3>
                                    <p>LA is always so much fun!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img width="100%" height="400px;" src="{{ asset('gallery/c.jpg') }}" alt="New York">
                                <div class="carousel-caption">
                                    <h3>Advocate Diary</h3>
                                    <p>LA is always so much fun!</p>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>


                    <hr>
                     <h2 class="text-center"><strong>Welcome to Advocate Diary</strong></h2>
                    <hr>
                </div>
                <div class="row">
                    <p class="container py-3 text-center">
                          We Provide You a Better Diary.We Provide You a Better Diary.We Provide You a Better Diary.We Provide You a Better Diary.We Provide You a Better Diary.We Provide You a Better Diary.We Provide You a Better Diary.We Provide You a Better Diary.We Provide You a Better Diary.We Provide You a Better Diary.We Provide You a Better Diary.We Provide You a Better Diary.We Provide You a Better Diary.We Provide You a Better Diary.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
