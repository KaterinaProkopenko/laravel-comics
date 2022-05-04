<header>
    <div class="dc-header">
        <div class="container">
          <img src="{{asset("images/dc-logo.png")}}" alt="DC logo">
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