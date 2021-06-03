@extends('layouts.app')

@section('content')
    <section>
        <div class="banner">
{{--            <video width="320" height="240" controls>--}}
{{--                <source src="{{asset('assets/intro.mp4')}}" type="video/mp4">--}}
{{--                <source src="{{asset('assets/intro.mp4')}}" type="video/ogg">--}}
{{--            </video>--}}
        </div>
    </section>
    <section class="row">
        <div class="about-us about-us-parallax d-flex align-items-center justify-content-center p-5">
            <div class="about-us-content">
                <h2>About us</h2>
                <p>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                    Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a
                    Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the
                    undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et
                    Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                    theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                    dolor sit amet..", comes from a line in section 1.10.32.
                </p>
                <p>
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                    Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in
                    their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                </p>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row p-lg-5">
            <h2>Cars to Rent</h2>
            <div class="d-flex flex-wrap">
                @foreach ( $latest as $item )
                    <div class="col-lg-4">
                        <div class="card m-3">
                            <img class="card-img-top" src="{{ asset('assets/images/'.$item->images->path) }}" alt="{{ $item->images->path }}">
                            <div class="card-body d-flex justify-content-between">
                                <h5 class="card-title">{{$item['title']}}</h5>
                                <a href="{{ url('article/'.$item['id']) }}" class="btn btn-primary">View details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
