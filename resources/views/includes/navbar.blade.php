<!-- Navbar -->
<nav
    class="
        navbar navbar-expand-lg navbar-light navbar-store
        fixed-top
        navbar-fixed-top
    "
    data-aos="fade-down"
>
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="/images/logo.svg" alt="Logo" />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="{{ route('home') }}" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('categories') }}" class="nav-link">Categories</a>
              </li>
              <li class="nav-item">
                  <a href="" class="nav-link">Rewards</a>
              </li>
              @guest
                <li class="nav-item">
                  <a href="{{ route('register') }}" class="nav-link">Register</a>
                </li>
                <li class="nav-item">
                  <a
                    href="{{ route('login') }}"
                    class="btn btn-success nav-link px-4 py-2 text-white"
                    >Login</a>
                </li>
              @endguest
            </ul>
            @auth
              <!-- Desktop Menu -->
              <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item dropdown">
                  <a
                    href="#"
                    class="nav-link"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                  >
                    <img
                      src="/images/icon-user.png"
                      alt=""
                      class="rounded-circle mr-2 profile-picture"
                    />
                    Hi, {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu">
                    <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                    <a href="{{route('dashboard-settings')}}" class="dropdown-item"
                      >Settings</a
                    >
                    <div class="dropdown-divider"></div>
                    
                  </div>
                </li>
                <li class="nav-item">
                  @php $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count(); @endphp
                  @if ($carts > 0)
                    <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                      <img src="/images/icon-cart-filled.svg" alt="" />
                      <span><div class="card-badge">{{ $carts }}</div></span> 
                    </a>
                  @else
                    <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                      <img src="/images/icon-cart-empty.svg" alt="" />
                    </a>
                  @endif
                </li>
              </ul>
              {{-- Smartphone Views --}}
              <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Hi, {{ Auth::user()->name }}
                  </a>
                </li>
                <li class="nav-item">
                  @php $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count(); @endphp
                  @if ($carts > 0)
                    <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                      <img src="/images/icon-cart-filled.svg" alt="" />
                      <span><div class="card-badge">{{ $carts }}</div></span> 
                    </a>
                  @else
                    <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                      <img src="/images/icon-cart-empty.svg" alt="" />
                    </a>
                  @endif
                </li>
              </ul>
            @endauth
        </div>
    </div>
</nav>
