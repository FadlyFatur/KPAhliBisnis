<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link {{request()->is('/') ? 'active' :''}}" href="/">UntukMasarin <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link {{request()->is('kategori') ? 'active' :''}}" href="/kategori">Kategori</a>
        <a class="nav-item nav-link {{request()->is('about') ? 'active' :''}}" href="contact.index">Contact</a>
        <a class="nav-item nav-link {{request()->is('login') ? 'active' :''}}" href="/login">Login</a>
        <a class="nav-item nav-link {{request()->is('register') ? 'active' :''}}" href="/register">Register</a>
      </div>
    </div>
</nav>
