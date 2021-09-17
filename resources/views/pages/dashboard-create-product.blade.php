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
                    "
                >
                    Dashboard
                </a>
                <a
                    href="{{ route('dashboard-product') }}"
                    class="list-group-item list-group-item-action {{ (request()->is('dashboard/products*')) ? 'active' : '' }}"
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
                    <div
                        class="collapse navbar-collapse"
                        id="navbarResponsive"
                    >
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
                                    Hi, {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item"
                                        >Dashboard</a
                                    >
                                    <a href="#" class="dropdown-item"
                                        >Settings</a
                                    >
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item"
                                        >Logout</a
                                    >
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
                                <a href="#" class="nav-link">
                                    Hi, {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="#"
                                    class="nav-link d-inline-block"
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
                        <h2 class="dashboard-heading-title">
                            Jual Barang
                        </h2>
                        <p
                            class="
                                dashboard-heading-subtitle
                                text-muted
                            "
                        >
                            Jual barang kamu disini
                        </p>
                    </div>
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('dashboard-product-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
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
                                                    name="name"
                                                    id="name"
                                                    class="form-control"
                                                    autofocus
                                                    autocomplete="none"
                                                    value="Sepatu Keren"
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
                                                    name="price"
                                                    id="price"
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
                                                    name="categories_id"
                                                    id=""
                                                    required
                                                    class="form-control"
                                                >
                                                @foreach ($categories as $category)
                                                    <option
                                                        value="{{ $category->id }}"
                                                    >
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="descriptions"
                                                >Description</label
                                            >
                                            <textarea
                                                name="descriptions"
                                                id="descriptions"
                                            ></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label
                                                    for="thumbnails"
                                                    class="mt-2"
                                                    >Thumbnails</label
                                                >
                                                <input
                                                    type="file"
                                                    name="photo"
                                                    id=""
                                                    class="
                                                        form-control
                                                        ml-0
                                                        mb-1
                                                    "
                                                />
                                                <p
                                                    class="
                                                        text-muted
                                                        mt-1
                                                    "
                                                >
                                                    Kamu bisa memilih
                                                    gambar lebih dari
                                                    satu
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div
                                                class="
                                                    form-group
                                                    text-right
                                                "
                                            >
                                                <button
                                                    type="submit"
                                                    class="
                                                        btn btn-success
                                                        text-right
                                                    "
                                                >
                                                    Upload Product
                                                </button>
                                            </div>
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
        CKEDITOR.replace("descriptions");
    </script>
    <script>
    function thisFileUpload() {
        document.getElementById("file").click();
    }
    </script>
@endpush
