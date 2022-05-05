@extends('layouts.base')

@section('title', 'Comics Product')

@section('main-content')
    <div class="jumbotron"></div>
    <div class="blue-container"></div>


    <div class="main-single-product-top single-product-container">
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

    
    <section class="bg-product-bottom">
        <div class="main-single-product-bottom single-product-container">
            <div class="about-single-product">
                <div class="talent">

                    <h3>Talent</h3>

                    <div class="artists">
                        <p class="display-inline single-product-title">Art by:</p>
                        <p class="display-inline">kdfhks</p>
                        
                    </div>

                    <div class="writers">
                        <p class="display-inline single-product-title">Written by:</p>
                        <p class="display-inline">safasf</p>
                    </div>

                </div>

                <div class="specs">
                    <h3>Specs</h3>

                    <div class="series">
                        <p class="display-inline single-product-title">Series:</p>
                        <p class="display-inline">safasf</p>
                    </div>

                    <div class="specs-price">
                        <p class="display-inline single-product-title">U.S. Price:</p>
                        <p class="display-inline">safasf</p>
                    </div>

                    <div class="sale-date">
                        <p class="display-inline single-product-title">On Sale Date:</p>
                        <p class="display-inline">safasf</p>
                    </div>
                </div>
            </div>

            <div class="main-single-product-links"></div>
        </div>
    </section>
    

@endsection