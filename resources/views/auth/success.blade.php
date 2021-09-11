@extends('layouts.success')

@section('title')
    Registration Success
@endsection

@section('content')
  <div class="page-content page-success">
    <div class="section-success" data-aos="zoom-in">
      <div class="container">
        <div class="row align-items-center row-login justify-content-center">
          <div class="col-lg-6 text-center">
            <img src="/images/success.svg" alt="" class="mb-5" />
            <h2>Registrasi Berhasil!</h2>
            <p>
              Kamu sudah berhasil terdaftar bersama kami,<br />
              mulai berbelanja!
            </p>
            <div class="mt-4">
              <a
                class="btn btn-success w-50 mt-3 mb-3"
                href="/dashboard.html"
              >
                My Dashboard</a
              >
              <a href="/" class="btn btn-signup w-50">Go to shooping.</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection