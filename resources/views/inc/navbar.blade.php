<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Tender Pro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="{{Request::is('/') ? 'active' : ''}}">
        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="{{Request::is('/ about') ? 'active' : ''}}">
        <a class="nav-link" href="/tenders">Tenders<span class="sr-only">(current)</span></a>
      </li>
      <li class="{{Request::is('/ about') ? 'active' : ''}}">
        <a class="nav-link" href="/about">About Us<span class="sr-only">(current)</span></a>
      </li>
      <li class="{{Request::is('/contact') ? 'active' : ''}}">
        <a class="nav-link" href="/contact">Contact Us<span class="sr-only">(current)</span></a>
      </li>
    </ul>
<!--New Item to Nav Bar-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
            </div>
        </nav>
    </div>
<!--New Item to Nav Bar-->
    
</nav>