@extends('layouts.base')

@section('title', 'Comics Product')

@section('main-content')
    <div class="jumbotron"></div>
    <div class="blue-container"></div>

{{-- green content --}}
    <section class="main-single-product-top single-product-container">
        <img class="product-poster" src="{{$comics['thumb']}}" alt="Poster comic">

        <div class="left-content">
            <h2>{{$comics['title']}}</h2>
            <div class="availability">
                <div class="av-left">U.S. Price: {{$comics['price']}}</div>
                <div class="av-right">sdf</div>
            </div>
            <p>{{$comics['description']}}</p>

        </div>

        <div class="right-content">
            <p>text</p>
            <img src="{{asset("images/advu.jpg")}}" alt="image">
        </div>
    </section>
{{-- /green content --}}

{{-- talent specs --}}
    <section class="bg-product-bottom">
        <div class="main-single-product-bottom single-product-container">
            <div class="about-single-product">
                <div class="talent">

                    <h3>Talent</h3>

                    <div class="artists">
                        <p class="display-inline single-product-title">Art by:</p>
                        <p class="display-inline">{{implode(", ", $comics['artists'])}}</p>
                    </div>

                    <div class="writers">
                        <p class="display-inline single-product-title">Written by:</p>
                        <p class="display-inline">{{implode(", ", $comics['writers'])}}</p>
                    </div>

                </div>

                <div class="specs">
                    <h3>Specs</h3>

                    <div class="series">
                        <p class="display-inline single-product-title">Series:</p>
                        <p class="display-inline">{{$comics['series']}}</p>
                    </div>

                    <div class="specs-price">
                        <p class="display-inline single-product-title">U.S. Price:</p>
                        <p class="display-inline">{{$comics['price']}}</p>
                    </div>

                    <div class="sale-date">
                        <p class="display-inline single-product-title">On Sale Date:</p>
                        <p class="display-inline">{{$comics['sale_date']}}</p>
                    </div>
                </div>
            </div>  
        </div>
    </section>
{{-- /talent specs --}}
{{--     @endforeach --}}

{{-- cards --}}
    <section class="main-single-product-links">
        <ul class="single-product-list">
            @foreach ($mainNavCards as $navCard)
                <li>
                    <a href="{{$navCard['url']}}" class="list-link">
                        <h5>{{$navCard['title']}}</h5>
                        <img src="{{asset($navCard['image'])}}" alt="{{$navCard['title']}}">
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
{{-- /cards --}}

@endsection