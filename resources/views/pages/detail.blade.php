@extends('layouts.app') 

@section('title') 
    Details Product 
@endsection

@section('content')
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
    <section class="store-gallery" id="gallery">
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
                        <h1>The Cozy Couch</h1>
                        <div class="owner">Yoga Baskoro</div>
                        <div class="price">Rp 2.000.000</div>
                    </div>
                    <div class="col-lg-2" data-aos="zoom-in">
                        <a
                            href="/cart.html"
                            class="
                                btn btn-success
                                px-4
                                text-white
                                btn-block
                                mb-3
                            "
                        >
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Description -->
        <section class="store-description">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Veniam, explicabo eligendi quibusdam labore
                            quo consequuntur asperiores, veritatis pariatur in
                            maiores rem! Incidunt, placeat nostrum soluta velit
                            a inventore autem nobis.
                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Illo ab, autem repudiandae, soluta assumenda
                            totam velit natus, magni nobis quo error suscipit
                            cupiditate recusandae consequatur eaque porro
                            consequuntur rerum eos excepturi ipsum? Corrupti
                            fugiat odit temporibus molestias, nihil excepturi
                            omnis obcaecati quod vero. Molestias eos modi id
                            vero ullam rem iste libero soluta, ut omnis enim
                            voluptatum quis sequi quaerat doloribus recusandae
                            dolorum obcaecati nisi maxime quibusdam voluptas
                            dignissimos quam.
                        </p>
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
            activePhoto: 1,
            photos: [
                {
                    id: 1,
                    url: "/images/product-details-1.jpg",
                },
                {
                    id: 2,
                    url: "/images/product-details-2.jpg",
                },
                {
                    id: 3,
                    url: "/images/product-details-3.jpg",
                },
                {
                    id: 4,
                    url: "/images/product-details-4.jpg",
                },
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
