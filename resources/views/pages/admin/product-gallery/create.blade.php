@extends('layouts.admin') 
@section('title') Products Galery @endsection
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
                <a href="{{ route('product.index') }}" class="list-group-item list-group-item-action">
                  Products
                </a>
                <a
                  href="{{ route('category.index') }}"
                  class="list-group-item list-group-item-action"
                >
                  Category
                </a>
                <a
                  href="{{ route('product-gallery.index') }}"
                  class="list-group-item list-group-item-action {{ (request()->is('admin/product-gallery*')) ? 'active' : '' }}"
                >
                  Gallery
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  Transactions
                </a>
                <a href="{{ route('user.index') }}" class="list-group-item list-group-item-action">
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
                        <h2 class="dashboard-heading-title">Galleries</h2>
                        <p class="dashboard-heading-subtitle">
                            Create a new product gallery
                        </p>
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
                                    <form action="{{ route('product-gallery.store') }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="products_id">Nama Produk</label>
                                            <select name="products_id" class="form-control" id="">
                                              @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                              @endforeach
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="photos">Foto Produk</label>
                                            <input type="file" name="photos" class="form-control" required>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col text-right">
                                          <button type="submit" class="btn btn-success">
                                            Save
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
