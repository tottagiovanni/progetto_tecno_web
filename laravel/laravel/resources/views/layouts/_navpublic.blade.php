
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="{{ route('home') }}" class="scrollto"><img src="img/logowhite.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="{{ (request()->routeIs('home')) ? 'menu-active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
          <li class="{{ (request()->routeIs('catalog')) ? 'menu-active' : '' }}"><a href="{{ route('catalog') }}">Catalogo</a></li>
          <li class="{{ (request()->routeIs('how-to')) ? 'menu-active' : '' }}"><a href="{{ route('how-to') }}">Come comprare</a></li>
          <li class="{{ (request()->routeIs('who')) ? 'menu-active' : '' }}"><a href="{{ route('who') }}">Chi siamo</a></li>
          <li ><a href="{{ route('home', ['#faq']) }}">FAQ</a></li>
          <li class="login"><a href="{{ route('login') }}">LOGIN</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->