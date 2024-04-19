<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/bel-pol.jpg') }}" width="70" height="40" class="d-inline-block align-top" alt="pol-bel"/>
            {{ config('app.name', 'GMINA.BY') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav m-auto">
                {{-- <li class="nav-item"><a href="/" class="nav-link">Home</a></li> --}}
                <li class="nav-item mr-3"><a href="/base" class="nav-link"><i class="far fa-folder-open"></i> База данных <sup><span class="badge badge-pill badge-danger">New</span></sup></a></li>
                {{-- <li class="nav-item mr-3"><a href="/services" class="nav-link"><i class="far fa-thumbs-up"></i> Наши услуги</a></li> --}}
                <li class="nav-item"><a href="/about" class="nav-link"><i class="far fa-address-card"></i> Связаться с нами</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><small>{{ __('Login') }}</small></a>
                    </li>
                    {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><small>{{ __('Register') }}</small></a>
                        </li>
                    @endif --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>