@extends('layouts.dashboard') @section('title') Dashboard Products Page
@endsection @section('content')
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
                    href="/dashboard.html"
                    class="list-group-item list-group-item-action"
                >
                    Dashboard
                </a>
                <a
                    href=""
                    class="list-group-item list-group-item-action active"
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
                        <h2 class="dashboard-heading-title">My Products</h2>
                        <p class="dashboard-heading-subtitle">
                            Manage it well and get some money
                        </p>
                    </div>
                    <div class="dashboard-content">
                        <div class="row">
                            <div class="col-12">
                                <a
                                    href="/dashboard-create-products.html"
                                    class="ml-2 btn btn-success"
                                    >Add New Product</a
                                >
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <a
                                    href="/dashboard-details-products.html"
                                    class="card card-dashboard-product d-block"
                                >
                                    <div class="card-body">
                                        <img
                                            src="/images/product-card-1.png"
                                            alt=""
                                            class="w-100 mb-2"
                                        />
                                        <div class="product-title">
                                            Cup Holder
                                        </div>
                                        <div class="product-category">
                                            Home Appliance
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <a
                                    href="/dashboard-details-products.html"
                                    class="card card-dashboard-product d-block"
                                >
                                    <div class="card-body">
                                        <img
                                            src="/images/product-card-1.png"
                                            alt=""
                                            class="w-100 mb-2"
                                        />
                                        <div class="product-title">
                                            Cup Holder
                                        </div>
                                        <div class="product-category">
                                            Home Appliance
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <a
                                    href="/dashboard-details-products.html"
                                    class="card card-dashboard-product d-block"
                                >
                                    <div class="card-body">
                                        <img
                                            src="/images/product-card-1.png"
                                            alt=""
                                            class="w-100 mb-2"
                                        />
                                        <div class="product-title">
                                            Cup Holder
                                        </div>
                                        <div class="product-category">
                                            Home Appliance
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <a
                                    href="/dashboard-details-products.html"
                                    class="card card-dashboard-product d-block"
                                >
                                    <div class="card-body">
                                        <img
                                            src="/images/product-card-1.png"
                                            alt=""
                                            class="w-100 mb-2"
                                        />
                                        <div class="product-title">
                                            Cup Holder
                                        </div>
                                        <div class="product-category">
                                            Home Appliance
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <a
                                    href="/dashboard-details-products.html"
                                    class="card card-dashboard-product d-block"
                                >
                                    <div class="card-body">
                                        <img
                                            src="/images/product-card-1.png"
                                            alt=""
                                            class="w-100 mb-2"
                                        />
                                        <div class="product-title">
                                            Cup Holder
                                        </div>
                                        <div class="product-category">
                                            Home Appliance
                                        </div>
                                    </div>
                                </a>
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
