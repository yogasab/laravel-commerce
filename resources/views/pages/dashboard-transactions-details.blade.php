@extends('layouts.dashboard') 

@section('title') 
  Dashboard Products Page
@endsection 

@section('content')
  <div class="page-dashboard">
    <div class="d-flex" id="wrapper" data-aos="fade-right">
      <!-- Sidebar -->
      <div class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
          <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
        </div>
        <div class="list-group list-group-flush">
          <a
            href="/dashboard.html"
            class="list-group-item list-group-item-action active"
          >
            Dashboard
          </a>
          <a
            href="/dashboard-products.html"
            class="list-group-item list-group-item-action"
          >
            My Products
          </a>
          <a
            href="/dashboard-transactions.html"
            class="list-group-item list-group-item-action"
          >
            Transactions
          </a>
          <a
            href="/dashboard-settings.html"
            class="list-group-item list-group-item-action"
          >
            Store Settings
          </a>
          <a
            href="/dashboard-account.html"
            class="list-group-item list-group-item-action"
          >
            My Account
          </a>
          <a href="" class="list-group-item list-group-item-action">
            Logout
          </a>
        </div>
      </div>

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
          data-aos="fade-down"
        >
          <div class="container-fluid">
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarResponsive"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <!-- Desktop Menu -->
              <ul class="navbar-nav d-none d-lg-flex ml-auto">
                <li class="nav-item dropdown">
                  <a
                    href=""
                    class="nav-link"
                    id="navbarDropwdown"
                    role="button"
                    data-toggle="dropdown"
                  >
                    <img
                      src="/images/icon-user.png"
                      alt=""
                      class="rounded-circle mr-2 profile-picture"
                    />
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
        <div
          class="section-content section-dashboard-home"
          data-aos="fade-up"
        >
          <div class="container-fluid">
            <div class="dashboard-heading mt-3 ml-2">
              <h2 class="dashboard-heading-title">#STORE382</h2>
              <p class="dashboard-heading-subtitle">Transactions Details</p>
            </div>
            <div class="dashboard-content" id="transactionDetails">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-md-4">
                          <img
                            src="/images/product-details-dashboard.png"
                            alt=""
                            class="w-75"
                          />
                        </div>
                        <div class="col-12 col-md-8">
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nama Pelanggan</div>
                              <div class="product-subtitle">Yoga Baskoro</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nama Produk</div>
                              <div class="product-subtitle">Cup Holder</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Tanggal Transaksi
                              </div>
                              <div class="product-subtitle">
                                Kamis, 9 Agustus 2021
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Status Pembayaran
                              </div>
                              <div class="product-subtitle">Pending</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Total Transaksi</div>
                              <div class="product-subtitle">Rp 1.762.999</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nomor Telepon</div>
                              <div class="product-subtitle">
                                +62 02102191729
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 mt-4">
                          <h5>Informasi Pengiriman</h5>
                        </div>
                        <div class="col-12">
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">Alamat</div>
                              <div class="product-subtitle">
                                Jalan Remaja 1
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Alamat</div>
                              <div class="product-subtitle">
                                Jalan Remaja 2
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Provinsi</div>
                              <div class="product-subtitle">DKI Jakarta</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Kota</div>
                              <div class="product-subtitle">
                                Jakarta Timur
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Alamat</div>
                              <div class="product-subtitle">
                                Jalan Remaja 1
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Negara</div>
                              <div class="product-subtitle">Indonesia</div>
                            </div>
                            <div class="col-12 col-md-3">
                              <div class="product-title">
                                Status Pengiriman
                              </div>
                              <select
                                name="status"
                                id="status"
                                class="form-control"
                                v-model="status"
                              >
                                <option value="PENDING">Pending</option>
                                <option value="SHIPPING">Shipping</option>
                                <option value="ARRIVED">Arrived</option>
                              </select>
                            </div>
                            <template v-if="status == 'SHIPPING'">
                              <div class="col-md-3">
                                <div class="product-title">No Resi</div>
                                <input
                                  type="text"
                                  name="resi"
                                  id="resi"
                                  v:model="resi"
                                  class="form-control"
                                />
                              </div>
                              <div class="col-md-2 mt-4">
                                <button
                                  type="submit"
                                  class="btn btn-outline-success btn-block"
                                >
                                  Update Resi
                                </button>
                              </div>
                            </template>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 text-right">
                          <button
                            type="submit"
                            class="btn btn-lg btn-success mt-5"
                          >
                            Save Now
                          </button>
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
        status: "SHIPPING",
        resi: "JKT193789783",
      },
    });
  </script>
@endpush
