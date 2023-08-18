<nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav side-nav" >
        <li class="nav-item">
          <a class="nav-link" style="margin-left: 20px;" href="{{route('admin.index')}}">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.users.index')}}" style="margin-left: 20px;">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.orders.index')}}" style="margin-left: 20px;">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.products.index')}}" style="margin-left: 20px;">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.bookings.index')}}" style="margin-left: 20px;">Bookings</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-md-auto d-md-flex">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            username
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{route('admin.logout')}}" method="POST" style="display: none;">
                @csrf
            </form>
            
        </li>
                        
        
      </ul>
    </div>
  </div>
  </nav>