<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Search form -->
            <div class="input-group md-form form-sm form-1 pl-0">
                <div class="input-group-prepend">
                    <span class="input-group-text cyan lighten-2" id="basic-text1"><i class="fa fa-search text-white"
                    aria-hidden="true"></i></span>
                </div>
                <input class="form-control my-0 py-1 .mr-md-3" type="text" placeholder="Search" aria-label="Search"><button type="submit" class="btn btn-primary">Search</button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
  
                </ul>
  
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                            <a class="nav-link" type="button" class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" type="button" class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
  
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
  
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                
                            </div>
                        </li>
                    @endguest
                </ul>
                
            </div>
        </div>
        <div class="float-right">
            <span style="font-size: 2em; color: Tomato;">
                <i class="fas fa-shopping-cart"></i>
            </span>
        </div><br>
    </nav>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Fictie
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Nederlandse literatuur & romans</a>
            <a class="dropdown-item" href="#">Literatuur & Romans</a>
            <a class="dropdown-item" href="#">Thrillers & Spanning</a>
            <a class="dropdown-item" href="#">Young Adult</a>
            <a class="dropdown-item" href="#">Fantasy & Science Fiction</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/fictie">Toon alle Fictie</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hobby
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Kookboeken</a>
            <a class="dropdown-item" href="#">Reizen & Vakantie</a>
            <a class="dropdown-item" href="#">Kunst & Cultuur</a>
            <a class="dropdown-item" href="#">Sportboeken</a>
            <a class="dropdown-item" href="#">Creatieve Hobby's</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/hobby">Toon alle Hobby</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Informatief
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Studieboeken</a>
              <a class="dropdown-item" href="#">Computer & Internet</a>
              <a class="dropdown-item" href="#">Taal</a>
              <a class="dropdown-item" href="#">Business & Communicatie</a>
              <a class="dropdown-item" href="#">Geschiedenis</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/informatief">Toon alle Informatief</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ebooks
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">eBook Top 10</a>
              <a class="dropdown-item" href="#">eTopper van de week</a>
              <a class="dropdown-item" href="#">Thrillers & Spanning</a>
              <a class="dropdown-item" href="#">Literatuur & Romans</a>
              <a class="dropdown-item" href="#">Toon alle eBooks</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/ebooks">Toon alle eBooks</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kinderboeken
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Kinderboeken van de maand</a>
                <a class="dropdown-item" href="#">Prentenboeken</a>
                <a class="dropdown-item" href="#">Kinder Luisterboeken</a>
                <a class="dropdown-item" href="#">Informatieve boeken</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/kinderboeken">Toon alle kinderboeken</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Actualiteit
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Nieuwe boeken</a>
                <a class="dropdown-item" href="#">Te reserveren titels</a>
                <a class="dropdown-item" href="#">Top 100 gratis verzonden</a>
                <a class="dropdown-item" href="#">Boeken van vloggers</a>
                <a class="dropdown-item" href="#">DWDD boek van de maand</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/actualiteit">Toon alle Actualiteit</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Engelse Boeken
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Thrillers & Spanning</a>
                <a class="dropdown-item" href="#">Literatuur</a>
                <a class="dropdown-item" href="#">Young Adult</a>
                <a class="dropdown-item" href="#">Non Fictie</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/engels">Toon alle Engelse boeken</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/top100">Top 100</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="/sale">Sale</a>
          </li>
      </ul>
    </div>
    </div>
  </nav>