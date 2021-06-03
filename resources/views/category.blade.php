@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Category Page</h1>
        <div class="d-flex flex-wrap">
            @foreach($categories as $category)
                <div class="col-lg-4">
                    <div class="card m-3">
                        <h5 class="card-title">{{ $category->name}}</h5>
                        <div class="p-3">
                            <p class="text-dark">{{ $category->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
