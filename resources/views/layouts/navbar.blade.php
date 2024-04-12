<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">Online library</a>
      
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        
        @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ route('authors.index') }}">Authors</a>
          </li>
          <li class="nav-item">
            <span class="nav-link">Welcome, {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</span>
          </li>
        @endauth
          
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
