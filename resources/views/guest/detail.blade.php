@extends('layouts.base')

@section('title', 'Comics Product')

@section('main-content')
    <div class="jumbotron"></div>
    <div class="blue-container"></div>

    <div class="container">
        <div class="main-single-product-top">
            <img class="product-poster" src="{{$comics[0]['thumb']}}" alt="$">

            <div class="left-content">
                <h2>Title</h2>
                <div class="availability">
                    <div class="av-left">sd</div>
                    <div class="av-right">sdf</div>
                </div>
                <p>{{$comics[0]['description']}}</p>

            </div>

            <div class="right-content">
                <p>text</p>
                <img src="/images/adv.jpg" alt="image">
            </div>
        </div>
    </div>

    

    <div class="main-single-product-bottom">
        <div class="about-single-product"></div>
        <div class="main-single-product-links"></div>
    </div>

@endsection