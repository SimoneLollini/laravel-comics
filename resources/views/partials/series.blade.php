<section class="current_series">
    <div class="container">
        <div class="badge_title">CURRENT SERIES</div>


        <div class="row row-cols-6">
            @foreach(Config::get('db.comics') as $comic)
            <div class="col position-relative">
                <a href="#" class="text-white">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <div class="text_wrapper">{{ $comic['series'] }}</div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn_primary">LOAD MORE</button>
    </div>
</section>
</section>