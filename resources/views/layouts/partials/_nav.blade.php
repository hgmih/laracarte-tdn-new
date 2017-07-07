<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{ set_active_route('home')}}"><a href="{{route('home')}}">Home</a></li>
            <li class="{{ set_active_route('about')}}"><a href="{{route('about')}}">About</a></li>
            <li class="{{ set_active_route('artisans')}}"><a href="#">Artisans</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://Laravel.com">Laravel.com</a></li>
                <li><a href="https://Laravel.io">Laravel.io</a></li>
                <li><a href="https://Laracasts.com">Laracasts</a></li>
                {{-- <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li> --}}
                <li><a href="https://Larajobs.com">Larajobs</a></li>
                <li><a href="https://Laravel-news.com">Laravel News</a></li>
                <li><a href="https://Larachat.com">Larachat</a></li>
              </ul>
            </li>
            <li class="{{ set_active_route('contact')}}"><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="{{ set_active_route('login')}}"><a href="#about">Login</a></li>
            <li class="{{ set_active_route('register')}}"><a href="#contact">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>