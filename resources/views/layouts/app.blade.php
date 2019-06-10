<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://bootswatch.com/3/cerulean/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="https://bootswatch.com/3/cerulean/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-default">
          <div class ="container">
            <div class ="navbar-header">
              <button type ="button" class ="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar" aria-expanded ="false" aria-controls = "navbar">
                <span class = "sr-only">Toggle navigation</span>
                <span class = "icon bar"></span>
                <span class = "icon bar"></span>
                <span class = "icon bar"></span>
              </button>
              <a class = "navbar-brand">MEAT Labs Inc. Forum</a>
            </div>
            <div id ="navbar" class = "collapse navbar-collapse">


              <u1 class = "nav navbar-nav navbar-right">
                @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
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
              </u1>
            </div>
        </nav> 
        
     </div>    
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
