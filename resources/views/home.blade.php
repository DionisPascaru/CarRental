@extends('layouts.app')

@section('content')
    <section>
        <div class="banner">
            <!-- <alert type="primary">Test</alert>
            <alert type="success">Test</alert>
            <alert type="danger">Test</alert> -->
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
            <div class="position-relative">
                <div id="slider">
                    @foreach ( $latest as $item )
                        <div class="product">
                            <div class="card m-3">
                                <img class="card-img-top" src="{{ asset('assets/images/'.$item->images->path) }}" alt="{{ $item->images->path }}">
                                <div class="card-body d-flex justify-content-between">
                                    <h5 class="card-title">{{$item['title']}}</h5>
                                    <h5 class="card-title">{{$item['price']}}</h5>
                                    <a href="{{ url('article/'.$item['id']) }}" class="btn btn-primary">View details</a>
                                </div>
                            </div>
                            <add-to-cart :product-id="{  id: {{ $item->id }} , title: '{{ $item['title'] }}', price: '{{ $item['price'] }}' }"></add-to-cart>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row p-lg-5">
            <div class="position-relative">
                <div id="sponsors" class="slider-track">
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/dunlop.png') }}">
                    </div>
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/gtr.png') }}">
                    </div>
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/walker.png') }}">
                    </div>
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/nitto.png') }}">
                    </div>
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/dunlop.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main role="main" id="app">
        @yield('content')
    </main>
@endsection
