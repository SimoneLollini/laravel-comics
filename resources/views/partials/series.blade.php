<section class="current_series">
    <div class="container">
        <div class="badge_title">CURRENT SERIES</div>


        <div class="row row-cols-6">
            @foreach(Config::get('comics') as $comic)
            <div class="col position-relative">
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                <div class="text_wrapper">{{ $comic['series'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn_primary">LOAD MORE</button>
    </div>
</section>
</section>