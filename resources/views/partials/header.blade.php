<header>
    <div class="dc-header">
        <div class="container">
          <a href="{{route('comics-page')}}">
            <img src="{{asset("images/dc-logo.png")}}" alt="DC logo">
          </a>
          <ul>
              @foreach ($navList as $navItem)
                <li>
                    <a href="{{$navItem['url']}}">{{$navItem['text']}}</a>
                </li>
              @endforeach
          </ul>
        </div>
      </div>
</header>