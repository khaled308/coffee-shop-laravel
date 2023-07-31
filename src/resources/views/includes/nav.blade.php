<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
     <a class="navbar-brand" href="/">Coffee<small>Blend</small></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="oi oi-menu"></span> Menu
     </button>
     <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
           <li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
           <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
           <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
           <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
           @auth
           <li class="nav-item cart"><a href="{{route('cart.index')}}" class="nav-link"><span class="icon icon-shopping_cart"></span></a>
            <li class="nav-item">
              <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
              <form id="logout-form" action="/logout" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
            @endauth
            @guest
              <li class="nav-item"><a href="/login" class="nav-link">login</a></li>
              <li class="nav-item"><a href="/register" class="nav-link">register</a></li>
            @endguest
        </ul>
     </div>
  </div>
</nav>