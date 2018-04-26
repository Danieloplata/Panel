
	<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Navigation</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
            <li class="{{ Request::is('projects*') ? 'active' : '' }}"><a href="{{ route('projectsOverview') }}">Projects</a></li>
            <li class="{{ Request::is('panel*') ? 'active' : '' }}"><a href="{{ route('panelOverview') }}">Panel</a></li>
            <li><a href="#">Feature 2</a></li>
            <li><a href="#">Discussion</a></li>
            <li class="{{ Request::is('help*') ? 'active' : '' }}"><a href="{{ url('/help') }}">Help</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @guest
              <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
              <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else
              <li><a href="#">Welcome, {{ Auth::user()->name }}</a></li>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
              </li>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            @endguest
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>