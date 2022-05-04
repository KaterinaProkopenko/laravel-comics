<footer>
    <div class="dc-footer">
        <section class="footer-top">
            <div class="container">
                <div class="footer-list">
                    <div>
                        <h4>dc comics</h4>
                        <ul>
                            @foreach ($comicsFooter as $comicsFooterElement)
                                <li>
                                    <a href="{{$comicsFooterElement['url']}}">{{$comicsFooterElement['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
  
                         <h4>shop</h4>
                        <ul>
                            @foreach ($shopFooter as $shopFooterElement)
                                <li>
                                    <a href="{{$shopFooterElement['url']}}">{{$shopFooterElement['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="footer-list-middle">
                        <h4>dc</h4>
                        <ul>
                            @foreach ($dcFooter as $dcFooterElement)
                                <li>
                                    <a href="{{$dcFooterElement['url']}}">{{$dcFooterElement['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h4>sites</h4>
                        <ul>
                            @foreach ($sitesFooter as $sitesFooterElement)
                                <li>
                                    <a href="{{$sitesFooterElement['url']}}">{{$sitesFooterElement['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="logo-bg"></div>
            </div>
        </section>

        <section class="footer-bottom">
            <div class="container">
                <a href="#">sign-up now!</a>
                <div class="social-media">
                    <h3>follow us</h3>
                    <img src="{{asset("images/footer-facebook.png")}}" alt="facebook">
                    <img src="{{asset("images/footer-twitter.png")}}" alt="twitter">
                    <img src="{{asset("images/footer-youtube.png")}}" alt="youtube">
                    <img src="{{asset("images/footer-pinterest.png")}}" alt="pinterest">
                    <img src="{{asset("images/footer-periscope.png")}}" alt="periscope">
                </div>
            </div>
        </section>
    </div>
   
</footer>