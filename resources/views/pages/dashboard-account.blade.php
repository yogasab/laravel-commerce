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
        <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action">
          Dashboard
        </a>
        <a href="{{ route('dashboard-product') }}" class="list-group-item list-group-item-action">
          My Products
        </a>
        <a href="{{ route('dashboard-transactions') }}" class="list-group-item list-group-item-action">
          Transactions
        </a>
        <a href="{{ route('dashboard-store') }}" class="list-group-item list-group-item-action ">
          Store Settings
        </a>
        <a href="{{ route('dashboard-settings') }}"
          class="list-group-item list-group-item-action {{ (request()->is('dashboard/account*')) ? 'active' : '' }}">
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
                  <img src="/images/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture" />
                  Hi, {{ $user->name }}
                </a>
                <div class="dropdown-menu">
                  <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                  <a href="{{ route('dashboard-store') }}" class="dropdown-item">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a href="" class="dropdown-item">Logout</a>
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
                <a href="#" class="nav-link"> Hi, {{ $user->name }}</a>
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
            <h2 class="dashboard-heading-title">My Account</h2>
            <p class="dashboard-heading-subtitle">
              Update your current profile
            </p>
          </div>
          <div class="dashboard-content">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form action="{{ route('dashboard-setting-update', 'dashboard-settings') }}" method="POST"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-2" data-aos="fade-up" data-aos-delay="200" id="locations">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="email">Email
                              Address</label>
                            <input type="text" class="form-control" id="email" name="email"
                              value="{{ $user->email }}" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="address_one">Address</label>
                            <input type="text" class="form-control" id="address_one" name="address_one"
                              value="{{ $user->address_one }}" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="addressTwo">Address 2</label>
                            <input type="text" class="form-control" id="addressTwo" name="addressTwo"
                              value="{{ $user->address_two }}" />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="provinces_id">Provinsi/Province</label>
                            <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id">
                              <option v-for="province in provinces" :value="province.id">
                                @{{ province.name }}
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="kota">Kota/City</label>
                            <select name="regencies_id" id="regencies_id" class="form-control" v-model="regencies_id">
                              <option v-for="regency in regencies" :value="regency.id">
                                @{{ regency.name }}
                              </option>
                              <option v-else="" :value="">
                                Kota
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="zip_code">Kode Pos/Postal
                              Code</label>
                            <input type="text" class="form-control" id="zip_code" name="zip_code"
                              value="{{ $user->zip_code }}" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="country">Negara/Country</label>
                            <input type="text" class="form-control" id="country" name="country" value="Indonesia" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="phone_number">Mobile</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                              value="{{ $user->phone_number }}" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col text-right">
                          <button type="submit" class="btn btn-success">
                            Update Account
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

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
  var gallery = new Vue({
        el: "#locations",
        mounted() {
            AOS.init();
            this.getProvincesData();
        },
        data: {
            provinces: null,
            regencies: null,
            provinces_id: null,
            regencies_id: null
        },
        methods: {
            getProvincesData(){
                var self = this;
                axios.get('{{ route('provinces') }}').then(function(response){
                    self.provinces = response.data;
                });
            },
            getRegenciesData(){
                var self = this;
                axios.get('{{ url('api/regencies/') }}/'+self.provinces_id).then(function(response){
                    self.regencies = response.data;
                });
            },
        },
        watch: {
            provinces_id: function(val, oldVal){
                this.regencies_id = null;
                this.getRegenciesData();
            }
        }
    });
</script>
@endpush