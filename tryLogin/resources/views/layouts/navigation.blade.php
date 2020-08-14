@section('js')
    <script src="{{ URL::asset('js/cart.js') }}"></script>
@endsection

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
        <div class="navbar-nav">
          <a class="nav-item nav-link {{request()->is('/') ? 'active' :''}}" href="/">
            <img src="{{ URL::asset('img/LOGO UMI.png') }}" width="25" height="25" class="d-inline-block align-top" > <span class="sr-only">(current)</span>
             UntukMasarin
          </a>
          <!-- <a class="nav-item nav-link {{request()->is('kategori') ? 'active' :''}}" href="{{ url('/kategori') }}">Kategori</a> -->
          <a class="nav-item nav-link {{request()->is('detailProduk') ? 'active' :''}}" href="{{ url('/detailProduk') }}">Produk</a>
          <a class="nav-item nav-link {{request()->is('contact') ? 'active' :''}}" href="{{ url('/contact') }}">Contact</a>
          @guest

          <a class="nav-item nav-link {{request()->is('login') ? 'active' :''}}" href="{{ url('/login') }}">{{ __('Login') }}</a>
          @if (Route::has('register'))
          <a class="nav-item nav-link {{request()->is('register') ? 'active' :''}}" href="{{ url('/register') }}">{{ __('Register') }}</a>
          @endif
          @else
          <div class="btn-group">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>  {{ Auth::user()->name }} <span class="caret"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="{{route('home')}}">
              Profil
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </div>
        @endguest

        <!-- cart -->
        <a class="nav-item nav-link" href="{{route('detailProduk.keranjang')}}">
        <!-- <button type="button" class="btn btn-light" data-toggle="dropdown"> -->
          <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
          <span class="badge badge-pill badge-danger">{{Session::has('cart') ? Session::get('cart')->totalQty:'0'}}</span>
        <!-- </button> -->
        </a>
      </div>
    </div>
  </div>
</nav>
