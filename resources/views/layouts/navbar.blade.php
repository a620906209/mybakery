  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">BAKERY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        @guest
          <li class="nav-item active">
           <a class="nav-link" href="{{ route('login') }}">login <span class="sr-only">(current)</span></a>
          </li>
        @endguest
        @auth
          <li class="nav-item active">
            
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout
            </a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="....">
            @csrf
          </form>
        @endauth
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('menu') }}">menu</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link " href="{{ route('shoppingcar') }}">shoppingCar</a>
        </li>
          <li class="nav-item active">
          <a class="nav-link disabled" href="#">aboutUs</a>
        </li>
        @auth
        </li>
          <li class="nav-item active">
          <a class="nav-link disabled">
          {{ auth()->user()->name }}
         </a>
        </li>
        @endauth
      </ul>
    </div>
  </nav>