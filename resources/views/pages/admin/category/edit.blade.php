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
                    class="my-4"
                    style="max-width: 120px"
                />
            </div>
            <div class="list-group list-group-flush">
                <a
                    href="{{ route('admin-dashboard') }}"
                    class="list-group-item list-group-item-action"
                >
                    Dashboard
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Products
                </a>
                <a
                    href="{{ route('category.index') }}"
                    class="list-group-item list-group-item-action {{ (request()->is('admin/category*')) ? 'active' : '' }}"
                >
                    Category
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Transactions
                </a>
                <a href="#" class="list-group-item list-group-item-action">
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
                        <ul class="navbar-nav d-none d-lg-flex ml-auto"></ul>

                        <!-- Smartphone Menu -->
                        <ul class="navbar-nav d-block d-lg-none"></ul>
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
                        <h2 class="dashboard-heading-title">Edit</h2>
                        <p class="dashboard-heading-subtitle">Edit Category</p>
                    </div>
                    <div class="dashboard-content">
                        <div class="row">
                            <div class="col-md-12">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="card">
                                    <div class="card-body">
                                        <form
                                            action="{{
                                                route('category.update', $item->id)
                                            }}"
                                            method="POST"
                                            enctype="multipart/form-data"
                                        >
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            >Kategori</label
                                                        >
                                                        <input
                                                            type="text"
                                                            name="name"
                                                            class="form-control"
                                                            value="{{ $item->name }}"
                                                            required
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="photo"
                                                            >Foto</label
                                                        >
                                                        <input
                                                            type="file"
                                                            name="photo"
                                                            class="form-control"
                                                            value="{{ $item->photo }}"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-right">
                                                    <button
                                                        type="submit"
                                                        class="btn btn-success"
                                                    >
                                                        Update Now
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
@endsection
