<!DOCTYPE html>
<html>
<head>
	<br>
	<title></title>
	<link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
	<style>
		.is-complete{
			text-decoration: line-through;
		}
	</style>
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
              <a class = "navbar-brand">MEAT LABS Inc</a>
            </div>
            <div id ="navbar" class = "collapse navbar-collapse">
              <ul class = "nav navbar-nav">
                @if(auth()->user()->isAdmin == 1)
                    <a class="navbar-brand">ADMIN ROUTE</a>
                    <li><a href="{{ url('/users') }}" class="navbar-item">{{ 'Users' }}</a></li>           
                @endif

                <li><a href="{{ url('/posts') }}" class="navbar-item">{{ 'Posts' }}</a></li>
                <li><a href="{{ url('/profile') }}" class="navbar-item">{{ 'My Profile' }}</a></li>
                                    @if (Auth::guest())
                                        <li><a class="navbar-item " href="{{ route('login') }}">Login</a></li>
                                        <li><a class="navbar-item " href="{{ route('register') }}">Register</a></li>
                                    @else
                                            <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>
                                            </ul>
                                                <ul class="nav navbar-nav navbar-right">
                                                <li><a class="navbar-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a></li>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                                </ul>
                                    @endif
            </div>
                                
                            </div>

            </div>
          </div>
        </nav>
            <!-- <nav class="navbar has-shadow">
                <div class="container">


                    <div class="navbar-brand">
                        @if(auth()->user()->isAdmin == 1)
                            <div class="navbar-item">ADMIN ROUTE</div>
                            <a href="{{ url('/users') }}" class="navbar-item">{{ 'Users' }}</a>       
                        @endif
                        <a href="{{ url('/posts') }}" class="navbar-item">{{ 'Posts' }}</a>
                        <a href="{{ url('/profile') }}" class="navbar-item">{{ 'My Profile' }}</a>

                        <div class="navbar-burger burger" data-target="navMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="navbar-menu" id="navMenu">
                        <div class="navbar-start"></div>

                        <div class="navbar-end">
                            @if (Auth::guest())
                                <a class="navbar-item " href="{{ route('login') }}">Login</a>
                                <a class="navbar-item " href="{{ route('register') }}">Register</a>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav> -->
	<div class="container">
		
		@yield('content')

	</div>
</body>
</html>