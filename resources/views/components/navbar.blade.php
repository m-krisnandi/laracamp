<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-reset" href="#">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-reset" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-reset" href="#">Business</a>
                </li>
            </ul>
            <ul class="nav-item me-auto mb-2 mb-lg-0">
                <li class="nav-link">
                  <!-- LIGHT SWITCH -->
                  <div class="d-flex">
                    <div class="form-check form-switch ms-auto mt-3 me-3">
                      <label class="form-check-label ms-3" for="lightSwitch">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="25"
                          height="25"
                          fill="currentColor"
                          class="bi bi-brightness-high"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
                          />
                        </svg>
                      </label>
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="lightSwitch"
                      />
                    </div>
                  </div>
                </li>
              </ul>
            @auth
            <div class="d-flex user-logged nav-item dropdown no arrow">
                <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Halo, {{ Auth::user()->name }}
                    @if (Auth::user()->avatar)
                        <img src="{{ Auth::user()->avatar }}" class="user-photo rounded-circle" alt="">
                    @else
                        <img src="https://ui-avatars.com/api/?name=admin" class="user-photo rounded-circle" alt="">
                    @endif
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left:auto">
                        <li>
                            <a href="{{ route('dashboard') }}" class="dropdown-item">My Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit()">Sign Out</a>

                        <form action="{{ route('logout') }}" id="logout-form" method="post" style="display: none">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                        </li>
                    </ul>
                </a>
            </div>
                @else
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-master btn-secondary me-3">
                        Sign In
                    </a>
                    <a href="{{ route('login') }}" class="btn btn-master btn-primary">
                        Sign Up
                    </a>
                </div>
            @endauth

        </div>
    </div>
</nav>
