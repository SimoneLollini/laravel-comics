<header>
    <div class="container">
        <div class="logo">
            <a href="/"><img src="../assets/img/dc-logo.png" alt=""></a>
        </div>
        <nav>
            @foreach(Config::get('nav-menu') as $element)
            <a href="" class="active_link">
                {{$element['text']}}
            </a>
            @endforeach
        </nav>
    </div>
</header>