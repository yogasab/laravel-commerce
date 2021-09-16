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
                <img
                    src="/images/dashboard-store-logo.svg"
                    alt=""
                    class="my-4"
                />
            </div>
            <div class="list-group list-group-flush">
                <a
                    href="{{ route('dashboard') }}"
                    class="
                        list-group-item list-group-item-action
                        {{ (request()->is('dashboard*')) ? 'active' : '' }}
                    "
                >
                    Dashboard
                </a>
                <a
                    href="{{ route('dashboard-product') }}"
                    class="list-group-item list-group-item-action {{ (request()->is('dashboard/product*')) ? 'active' : '' }}"
                >
                    My Products
                </a>
                <a
                    href="{{ route('dashboard-transactions') }}"
                    class="list-group-item list-group-item-action {{ (request()->is('dashboard/transactions*')) ? 'active' : '' }}"
                >
                    Transactions
                </a>
                <a
                    href="{{ route('dashboard-store') }}"
                    class="list-group-item list-group-item-action"
                >
                    Store Settings
                </a>
                <a
                    href="{{ route('dashboard-settings') }}"
                    class="list-group-item list-group-item-action"
                >
                    My Account
                </a>
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                >
                    Logout
                </a>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav
                class="
                    navbar navbar-expand-lg navbar-light navbar-store
                    fixed-top
                "
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
                                        class="
                                            rounded-circle
                                            mr-2
                                            profile-picture
                                        "
                                    />
                                    Hi, Anjani
                                </a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item"
                                        >Dashboard</a
                                    >
                                    <a href="#" class="dropdown-item"
                                        >Settings</a
                                    >
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">Logout</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="#"
                                    class="nav-link d-inline-block mt-2"
                                >
                                    <img
                                        src="/images/icon-cart-empty.svg"
                                        alt=""
                                    />
                                </a>
                            </li>
                        </ul>

                        <!-- Smartphone Menu -->
                        <ul class="navbar-nav d-block d-lg-none">
                            <li class="nav-item">
                                <a href="#" class="nav-link"> Hi, Anjani </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link d-inline-block"
                                    >Cart</a
                                >
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
                        <h2 class="dashboard-heading-title">Cup Holder</h2>
                        <p class="dashboard-heading-subtitle text-muted">
                            Cup Holder details
                        </p>
                    </div>
                    <div class="dashboard-content">
                        <div class="row">
                            <div class="col-12">
                                <form action="">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="productName"
                                                            >Product Name</label
                                                        >
                                                        <input
                                                            type="text"
                                                            name="toko"
                                                            id="toko"
                                                            class="form-control"
                                                            autofocus
                                                            autocomplete="none"
                                                            value="Cup Holder"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="price"
                                                            >Price</label
                                                        >
                                                        <input
                                                            type="number"
                                                            name="toko"
                                                            id="toko"
                                                            class="form-control"
                                                            autofocus
                                                            autocomplete="none"
                                                            value="200"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="kategori"
                                                            >Kategori</label
                                                        >
                                                        <select
                                                            name="kategori"
                                                            disabled
                                                            class="form-control"
                                                        >
                                                            <option
                                                                name="kategori"
                                                                value="Peralatan Rumah"
                                                            >
                                                                Pilih Kategori
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="description"
                                                        >Description</label
                                                    >
                                                    <textarea
                                                        name="description"
                                                        id="description"
                                                    ></textarea>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <div class="form-group">
                                                        <button
                                                            type="submit"
                                                            class="
                                                                btn
                                                                btn-success
                                                                btn-block
                                                            "
                                                        >
                                                            Update Product
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="gallery-container">
                                                    <img
                                                        src="/images/product-details-1.jpg"
                                                        class="w-100"
                                                        alt=""
                                                    />
                                                    <a
                                                        href="#"
                                                        class="delete-gallery"
                                                    >
                                                        <img
                                                            src="/images/icon-delete.svg"
                                                            alt=""
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="gallery-container">
                                                    <img
                                                        src="/images/product-details-2.jpg"
                                                        class="w-100"
                                                        alt=""
                                                    />
                                                    <a
                                                        href="#"
                                                        class="delete-gallery"
                                                    >
                                                        <img
                                                            src="/images/icon-delete.svg"
                                                            alt=""
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="gallery-container">
                                                    <img
                                                        src="/images/product-details-3.jpg"
                                                        class="w-100"
                                                        alt=""
                                                    />
                                                    <a
                                                        href="#"
                                                        class="delete-gallery"
                                                    >
                                                        <img
                                                            src="/images/icon-delete.svg"
                                                            alt=""
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input
                                                    type="file"
                                                    name="file"
                                                    id="file"
                                                    multiple
                                                    style="display: none"
                                                />
                                                <button
                                                    type="submit"
                                                    class="
                                                        btn btn-info btn-block
                                                        mt-3
                                                    "
                                                    onclick="thisFileUpload()"
                                                >
                                                    Add photo
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
@endsection 

@push('addon-script')
  <script>
      $("#menu-toggle").click(function (e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
      });
  </script>
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace("description");
  </script>
  <script>
    function thisFileUpload() {
      document.getElementById("file").click();
    }
  </script>
@endpush
