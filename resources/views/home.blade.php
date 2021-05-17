@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Home Page</h1>
        <div class="d-flex flex-wrap">
        @foreach ( $article as $article_item )
        <div class="col-lg-4">
            <div class="card m-3">

                <img class="card-img-top" src="{{ asset('media/'.$article_item->images->path) }}" alt="{{ $article_item->images->path }}">
                <div class="card-body">
                    <h5 class="card-title">{{$article_item['title']}}</h5>
                    <p class="card-text">{{$article_item['short_description']}}</p>
                    <a href="{{ url('article/'.$article_item['id']) }}" class="btn btn-primary">View details</a>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
