@extends('layouts.app')
@section('title')
  Store Cart Page
@endsection
@section('content')
  <!-- Page Content -->
  <div class="page-content page-cart">
      <!-- Breadcrumb -->
      <section
          class="store-breadcrumbs"
          data-aos="fade-down"
          data-aos-delay="100"
      >
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                  <a href="/">Home</a>
                              </li>
                              <li class="breadcrumb-item active">Cart</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </section>

      <section class="store-cart">
          <div class="container">
              <div class="row" data-aos="fade-up" data-aos-delay="200">
                  <div class="col-12 table-responsive">
                      <table class="table table-borderless table-cart">
                          <thead>
                              <tr>
                                  <td>Image</td>
                                  <td>Name &amp; Seller</td>
                                  <td>Price</td>
                                  <td>Action</td>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td style="width: 20%">
                                      <img
                                          src="/images/product-cart-1.jpg"
                                          alt=""
                                          class="cart-image w-100"
                                      />
                                  </td>
                                  <td style="width: 35%">
                                      <div class="product-title">
                                          The Coziest Couch
                                      </div>
                                      <div class="product-subtitle">
                                          by John Doe
                                      </div>
                                  </td>
                                  <td style="width: 30%">
                                      <div class="product-title">
                                          Rp 2.900.000
                                      </div>
                                      <div class="product-subtitle">IDR</div>
                                  </td>
                                  <td style="width: 20%">
                                      <a href="" class="btn btn-remove-cart"
                                          >Remove</a
                                      >
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%">
                                      <img
                                          src="/images/product-cart-2.jpg"
                                          alt=""
                                          class="cart-image w-100"
                                      />
                                  </td>
                                  <td style="width: 35%">
                                      <div class="product-title">
                                          Nike Air Jordan
                                      </div>
                                      <div class="product-subtitle">
                                          by Alex Smith
                                      </div>
                                  </td>
                                  <td style="width: 30%">
                                      <div class="product-title">
                                          Rp 4.900.000
                                      </div>
                                      <div class="product-subtitle">IDR</div>
                                  </td>
                                  <td style="width: 20%">
                                      <a href="" class="btn btn-remove-cart"
                                          >Remove</a
                                      >
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%">
                                      <img
                                          src="/images/product-cart-3.jpg"
                                          alt=""
                                          class="cart-image w-100"
                                      />
                                  </td>
                                  <td style="width: 35%">
                                      <div class="product-title">Cup Holder</div>
                                      <div class="product-subtitle">
                                          by Anna Hanne
                                      </div>
                                  </td>
                                  <td style="width: 30%">
                                      <div class="product-title">
                                          Rp 1.100.000
                                      </div>
                                      <div class="product-subtitle">IDR</div>
                                  </td>
                                  <td style="width: 20%">
                                      <a href="" class="btn btn-remove-cart"
                                          >Remove</a
                                      >
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12" data-aos="fade-up" data-aos-delay="150">
                      <hr />
                  </div>
                  <div class="col-12">
                      <h2>Shipping Details</h2>
                  </div>
              </div>
              <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="addressOne">Address 1</label>
                          <input
                              type="text"
                              class="form-control"
                              id="addressOne"
                              name="addressOne"
                              value="Jalan Bungung 12"
                          />
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="addressTwo">Address 2</label>
                          <input
                              type="text"
                              class="form-control"
                              id="addressTwo"
                              name="addressTwo"
                              value="Jalan Matraman Raya"
                          />
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="provinsi">Provinsi/Province</label>
                          <select
                              name="provinsi"
                              id="provinsi"
                              class="form-control"
                          >
                              <option value="DKI Jakarta">DKI Jakarta</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="kota">Kota/City</label>
                          <select name="kota" id="kota" class="form-control">
                              <option value="Jakarta Timur">Jakarta Timur</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="kodePos">Kode Pos/Postal Code</label>
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
                          <label for="negara">Negara/Country</label>
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
                          <label for="mobile">Mobile</label>
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
                  <div class="col-12" data-aos="fade-up" data-aos-delay="150">
                      <hr />
                  </div>
                  <div class="col-12" data-aos="fade-up">
                      <h2>Payment Information</h2>
                  </div>
              </div>
              <div class="row" data-aos="fade-up" data-aos-delay="200">
                  <div class="col-4 col-md-2">
                      <div class="product-title">Rp 11.000</div>
                      <div class="product-subtitle">Ongkos Kirim</div>
                  </div>
                  <div class="col-4 col-md-3">
                      <div class="product-title">Rp 3000</div>
                      <div class="product-subtitle">Asuransi Pengiriman</div>
                  </div>
                  <div class="col-4 col-md-3">
                      <div class="product-title text-success">Rp 14.000</div>
                      <div class="product-subtitle">Total Biaya Pengiriman</div>
                  </div>
                  <div class="col-8 col-md-4">
                      <a
                          href="/success.html"
                          class="btn btn-success btn-block mt-4"
                      >
                          Checkout Now</a
                      >
                  </div>
              </div>
          </div>
      </section>
  </div>
@endsection