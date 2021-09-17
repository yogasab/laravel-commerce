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
                  list-group-item list-group-item-action
              ">
          Dashboard
        </a>
        <a href="{{ route('dashboard-product') }}" class="list-group-item list-group-item-action ">
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
        <a href="#" class="list-group-item list-group-item-action">
          Logout
        </a>
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
                  Hi, Anjani
                </a>
                <div class="dropdown-menu">
                  <a href="#" class="dropdown-item">Dashboard</a>
                  <a href="#" class="dropdown-item">Settings</a>
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
                <a href="#" class="nav-link"> Hi, Anjani </a>
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
            <h2 class="dashboard-heading-title">#{{ $transactions->code }}</h2>
            <p class="dashboard-heading-subtitle">
              Transactions Details
            </p>
          </div>
          <div class="dashboard-content" id="transactionDetails">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12 col-md-4">
                        <img src="{{ Storage::url($transactions->product->galleries->first()->photos) }}" alt=""
                          class="w-75 rounded" />
                      </div>
                      <div class="col-12 col-md-8">
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="product-title">
                              Nama Pelanggan
                            </div>
                            <div class="product-subtitle">
                              {{ $transactions->transaction->user->name }}
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="product-title">
                              Nama Produk
                            </div>
                            <div class="product-subtitle">
                              {{ $transactions->product->name }}
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="product-title">
                              Tanggal Transaksi
                            </div>
                            <div class="product-subtitle">
                              {{ $transactions->created_at }}
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="product-title">
                              Status Pengiriman
                            </div>
                            <div class="product-subtitle">
                              {{ $transactions->shipping_status }}
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="product-title">
                              Total Transaksi
                            </div>
                            <div class="product-subtitle">
                              Rp {{ number_format($transactions->transaction->total_price) }}
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="product-title">
                              Nomor Telepon
                            </div>
                            <div class="product-subtitle">
                              {{ $transactions->transaction->user->phone_number }}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <form action="{{ route('dashboard-transactions-update', $transactions->id) }}" method="post"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-12 mt-4">
                          <h5>Informasi Pengiriman</h5>
                        </div>
                        <div class="col-12">
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Alamat
                              </div>
                              <div class="product-subtitle">
                                {{ $transactions->transaction->user->address_one }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Alamat
                              </div>
                              <div class="product-subtitle">
                                {{ $transactions->transaction->user->address_two }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Provinsi
                              </div>
                              <div class="product-subtitle">
                                {{ App\Models\Province::find($transactions->transaction->user->provinces_id)->name }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Kota
                              </div>
                              <div class="product-subtitle">
                                {{ App\Models\Regency::find($transactions->transaction->user->regencies_id)->name }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Kode Pos
                              </div>
                              <div class="product-subtitle">
                                {{ $transactions->transaction->user->zip_code }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Negara
                              </div>
                              <div class="product-subtitle">
                                {{ $transactions->transaction->user->country }}
                              </div>
                            </div>
                            <div class="col-12 col-md-3">
                              <div class="product-title">
                                Status Pengiriman
                              </div>
                              <select name="shipping_status" id="shipping_status" class="form-control" v-model="status">
                                <option value="PENDING">
                                  Pending
                                </option>
                                <option value="SHIPPING">
                                  Shipping
                                </option>
                                <option value="ARRIVED">
                                  Arrived
                                </option>
                              </select>
                            </div>
                            <template v-if="status == 'SHIPPING'">
                              <div class="col-md-3">
                                <div class="product-title">
                                  No Resi
                                </div>
                                <input type="text" name="resi" id="resi" v:model="resi" class=" form-control"
                                  required />
                              </div>
                              <div class="col-md-2 mt-4">
                                <button type="submit" class="btn btn-outline-success btn-block">
                                  Update Resi
                                </button>
                              </div>
                            </template>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 text-right">
                          <button type="submit" class="btn btn-lg btn-success mt-5">
                            Save Now
                          </button>
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
  </div>
</div>

@endsection @push('addon-script')
<script>
  $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<script src="/vendor/vue/vue.js"></script>
<script>
  var transactionDetails = new Vue({
        el: "#transactionDetails",
        data: {
            status: "{{ $transactions->shipping_status }}",
            resi:  "{{ $transactions->resi }}",
        },
    });
</script>
@endpush