<header>
    <div class="container">
        <div class="logo">
            <a href="/"><img src="{{Vite::asset('/resources/images/dc-logo.png')}}" alt=""></a>
        </div>
        <nav>
            <a href="/characters" class="{{Route::currentRouteName() === 'characters'? 'active_link': ''}}">
                CHARACTERS
            </a>
            <a href="/comics" class="{{Route::currentRouteName() === 'comics'? 'active_link': ''}}">
                COMICS
            </a>
            <a href="/movies" class="{{Route::currentRouteName() === 'movies'? 'active_link': ''}}">
                MOVIES
            </a>
            <a href="/tv" class="{{Route::currentRouteName() === 'tv'? 'active_link': ''}}">
                TV
            </a>
            <a href="/games" class="{{Route::currentRouteName() === 'games'? 'active_link': ''}}">
                GAMES
            </a>
            <a href="/collectibles" class="{{Route::currentRouteName() === 'collectibles'? 'active_link': ''}}">
                COLLECTIBLES
            </a>
            <a href="/videos" class="{{Route::currentRouteName() === 'videos'? 'active_link': ''}}">
                VIDEOS
            </a>
            <a href="/fans" class="{{Route::currentRouteName() === 'fans'? 'active_link': ''}}">
                FANS
            </a>
            <a href="/news" class="{{Route::currentRouteName() === 'news'? 'active_link': ''}}">
                NEWS
            </a>
            <a href="/shop" class="{{Route::currentRouteName() === 'shop'? 'active_link': ''}}">
                SHOP
            </a>
        </nav>
    </div>
</header>