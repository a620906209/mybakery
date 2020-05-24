  <nav class="navbar navbar-expand-md" style="background-color:	rgb(101, 19, 75);">
    <a class="navbar-brand" style="color:white;" href="/">BAKERY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        @guest
          <li class="nav-item active">
           <a class="nav-link"  style="color:white;" href="{{ route('login') }}">login <span class="sr-only">(current)</span></a>
          </li>
        @endguest
        @auth
          <li class="nav-item active">
            
            <a class="nav-link" style="color:white;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout
            </a>
          </li>
          <form id="logout-form" style="color:white;" action="{{ route('logout') }}" method="POST" style="....">
            @csrf
          </form>
        @endauth
        <li class="nav-item active">
          <a class="nav-link"style="color:white;" href="{{ route('menu') }}">menu</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link " style="color:white;"href="{{ route('cart') }}">shoppingCart
        {{-- <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span> --}}
        <span class="badge">{{ Cart::getContent()->count()}}</span>
        </a>
        </li>
          <li class="nav-item active">
          <a class="nav-link disabled"style="color:white;" href="#">aboutUs</a>
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