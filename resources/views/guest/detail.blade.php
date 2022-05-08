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
                <div class="av-left"> 
                    <div>
                        <span class="text-light-green">U.S. Price:</span>  {{$comics['price']}}
                    </div>
                    <div class="text-light-green text-uppercase">
                        Available
                    </div>
                </div>
                <div class="av-right">
                    Check availability
                    <i class="fas fa-caret-down"></i>
                </div>
            </div>
            <p>{{$comics['description']}}</p>

        </div>

        <div class="right-content">
            <p>advertisement</p>
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
                        <p class="single-product-title">Art by:</p>
                        <p class="single-product-text">{{implode(", ", $comics['artists'])}}</p>
                    </div>

                    <div class="writers">
                        <p class="single-product-title">Written by:</p>
                        <p class="single-product-text">{{implode(", ", $comics['writers'])}}</p>
                    </div>

                </div>

                <div class="specs">
                    <h3>Specs</h3>

                    <div class="series">
                        <p class="single-product-title">Series:</p>
                        <p class="series-text">{{$comics['series']}}</p>
                    </div>

                    <div class="specs-price">
                        <p class="single-product-title">U.S. Price:</p>
                        <p>{{$comics['price']}}</p>
                    </div>

                    <div class="sale-date">
                        <p class="single-product-title">On Sale Date:</p>
                        <p>{{$comics['sale_date']}}</p>
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

                @if($navCard['title'] !== 'dc power visa')
                    <li>
                        <a href="{{$navCard['url']}}" class="list-link">
                            <h5>{{$navCard['title']}}</h5>
                            <img src="{{asset($navCard['image'])}}" alt="{{$navCard['title']}}">
                        </a>
                    </li>
                @endif
                
            @endforeach
        </ul>
    </section>
{{-- /cards --}}

@endsection