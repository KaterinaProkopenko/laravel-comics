@extends('layouts.base')

@section('main-content')

    <div class="dc-main">
        <section class="dc-main-top">
            <div id="jumbotron"></div>
            <div class="container">
                @foreach ($comics as $comic)
                    <div class="card">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                        <h5>{{$comic['series']}}</h5>
                    </div>
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

