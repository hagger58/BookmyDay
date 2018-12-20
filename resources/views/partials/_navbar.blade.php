<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            {{--  <a class="navbar-brand"></a>  --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Search form -->
            <div class="input-group md-form form-sm form-1 pl-0">
                <div class="input-group-prepend">
                    <span class="input-group-text cyan lighten-2" id="basic-text1"><i class="fa fa-search text-white" aria-hidden="true"></i></span>
                </div>
                <input class="form-control my-0 py-1 .mr-md-3" type="text" placeholder="Search" aria-label="Search">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
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
            <div class="float-right">
                    <span style="font-size: 2em; color: Tomato;">
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                </div><br>

        </div>
    </nav>

                <div class="float-right">
                    @if(session('cart'))
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12 main-section">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-info" data-toggle="dropdown">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>  Cart  <span class="badge badge-pill badge-danger"> {{ count(session('cart')) }}</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <div class="row total-header-section">
                                                <div class="col-lg-6 col-sm-6 col-6">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger"> {{ count(session('cart')) }}</span>
                                                </div>

                                                <?php $total = 0 ?>
                                                @foreach(session('cart') as $id => $details)
                                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                                @endforeach

                                                <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                                    <p>Total: <span class="text-info">€ {{ $total }}</span></p>
                                                </div>
                                            </div>

                                            @if(session('cart'))
                                                @foreach(session('cart') as $id => $details)
                                                    <div class="row cart-detail">
                                                        <div class="col-lg-8 cart-detail-img">
                                                            <img src="{{ 'images/' . $details['image'] }}" height="160" width="100" />
                                                        </div>
                                                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                            <p>{{ $details['title'] }}</p>
                                                            <span class="price text-info"> €{{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                    <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                            <form action="{{ url('cart') }}">
                                <button type="submit" class="btn btn-info">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>  Cart  <span class="badge badge-pill badge-danger"> 0 </span>
                                </button>
                            </form>
                        @endif
                        </div>
                    </div>
                </div>
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
            @if (count($categories1) > 0)
                @foreach($categories1 as $category1)
                {{ $category1->name }}
                @endforeach
            @else
                Kinderboeken
            @endif
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($subcategories1 as $subcategory1)
                <a class="dropdown-item" href="#">{{ $subcategory1->name }}</a>
            @endforeach

           <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Show all in @foreach($categories1 as $category1)
                <a class="dropdown-item" href="/kinderboeken">{{ $subcategory1->name }}</a>
            @endforeach

           <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/kinderboeken">Show all in @foreach($categories1 as $category1)
            {{ $category1->name }}
            @endforeach</a>

          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @if (count($categories2) > 0)
                @foreach($categories2 as $category2)
                {{ $category2->name }}
                @endforeach
            @else
                Literatuur
            @endif
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          @foreach($subcategories2 as $subcategory2)
                <a class="dropdown-item" href="#">{{ $subcategory2->name }}</a>
           @endforeach
           <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Show all in @foreach($categories2 as $category2)
                <a class="dropdown-item" href="/literatuur">{{ $subcategory2->name }}</a>
           @endforeach
           <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/literatuur">Show all in @foreach($categories2 as $category2)
            {{ $category2->name }}
            @endforeach</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if (count($categories3) > 0)
                @foreach($categories3 as $category3)
                {{ $category3->name }}
                @endforeach
            @else
                Hobby
            @endif
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($subcategories3 as $subcategory3)
                <a class="dropdown-item" href="#">{{ $subcategory3->name }}</a>
           @endforeach
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Show all in @foreach($categories3 as $category3)
                <a class="dropdown-item" href="/hobby">{{ $subcategory3->name }}</a>
           @endforeach
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/hobby">Show all in @foreach($categories3 as $category3)
            {{ $category3->name }}
            @endforeach</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if (count($categories4) > 0)
                @foreach($categories4 as $category4)
                {{ $category4->name }}
                @endforeach
            @else
                Informatief
            @endif
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($subcategories4 as $subcategory4)
                <a class="dropdown-item" href="#">{{ $subcategory4->name }}</a>
           @endforeach
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Show all in @foreach($categories4 as $category4)
                <a class="dropdown-item" href="/informatief">{{ $subcategory4->name }}</a>
           @endforeach
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/informatief">Show all in @foreach($categories4 as $category4)
            {{ $category4->name }}
            @endforeach</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if (count($categories5) > 0)
                @foreach($categories5 as $category5)
                {{ $category5->name }}
                @endforeach
            @else
                Gezondheid
            @endif
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($subcategories5 as $subcategory5)
                <a class="dropdown-item" href="#">{{ $subcategory5->name }}</a>
           @endforeach
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Show all in @foreach($categories5 as $category5)
                <a class="dropdown-item" href="/actualiteit">{{ $subcategory5->name }}</a>
           @endforeach
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/actualiteit">Show all in @foreach($categories5 as $category5)
            {{ $category5->name }}
            @endforeach</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if (count($categories6) > 0)
                @foreach($categories6 as $category6)
                {{ $category6->name }}
                @endforeach
            @else
                Religie
            @endif
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($subcategories6 as $subcategory6)
                <a class="dropdown-item" href="#">{{ $subcategory6->name }}</a>
           @endforeach
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Show all in @foreach($categories6 as $category6)
                <a class="dropdown-item" href="/engels">{{ $subcategory6->name }}</a>
           @endforeach
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/engels">Show all in @foreach($categories6 as $category6)
            {{ $category6->name }}
            @endforeach</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if (count($categories7) > 0)
                @foreach($categories7 as $category7)
                {{ $category7->name }}
                @endforeach
            @else
                Stripboeken
            @endif
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($subcategories7 as $subcategory7)
                <a class="dropdown-item" href="#">{{ $subcategory7->name }}</a>
           @endforeach
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Show all in @foreach($categories7 as $category7)
                <a class="dropdown-item" href="/stripboeken">{{ $subcategory7->name }}</a>
           @endforeach
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/stripboeken">Show all in @foreach($categories7 as $category7)
            {{ $category7->name }}
            @endforeach</a>
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
</nav>
</div>
