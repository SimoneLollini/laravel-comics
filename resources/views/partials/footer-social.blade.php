<section class="link">
    <div class="container">
        <div class="row">
            <div class="col-6 left">
                <div class="row">
                    <div class="col-4">
                        <div class="wrapper COMICS">
                            <h6>DC COMICS</h6>
                            @foreach (Config('db.footer-dc-comics') as $link)
                            <a href="{{$link['href']}}">{{$link['text']}}</a>
                            @endforeach
                        </div>
                        <div class="wrapper SHOP">
                            <h6>SHOP</h6>
                            @foreach (Config('db.footer-wrapper-shop') as $link)
                            <a href="{{$link['href']}}">{{$link['text']}}</a>
                            @endforeach
                        </div>

                    </div>
                    <div class="col-4">
                        <div class="wrapper DC">
                            <h6>DC</h6>
                            @foreach (Config('db.footer-wrapper-dc') as $link)
                            <a href="{{$link['href']}}">{{$link['text']}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="wrapper SITES">
                            <h6>SITES</h6>
                            @foreach (Config('db.footer-wrapper-site') as $link)
                            <a href="{{$link['href']}}">{{$link['text']}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            </div>
            <div class="col-6 right">

            </div>

        </div>
    </div>
</section>
<section class="social">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="#" class="btn btn-outline-primary text-white">SIGN UP NOW!</a>
        <div class="wrapper_social d-flex align-items-center">
            <h6 class="text-primary">FOLLOW US</h6>
            <img src="{{ Vite::asset('resources/images/footer-facebook.png') }}" alt="">
            <img src="{{ Vite::asset('resources/images/footer-twitter.png') }}" alt="">
            <img src="{{ Vite::asset('resources/images/footer-youtube.png') }}" alt="">
            <img src="{{ Vite::asset('resources/images/footer-pinterest.png') }}" alt="">
            <img src="{{ Vite::asset('resources/images/footer-periscope.png') }}" alt="">
        </div>
    </div>
</section>