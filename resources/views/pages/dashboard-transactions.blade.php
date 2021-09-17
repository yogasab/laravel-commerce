@extends('layouts.dashboard') @section('title') Dashboard Products Page
@endsection @section('content')
<div class="page-dashboard">
  <div class="d-flex" id="wrapper" data-aos="fade-right">
    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-center">
        <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
      </div>
      <div class="list-group list-group-flush">
        <a href="{{ route('dashboard') }}" class="
                  list-group-item list-group-item-action">
          Dashboard
        </a>
        <a href="{{ route('dashboard-product') }}" class="list-group-item list-group-item-action">
          My Products
        </a>
        <a href="{{ route('dashboard-transactions') }}"
          class="list-group-item list-group-item-action {{ (request()->is('dashboard/transactions*')) ? 'active' : '' }}">
          Transactions
        </a>
        <a href="{{ route('dashboard-store') }}" class="list-group-item list-group-item-action">
          Store Settings
        </a>
        <a href="{{ route('dashboard-settings') }}" class="list-group-item list-group-item-action">
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
      <nav class="
                    navbar navbar-expand-lg navbar-light navbar-store
                    fixed-top
                " data-aos="fade-down">
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
                  <a href="{{ route('dashboard-settings') }}" class="dropdown-item">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Logout</a>
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
          <div class="dashboard-heading mt-3 ml-4">
            <h2 class="dashboard-heading-title">Transactions</h2>
            <p class="dashboard-heading-subtitle">
              Big result starts from the small one
            </p>
          </div>
          <div class="dashboard-content">
            <div class="row mt-3">
              <div class="col-12 mt-2 ml-2">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                      aria-controls="pills-home" aria-selected="true">Sell Products</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                      aria-controls="pills-profile" aria-selected="false">Buy Products</a>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab">
                    @forelse ($sellTransactions as $transaction)
                    <a href="{{ route('dashboard-transactions-details', $transaction->id) }}" class="card card-list">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img src="{{ Storage::url($transaction->product->galleries->first()->photos) }}"
                              class="w-100" />
                          </div>
                          <div class="col-md-4">
                            {{ $transaction->product->name }}
                          </div>
                          <div class="col-md-3">
                            {{ $transaction->transaction->user->name }}
                          </div>
                          <div class="col-md-3">
                            {{ $transaction->created_at }}
                          </div>
                          <div class="col-md-1 d-none d-md-block">
                            <img src="/images/dashboard-arrow-right.svg" alt="" />
                          </div>
                        </div>
                      </div>
                    </a>
                    @empty
                    <h1>HEHEHEHEHEHEH</h1>
                    @endforelse
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    @forelse ($buyTransactions as $transaction)
                    <a href="{{ route('dashboard-transactions-details', $transaction->id) }}" class="card card-list">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img src="{{ Storage::url($transaction->product->galleries->first()->photos) }}"
                              class="w-100" />
                          </div>
                          <div class="col-md-4">
                            {{ $transaction->product->name }}
                          </div>
                          <div class="col-md-3">
                            {{ $transaction->transaction->user->name }}
                          </div>
                          <div class="col-md-3">
                            {{ $transaction->created_at }}
                          </div>
                          <div class="col-md-1 d-none d-md-block">
                            <img src="/images/dashboard-arrow-right.svg" alt="" />
                          </div>
                        </div>
                      </div>
                    </a>
                    @empty
                    <h1>HEHEHEHEHEHE</h1>
                    @endforelse
                  </div>
                </div>
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