@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="col"><h1>{{ $article->title }}</h1></div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <h3>Description</h3>
                    <p>{{ $article->content }}</p>
                    <p>{{ $article->short_description }}</p>
                </div>
                <div class="col-md-6">
                    <div class="car-slick-slider">
                        @foreach($images as $img)
                            <div class="car-image">
                            <img class="img-fluid" src="{{ asset('media/'.$img->path) }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
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
        </div>
    </div>
@endsection
