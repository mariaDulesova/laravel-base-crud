<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{asset('img/dc-logo.png')}}" alt="DC Logo" width='50'>
        
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' :''}} aria-current="page" href="{{route('home')}}">Home</a>
                <a class="nav-link {{Route::currentRouteName() == 'comics.index' ? 'active' :''}}" href="{{route('comics.index')}}">Comics</a>
            </div>
          </div>
        </div>
      </nav>
</header>