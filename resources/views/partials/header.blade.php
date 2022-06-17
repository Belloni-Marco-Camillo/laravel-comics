<header>
    <div class="up-header">
        <div class="voiceposition text-end container">
            <a class="text-white" href="{{route('home')}}">DC POWER VISA</a>
            <a class="text-white" href="{{route('home')}}">ADDITIONALL DC SITES</a>
        </div>
    </div>
    <div class="down-header container d-flex justify-content-between">
        <div class="down-header-sx">
            <img src="{{asset('img/dc-logo.png')}}" alt="">
        </div>

        <div class="down-header-center">
            <a href="{{Route::currentRouteName() === 'characters' ? 'text-primary' : ''}} {{-- {{route('characters')}} --}} ">characters</a>
            <a href="{{Route::currentRouteName() === 'comic' ? 'text-primary' : ''}}">comics</a>
            <a href="{{Route::currentRouteName() === 'movies' ? 'text-primary' : ''}}">movies</a>
            <a href="{{Route::currentRouteName() === 'TV' ? 'text-primary' : ''}}">tv</a>
            <a href="{{Route::currentRouteName() === 'games' ? 'text-primary' : ''}}">games</a>
            <a href="{{Route::currentRouteName() === 'collectibles' ? 'text-primary' : ''}}">collectibles</a>
            <a href="{{Route::currentRouteName() === 'viedos' ? 'text-primary' : ''}}">videos</a>
            <a href="{{Route::currentRouteName() === 'fans' ? 'text-primary' : ''}}">fans</a>
            <a href="{{Route::currentRouteName() === 'news' ? 'text-primary' : ''}}">news</a>
            <a href="{{Route::currentRouteName() === 'shop' ? 'text-primary' : ''}}">shop</a>
        </div>

        <div class="down-header-dx">
            <input type="text" placeholder="search" class="search">
        </div>
        
    </div>
        
</header>