  <!-- Navbar -->
  <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{ route('home')}}" class="navbar-brand"><img src="frontend/img/logo.png"></a>
        <button class="navbar navbar-toggler" type="button" data-toggle="collapse" data-target="#navb" aria-controls="navb" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a class="nav-link active" href="#">Home</a>
                  </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="#">NEWS & PROMO</a>
                  </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">BRANDS</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">aprilia</a>
                        <a href="#" class="dropdown-item">MOTTO GUZZI</a>
                        <a href="#" class="dropdown-item">Vespa</a>
                        <a href="#" class="dropdown-item">PIAGGIO</a>
                    </div>
                  </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="#">ACCESSORIES</a>
                  </li>
            </ul>
            @guest
                <!-- Mobile Button -->
            <from class="from-inline d-sm-block d-md-none">
              <button class="btn btn-login my-2 my-sm-0 px-4" type="button"
              onclick="event.preventDefault(); location.href='{{url('login')}}';">Login</button>
            </from>
            <!-- Dekstop Button -->
            <from class="from-inline my-2 my-lg-0 d-none d-md-block">
              <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
              onclick="event.preventDefault(); location.href='{{url('login')}}';">Login</button>
            </from>

            @endguest
            
            @auth
                <!-- Mobile Button -->
            <from class="from-inline d-sm-block d-md-none" action="{{ url('logout')}}" method="POST">
              @csrf
              <button class="btn btn-login my-2 my-sm-0 px-4" type="submit">Logout</button>
            </from>
            <!-- Dekstop Button -->
            <from class="from-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout')}}" method="POST">
              @csrf
              <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">Logout</button>
            </from>

            @endauth

          </div>
      </nav>
</div>