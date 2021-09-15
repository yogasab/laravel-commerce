@extends('layouts.app') @section('title')
{{ $product->name }}
@endsection @section('content')
<!-- Page Content -->
<div class="page-content page-details">
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
                            <li class="breadcrumb-item active">
                                Product Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery -->
    <section class="store-gallery mb-3" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="zoom-in">
                    <transition name="slide-fade" mode="out-in">
                        <img
                            :src="photos[activePhoto].url"
                            :key="photos[activePhoto].id"
                            class="w-100 main-image"
                            alt=""
                        />
                    </transition>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div
                            class="col-3 col-lg-12 mt-2 mt-lg-0"
                            v-for="(photo, index) in photos"
                            :key="photo.id"
                            data-aos="zoom-in"
                            data-aos-delay="100"
                        >
                            <a href="#" @click="changeActive(index)">
                                <img
                                    :src="photo.url"
                                    class="w-100 thumbnail-image"
                                    :class="{active: index == activePhoto}"
                                    alt=""
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details -->
    <div class="store-details-container" data-aos="fade-up">
        <!-- Heading -->
        <section class="store-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>{{ $product->name }}</h1>
                        <div class="owner">{{ $product->user->store_name }}</div>
                        <div class="price">Rp {{ number_format($product->price) }}</div>
                    </div>
                    <div class="col-lg-2" data-aos="zoom-in">
                        @auth
                        <form action="{{ route('detail-add-cart', $product->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success px-4 text-white btn-block mb-3">
                                Add to cart
                            </button>
                        </form>
                        @else
                        <form action="{{ route('login') }}" method="get">
                            @csrf
                            <button
                                type="submit"
                                class="
                                    btn btn-success
                                    px-4
                                    text-white
                                    btn-block
                                    mb-3
                                "
                            >
                                Login to add cart
                            </button>
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
        </section>
        <!-- Description -->
        <section class="store-description">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 text-justify">
                        {!! $product->descriptions !!}
                    </div>
                </div>
            </div>
        </section>
        <section class="store-review">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mt-3 mb-3">
                        <h5>Customer Review</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <ul class="list-unstyled">
                            <li class="media mb-2">
                                <img
                                    src="/images/icons-testimonial-1.png"
                                    alt=""
                                    class="mr-3 rounded-circle"
                                />
                                <div class="media-body">
                                    <h5>Anjani Najani</h5>
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Voluptate accusantium
                                    provident praesentium, debitis aliquam
                                    reiciendis quidem maiores deserunt suscipit
                                    placeat?
                                </div>
                            </li>
                            <li class="media mb-2">
                                <img
                                    src="/images/icons-testimonial-2.png"
                                    alt=""
                                    class="mr-3 rounded-circle"
                                />
                                <div class="media-body">
                                    <h5>John Doe</h5>
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Voluptate accusantium
                                    provident praesentium, debitis aliquam
                                    reiciendis quidem maiores deserunt suscipit
                                    placeat?
                                </div>
                            </li>
                            <li class="media mb-2">
                                <img
                                    src="/images/icons-testimonial-3.png"
                                    alt=""
                                    class="mr-3 rounded-circle"
                                />
                                <div class="media-body">
                                    <h5>Anna Hathe</h5>
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Voluptate accusantium
                                    provident praesentium, debitis aliquam
                                    reiciendis quidem maiores deserunt suscipit
                                    placeat?
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection @push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
    var gallery = new Vue({
        el: "#gallery",
        mounted() {
            AOS.init();
        },
        data: {
            activePhoto: 0,
            photos: [
                @foreach ($product->galleries as $gallery)
                    {
                        id: {{ $gallery->id }},
                        url: "{{ Storage::url($gallery->photos) }}",
                    },              
                @endforeach
            ],
        },
        methods: {
            changeActive(id) {
                this.activePhoto = id;
            },
        },
    });
</script>
@endpush
