<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link {{request()->is('/') ? 'active' :''}}" href="/"><img src="{{ URL::asset('assets/img/LOGO UMI.png') }}" width="30" height="30"> <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link {{request()->is('kategori') ? 'active' :''}}" href="{{ url('/kategori') }}">Kategori</a>
        <a class="nav-item nav-link {{request()->is('contact') ? 'active' :''}}" href="{{ url('/contact') }}">Contact</a>
        <a class="nav-item nav-link {{request()->is('detailProduk') ? 'active' :''}}" href="{{ url('/detailProduk') }}">Detail Produk</a>
        @guest
          <a class="nav-item nav-link {{request()->is('checkout') ? 'active' :''}}" href="{{ url('/checkout') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          <a class="nav-item nav-link {{request()->is('login') ? 'active' :''}}" href="{{ url('/login') }}">{{ __('Login') }}</a>
          @if (Route::has('register'))
            <a class="nav-item nav-link {{request()->is('register') ? 'active' :''}}" href="{{ url('/register') }}">{{ __('Register') }}</a>
          @endif
        @else
          <div class="btn-group">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
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
      </div>
    </div>
</nav>
