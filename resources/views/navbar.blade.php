    @auth
        @if (Auth::user()->role_id == 1)
        <div class="d-flex justify-content-center align-items-center">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/cart">Cart</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/profile/{{Auth::user()->id}}">Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/maintenance/{{Auth::user()->id}}">Account Maintenance</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>

        @else
        <div class="d-flex justify-content-center align-items-center">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/cart">Cart</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/profile/{{Auth::user()->id}}">Profile</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
        @endif
    @endauth





