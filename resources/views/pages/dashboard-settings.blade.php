@extends('layouts.dashboard') @section('title') Dashboard Settings @endsection
@section('content')
<div class="page-dashboard">
  <div class="d-flex" id="wrapper" data-aos="fade-right">
    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-center">
        <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
      </div>
      <div class="list-group list-group-flush">
        <a href="{{ route('dashboard') }}" class="
                  list-group-item list-group-item-action
              ">
          Dashboard
        </a>
        <a href="{{ route('dashboard-product') }}" class="list-group-item list-group-item-action">
          My Products
        </a>
        <a href="{{ route('dashboard-transactions') }}" class="list-group-item list-group-item-action">
          Transactions
        </a>
        <a href="{{ route('dashboard-store') }}"
          class="list-group-item list-group-item-action {{ (request()->is('dashboard/settings*')) ? 'active' : '' }}">
          Store Settings
        </a>
        <a href="{{ route('dashboard-settings') }}"
          class="list-group-item list-group-item-action {{ (request()->is('dashboard/account*')) ? 'active' : '' }}">
          My Account
        </a>
        <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
          onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
        <div class="container-fluid">
          <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
            &laquo; Menu
          </button>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- Desktop Menu -->
            <ul class="navbar-nav d-none d-lg-flex ml-auto">
              <li class="nav-item dropdown">
                <a href="" class="nav-link" id="navbarDropwdown" role="button" data-toggle="dropdown">
                  <img src="/images/icon-user.png" alt="" class="
                                            rounded-circle
                                            mr-2
                                            profile-picture
                                        " />
                  Hi, {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu">
                  <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                  <a href="{{ route('dashboard-store') }}" class="dropdown-item">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link d-inline-block mt-2">
                  <img src="/images/icon-cart-empty.svg" alt="" />
                </a>
              </li>
            </ul>

            <!-- Smartphone Menu -->
            <ul class="navbar-nav d-block d-lg-none">
              <li class="nav-item">
                <a href="#" class="nav-link"> Hi, {{ Auth::user()->name }} </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link d-inline-block">Cart</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Section Content -->
      <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading mt-3 ml-2">
            <h2 class="dashboard-heading-title">Store Settings</h2>
            <p class="dashboard-heading-subtitle">
              Make your store more profitable
            </p>
          </div>
          <div class="dashboard-content">
            <div class="row">
              <div class="col-12">
                <form action="{{ route('dashboard-setting-update', 'dashboard-store') }}" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="toko">Nama Toko</label>
                            <input type="text" name="store_name" id="toko" class="form-control" autofocus
                              autocomplete="none" value="{{ $user->store_name }}" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="" disabled class="form-control">
                              @foreach ($categories as $category)
                              <option name="categories_id" value="{{ $category->id }}">
                                {{ $category->name }}
                              </option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="password">Status Toko</label>
                            <p class="text-muted">
                              Apakah saat ini toko
                              anda buka?
                            </p>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="store_status" id="store_status" class="custom-control-input"
                                value="1" {{ $user->store_status == 1 ? 'checked' : '' }} />
                              <label for="store_status" class="custom-control-label">Buka</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="store_status" id="openStoreFalse" class="custom-control-input"
                                value="0"
                                {{ $user->store_status == 0 || $user->store_name == NULL ? 'checked' : '' }} />
                              <label for="store_status" class="custom-control-label">Tutup dulu,deh.
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col text-right">
                          <button type="submit" class="btn btn-success">
                            Update toko
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection @push('addon-script')
<script>
  $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
@endpush