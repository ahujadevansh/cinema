<header class="navbar navbar-expand-sm" style="background-color:#262626">
    
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/events"><img height="45px" class="ml-3" src="{{ asset('images/CinemaGhar-APP.png') }}"></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        
        @guest('admin')
            @guest('organiser')
                @guest
                    <button type="submit" name="commit" class="btn btn-outline-light btn-md mr-5" data-toggle="modal" data-target="#login">
                        Login
                    </button>
                    <div class="modal fade" id="login" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Login</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                @isset($url)
                                <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                                @else
                                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                @endisset
                                    @csrf
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                            <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                            <i class="fa fa-lock"></i>
                                            </span>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="checkbox" style="zoom:2" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
                                        <span>Login <i class="fa fa-sign-in"></i></span>
                                    </button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                @endguest
            @endguest
        @endguest
    </ul>
</header>
<nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color:#101010">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Cinema') }}
            </a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('movies') }}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('plays') }}">Plays</a>
                    </li>
                    @if(Auth::guard('organiser')->check())
                        <li class="nav-item">
                            <a class="nav-link" href="/shows/create">Add shows</a>
                        </li>
                    @endif
                    @if(Auth::guard('admin')->check())
                        <li class="nav-item">
                            <a class="nav-link" href="/events/create">Add Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/artists/create">Add Artists</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/venues/create">Add Venues</a>
                        </li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest('admin')
                        @guest('organiser')
                            @guest
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @endguest
                        @endguest
                    @endguest
                    @if(Auth::guard('web')->check())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
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
                    @endif
                    
                     @if(Auth::guard('admin')->check())
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('admin')->user()->first_name }} {{ Auth::guard('admin')->user()->last_name }} <span class="caret"></span>
                        </a>
                        <li class="nav-item dropdown">  
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
                    @endif
                    @if(Auth::guard('organiser')->check())
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('organiser')->user()->first_name }} {{ Auth::guard('organiser')->user()->last_name }}<span class="caret"></span>
                        </a>
                        <li class="nav-item dropdown">  
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
                    @endif
                </ul>
            </div>
        </div>
    </nav>