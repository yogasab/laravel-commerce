@extends('layouts.admin') 

@section('title') Admin Dashboard @endsection

@section('content')
<div class="page-dashboard">
    <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-center">
                <img
                    src="/images/admin-icon.svg"
                    alt=""  
                    class="my-4" style="max-width: 120px"
                />
            </div>
            <div class="list-group list-group-flush">
                <a
                    href="#"
                    class="list-group-item list-group-item-action active"
                >
                    Dashboard
                </a>
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                >
                    Products
                </a>
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                >
                    Categories
                </a>
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                >
                    Transactions
                </a>
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                >
                    Users
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
                            
                        </ul>

                        <!-- Smartphone Menu -->
                        <ul class="navbar-nav d-block d-lg-none">
                            
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
                        <h2 class="dashboard-heading-title">Admin Dashboard</h2>
                        <p class="dashboard-heading-subtitle">
                            Admintrator Admin Panel
                        </p>
                    </div>
                    <div class="dashboard-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="dashboard-card-title">
                                            Customers
                                        </div>
                                        <div class="dashboard-card-subtitle">
                                            {{ $customers }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="dashboard-card-title">
                                            Revenues
                                        </div>
                                        <div class="dashboard-card-subtitle">
                                            Rp {{ $revenues }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="dashboard-card-title">
                                            Customer
                                        </div>
                                        <div class="dashboard-card-subtitle">
                                            {{ $customers }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 mt-2 ml-2">
                                <h5 class="mb-3">Recent Transactions</h5>
                                <a
                                    href="/dashboard-transactions.details.html"
                                    class="card card-list"
                                >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img
                                                    src="/images//dashboard-icon-product-1.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="col-md-4">
                                                Cup Holder
                                            </div>
                                            <div class="col-md-3">John Doe</div>
                                            <div class="col-md-3">
                                                9 September, 2021
                                            </div>
                                            <div
                                                class="
                                                    col-md-1
                                                    d-none d-md-block
                                                "
                                            >
                                                <img
                                                    src="/images/dashboard-arrow-right.svg"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a
                                    href="/dashboard-transactions.details.html"
                                    class="card card-list"
                                >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img
                                                    src="/images//dashboard-icon-product-1.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="col-md-4">
                                                Cup Holder
                                            </div>
                                            <div class="col-md-3">John Doe</div>
                                            <div class="col-md-3">
                                                9 September, 2021
                                            </div>
                                            <div
                                                class="
                                                    col-md-1
                                                    d-none d-md-block
                                                "
                                            >
                                                <img
                                                    src="/images/dashboard-arrow-right.svg"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a
                                    href="/dashboard-transactions.details.html"
                                    class="card card-list"
                                >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img
                                                    src="/images//dashboard-icon-product-1.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="col-md-4">
                                                Cup Holder
                                            </div>
                                            <div class="col-md-3">John Doe</div>
                                            <div class="col-md-3">
                                                9 September, 2021
                                            </div>
                                            <div
                                                class="
                                                    col-md-1
                                                    d-none d-md-block
                                                "
                                            >
                                                <img
                                                    src="/images/dashboard-arrow-right.svg"
                                                    alt=""
                                                />
                                            </div>
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
@endsection 

@push('addon-script')
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
@endpush
