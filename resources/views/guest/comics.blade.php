@extends('layouts.base')

@section('title', 'Comics')
    

@section('main-content')

    <div class="dc-main">
        <section class="dc-main-top">
            <div class="jumbotron"></div>
            <div class="container">
                @foreach ($comics as $comicsElement)
                    <a href="">
                        <div class="card">
                            <img src="{{$comicsElement['thumb']}}" alt="{{$comicsElement['series']}}">
                            <h5>{{$comicsElement['series']}}</h5>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
        
    </div>

@endsection

@section('main-content-bottom')
    <section class="dc-main-bottom">
        <div class="container">
            <ul>
                @foreach ($mainNavCards as $navCard)
                    <li>
                        <a href="{{$navCard['url']}}">
                            <img src="{{asset($navCard['image'])}}" alt="{{$navCard['title']}}">
                            <h5>{{$navCard['title']}}</h5>
                        </a>
                    </li>
                @endforeach
                
            </ul>
        </div>
    </section>
@endsection

