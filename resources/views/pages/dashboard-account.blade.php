@extends('layouts.dashboard') @section('title') Dashboard Settings @endsection
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
                        <h2 class="dashboard-heading-title">My Account</h2>
                        <p class="dashboard-heading-subtitle">
                            Update your current profile
                        </p>
                    </div>
                    <div class="dashboard-content">
                        <div class="row">
                            <div class="col-12">
                                <form action="">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="row mb-2"
                                                data-aos="fade-up"
                                                data-aos-delay="200"
                                            >
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            >Name</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="name"
                                                            name="name"
                                                            value="Yoga Baskoro"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email"
                                                            >Email
                                                            Address</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="email"
                                                            name="email"
                                                            value="yogasab40@gmail.com"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="addressOne"
                                                            >Address</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="addressOne"
                                                            name="addressOne"
                                                            value="Jalan Remaja 1"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="addressTwo"
                                                            >Address 2</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="addressTwo"
                                                            name="addressTwo"
                                                            value="yogasab40@gmail.com"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="provinsi"
                                                            >Provinsi/Province</label
                                                        >
                                                        <select
                                                            name="provinsi"
                                                            id="provinsi"
                                                            class="form-control"
                                                        >
                                                            <option
                                                                value="DKI Jakarta"
                                                            >
                                                                DKI Jakarta
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="kota"
                                                            >Kota/City</label
                                                        >
                                                        <select
                                                            name="kota"
                                                            id="kota"
                                                            class="form-control"
                                                        >
                                                            <option
                                                                value="Jakarta Timur"
                                                            >
                                                                Jakarta Timur
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="kodePos"
                                                            >Kode Pos/Postal
                                                            Code</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="kodePos"
                                                            name="kodePos"
                                                            value="13540"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="negara"
                                                            >Negara/Country</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="negara"
                                                            name="negara"
                                                            value="Indonesia"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="mobile"
                                                            >Mobile</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="mobile"
                                                            name="mobile"
                                                            value="+62 123123123"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-right">
                                                    <button
                                                        class="btn btn-success"
                                                    >
                                                        Update Account
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
