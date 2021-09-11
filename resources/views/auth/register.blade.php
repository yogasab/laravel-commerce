@extends('layouts.auth') 

@section('title')
    Register
@endsection

@section('content')
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
                    <form action="" class="mt-3">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control w-75 is-valid"
                                v-model="name"
                                autofocus
                                autocomplete="none"
                            />
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control w-75 is-invalid"
                                v-model="email"
                            />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control w-75"
                            />
                        </div>
                        <div class="form-group">
                            <label for="password">Toko</label>
                            <p class="text-muted">
                                Apakah anda juga ingin membuka toko?
                            </p>
                            <div
                                class="
                                    custom-control
                                    custom-radio
                                    custom-control-inline
                                "
                            >
                                <input
                                    type="radio"
                                    name="isStoreOpen"
                                    id="openStoreTrue"
                                    class="custom-control-input"
                                    v-model="isStoreOpen"
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
                                    name="isStoreOpen"
                                    id="openStoreFalse"
                                    class="custom-control-input"
                                    v-model="isStoreOpen"
                                    :value="false"
                                />
                                <label
                                    for="openStoreFalse"
                                    class="custom-control-label"
                                    >Enggak, makasih</label
                                >
                            </div>
                            <div class="form-group" v-if="isStoreOpen">
                                <label for="toko" class="mt-2">Nama Toko</label>
                                <input
                                    type="text"
                                    name="toko"
                                    id="toko"
                                    class="form-control w-75 is-valid"
                                    v-model="toko"
                                    autofocus
                                    autocomplete="none"
                                />
                            </div>
                        </div>
                        <div class="form-group" v-if="isStoreOpen">
                            <label for="kategori">Kategori</label>
                            <select name="" disabled class="form-control w-75">
                                <option name="kategori" value="Peralatan Rumah">
                                    Pilih Kategori
                                </option>
                            </select>
                        </div>
                        <a
                            href="/dashboard.html"
                            class="btn btn-success w-75 mt-3"
                        >
                            Register Now
                        </a>
                        <a href="{{ route('login') }}" class="btn btn-signup w-75 mt-3">
                            Back to login
                        </a>
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
    <script>
        Vue.use(Toasted);
        var register = new Vue({
            el: "#register",
            mounted() {
                AOS.init();
                this.$toasted.error(
                    "Maaf email anda sudah terdaftar, silahkan coba email lain",
                    {
                        position: "top-center",
                        className: "rounded",
                        duration: 2000,
                    }
                );
            },
            data: {
                name: "Yoga Baskoro",
                email: "yogasab40@gmail.com",
                toko: "PT Mencari Cinta Sejati",
                password: "",
                isStoreOpen: true,
            },
        });
    </script>
    <script src="/script/navbar-scroll.js"></script>
@endpush
