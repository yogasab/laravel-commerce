@extends('layouts.auth') 

@section('title')
    Register
@endsection

@section('content')
<div class="page-content page-auth" id="register">
  <div class="section-auth-store" data-aos="fade-up">
    <div class="container">
      <div
        class="
          row
          align-items-center
          row-login
          ml-3
          justify-content-center
        "
      >
        <div class="col-lg-5">
          <h2>
              Mulai kegiatan jual beli <br />
              dengan cara terbaru
          </h2>
          <form method="POST" class="mt-3" action="{{ route('register') }}">
              @csrf
              <div class="form-group">
                  <label for="name">Full Name</label>
                  <input
                      type="text"
                      name="name"
                      id="name"
                      class="form-control w-75 @error('name') is-invalid @enderror"
                      value="{{ old('name') }}"
                      v-model="name"
                      autofocus
                      autocomplete="none"
                      required
                      autofocus
                  />
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="email">Email Address</label>
                  <input
                      id="email"
                      type="email"
                      name="email"
                      @change="checkForEmailAvailability()"
                      class="form-control w-75 @error('email') is-invalid @enderror"
                      :class="{ 'is-invalid' : this.email_unavailable }"
                      value="{{ old('email') }}"
                      required
                      autocomplete="email"
                      v-model="email"
                  />
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                    id="password"
                    type="password"
                    class="
                        form-control w-75
                        @error('password')
                        is-invalid
                        @enderror
                    "
                    name="password"
                    required
                    autocomplete="new-password"
                />
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                  <label
                    for="password-confirm"
                    >{{ __("Confirm Password") }}</label
                  >
                  <input
                      id="password-confirm"
                      type="password"
                      class="form-control @error('password_confirmation') is-invalid @enderror w-75"
                      name="password_confirmation"
                      required
                      autocomplete="new-password"
                  />
                  @error('password_confirm')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="password">Toko</label>
                  <p class="text-muted">
                    Apakah anda juga ingin membuka toko?
                  </p>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input
                      type="radio"
                      name="is_store_open"
                      id="openStoreTrue"
                      class="custom-control-input"
                      v-model="is_store_open"
                      :value="true"
                    />
                    <label
                      for="openStoreTrue"
                      class="custom-control-label"
                      >Iya, boleh</label
                    >
                  </div>
                  <div
                    class="
                      custom-control
                      custom-radio
                      custom-control-inline
                    "
                  >
                    <input
                        type="radio"
                        name="is_store_open"
                        id="openStoreFalse"
                        class="custom-control-input"
                        v-model="is_store_open"
                        :value="false"
                    />
                      <label
                          for="openStoreFalse"
                          class="custom-control-label"
                          >Enggak, makasih</label
                      >
                  </div>
                  <div class="form-group" v-if="is_store_open">
                      <label for="store_name" class="mt-2">Nama Toko</label>
                      <input
                          type="text"
                          v-model="store_name"
                          name="store_name"
                          id="store_name"
                          class="form-control @error('store_name') is-invalid @enderror w-75"
                          required
                          autofocus
                          autocomplete="none"
                      />
                      @error('store_name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group" v-if="is_store_open">
                  <label for="kategori">Kategori</label>
                  <select name="categories_id" id="kategori" class="form-control w-75">
                      @foreach ($categories as $category)
                          <option name="categories_id" value="{{ $category->id }}">
                            {{ $category->name }}
                          </option>
                      @endforeach
                  </select>
              </div>
              <button
                type="submit"
                class="btn btn-success w-75 mt-3"
                :disabled="this.email_unavailable"
              >
                Register Now
              </button>
              <a href="{{ route('login') }}" class="btn btn-signup w-75 mt-3">
                Back to login
              </a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container" style="display: none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Register") }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label
                                for="name"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Name") }}</label
                            >
                            <div class="col-md-6">
                                <input
                                    id="name"
                                    type="text"
                                    class="
                                        form-control
                                        @error('name')
                                        is-invalid
                                        @enderror
                                    "
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    autofocus
                                />

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                for="email"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("E-Mail Address") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="email"
                                    type="email"
                                    class="
                                        form-control
                                        @error('email')
                                        is-invalid
                                        @enderror
                                    "
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                for="password"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Password") }}</label
                            >
                            <div class="col-md-6">
                                <input
                                    id="password"
                                    type="password"
                                    class="
                                        form-control
                                        @error('password')
                                        is-invalid
                                        @enderror
                                    "
                                    name="password"
                                    required
                                    autocomplete="new-password"
                                />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                for="password-confirm"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Confirm Password") }}</label
                            >
                            <div class="col-md-6">
                                <input
                                    id="password-confirm"
                                    type="password"
                                    class="form-control"
                                    name="password_confirmation"
                                    required
                                    autocomplete="new-password"
                                />
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __("Register") }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        Vue.use(Toasted);
        var register = new Vue({
            el: "#register",
            mounted() {
              AOS.init();
            },
            methods: {
              checkForEmailAvailability(){
                var self = this;
                axios.get('{{ route('api-register-check') }}', {
                  params: {
                    email: this.email
                  }
                }).then(function(response){
                  if(response.data == 'Available'){
                    self.$toasted.success(
                      "Email anda tersedia, silahkan lanjutkan registrasi",
                      {
                        position: "top-center",
                        className: "rounded",
                        duration: 2000,
                      }
                    );
                    self.email_unavailable = false;
                  } else {
                    self.$toasted.error(
                      "Maaf email anda sudah terdaftar, silahkan coba email lain",
                      {
                        position: "top-center",
                        className: "rounded",
                        duration: 2000,
                      }
                    );
                    self.email_unavailable = true;
                  }
                });
              }
            },
            data() {
                return {
                name: "Yoga Baskoro",
                email: "yogasab40@gmail.com",
                store_name: "PT Mencari Cinta Sejati",
                is_store_open: true,
                email_unavailable: false
              }
            },
        });
    </script>
    <script src="/script/navbar-scroll.js"></script>
@endpush
