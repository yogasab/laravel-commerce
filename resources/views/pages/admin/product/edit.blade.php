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
                <a href="{{ route('product.index') }}" class="list-group-item list-group-item-action {{ (request()->is('admin/product*')) ? 'active' : '' }}">
                    Products
                </a>
                <a
                    href="{{ route('category.index') }}"
                    class="list-group-item list-group-item-action"
                >
                    Category
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
                                        route('product.update', $item->id)
                                    }}"
                                    method="POST"
                                    enctype="multipart/form-data"
                                >
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="name">Name</label>
                                          <input type="text" value="{{ $item->name }}" name="name" class="form-control" required>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="users_id">Pemilik</label>
                                          <select name="users_id" id="" required class="form-control">
                                            <option value="{{ $item->users_id }}" selected>{{ $item->user->name }}</option>
                                            @foreach ($users as $user)
                                              <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="categories_id">Kategori</label>
                                          <select name="categories_id" id="" required class="form-control">
                                            <option value="{{ $item->categories_id }}" selected>{{ $item->category->name }}</option>
                                            @foreach ($categories as $category)
                                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="price">Harga</label>
                                          <input type="number" value="{{ $item->price }}" name="price" class="form-control" id="" required>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="descriptions">Deskripsi</label>
                                          <textarea name="descriptions" id="descriptions"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col text-right">
                                        <button type="submit" class="btn btn-success">
                                          Update
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
@endpush