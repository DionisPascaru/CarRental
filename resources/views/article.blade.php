@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content article">
            <h1>{{ $article->title }}</h1>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <div class="card m-3 p-3">
                        <h3>Description</h3>
                        <p>{{ $article->content }}</p>
                        <p>{{ $article->short_description }}</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="position-relative m-3 pl-5 pr-5">
                        <div id="car-details-slider">
                            @foreach($images as $img)
                                <div class="car-image">
                                    <img class="img-fluid" src="{{ asset('assets/images/'.$img->path) }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="card m-3 p-3">
                        <h3>Specifications</h3>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span><strong>Color:</strong></span>
                                <span>{{ $article->specifications->color }}</span>
                            </li>
                            <li class="list-group-item">
                                <span><strong>Fuel:</strong></span>
                                <span>{{ $article->specifications->fuel }}</span>
                            </li>
                            <li class="list-group-item">
                                <span><strong>Transmission:</strong></span>
                                <span>{{ $article->specifications->transmission }}</span>
                            </li>
                            <li class="list-group-item">
                                <span><strong>Year:</strong></span>
                                <span>{{ $article->specifications->year }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-sm-6">
                    <AddToCart/>
                </div> -->
            </div>
        </div>
    </div>
@endsection
