<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">Online library</a>
      
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">  
        @if(session()->has('user'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('authors.index') }}">Authors</a>
          </li>
          <li class="nav-item">
            <span class="nav-link">Welcome, {{ session('user')['first_name'] }} {{ session('user')['last_name'] }}</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                @csrf
            </form>
          </li>
        @else          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
