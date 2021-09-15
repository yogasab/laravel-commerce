@extends('layouts.app') 
@section('title') Store Cart @endsection
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
                            @php $totalPrice = 0; @endphp
                            @forelse ($carts as $cart)
                                <tr>
                                    <td style="width: 20%">
                                        @if ($cart->product->galleries)
                                            <img
                                                src="{{ Storage::url($cart->product->galleries->first()->photos) }}"
                                                alt=""
                                                class="cart-image w-100"
                                            />
                                        @endif
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">
                                            {{ $cart->product->name }}
                                        </div>
                                        <div class="product-subtitle">
                                            {{ $cart->product->user->store_name }}
                                        </div>
                                    </td>
                                    <td style="width: 30%">
                                        <div class="product-title">
                                            {{ number_format($cart->product->price) }}
                                        </div>
                                        <div class="product-subtitle">IDR</div>
                                    </td>
                                    @php $totalPrice += $cart->product->price; @endphp
                                    <td style="width: 20%">
                                        <form action="{{ route('cart-delete', $cart->id) }}" method="POST" >
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-remove-cart">
                                                Remove
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td style="width: 20%">
                                        <h3>Cart kamu kosong, <a style="text-decoration: none" href="{{ route('home') }}">belanja</a> dulu yuk</h3>
                                    </td>
                                </tr>
                            @endforelse
                            
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
            <form action="{{ route('checkout') }}" method="POST" id="locations" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address_one">Address 1</label>
                            <input
                                type="text"
                                class="form-control"
                                id="address_one"
                                name="address_one"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address_two">Address 2</label>
                            <input
                                type="text"
                                class="form-control"
                                id="address_two"
                                name="address_two"
                                value="Jalan Matraman Raya"
                            />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="provinces_id">Provinsi/Province</label>
                            <select
                                name="provinces_id"
                                id="provinces_id"
                                class="form-control"
                                v-model="provinces_id"
                            >
                                <option v-for="province in provinces" :value="province.id">
                                    @{{ province.name }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="kota">Kota/City</label>
                            <select
                                name="regencies_id"
                                id="regencies_id"
                                class="form-control"
                                v-model="regencies_id"
                            >
                                <option v-for="regency in regencies" :value="regency.id">
                                    @{{ regency.name }}
                                </option>
                                <option v-else="" :value="">
                                    Kota
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="zip_code">Kode Pos/Postal Code</label>
                            <input
                                type="text"
                                class="form-control"
                                id="zip_code"
                                name="zip_code"
                                value="13540"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country">Negara/Country</label>
                            <input
                                type="text"
                                class="form-control"
                                id="country"
                                name="country"
                                value="Indonesia"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone_number">Nomor Telpon</label>
                            <input
                                type="text"
                                class="form-control"
                                id="phone_number"
                                name="phone_number"
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
                        <div class="product-title">Rp 0</div>
                        <div class="product-subtitle">Ongkos Kirim</div>
                    </div>
                    <div class="col-4 col-md-3">
                        <div class="product-title">Rp 0</div>
                        <div class="product-subtitle">Asuransi Pengiriman</div>
                    </div>
                    <div class="col-4 col-md-3">
                        <div class="product-title text-success">Rp {{ number_format($totalPrice) ?? 0 }}</div>
                        <div class="product-subtitle">Total Biaya</div>
                    </div>
                    <div class="col-8 col-md-4">
                        <button type="submit" class="btn btn-success btn-block mt-4" >
                            Checkout Now
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    var gallery = new Vue({
        el: "#locations",
        mounted() {
            AOS.init();
            this.getProvincesData();
        },
        data: {
            provinces: null,
            regencies: null,
            provinces_id: null,
            regencies_id: null
        },
        methods: {
            getProvincesData(){
                var self = this;
                axios.get('{{ route('provinces') }}').then(function(response){
                    self.provinces = response.data;
                });
            },
            getRegenciesData(){
                var self = this;
                axios.get('{{ url('api/regencies/') }}/'+self.provinces_id).then(function(response){
                    self.regencies = response.data;
                });
            },
        },
        watch: {
            provinces_id: function(val, oldVal){
                this.regencies_id = null;
                this.getRegenciesData();
            }
        }
    });
</script>
@endpush
