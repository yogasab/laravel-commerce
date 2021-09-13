@extends('layouts.app')

@section('content')
  <!-- Carousel -->
  <div class="page-content page-home">
    <section class="store-trend-categories mb-5">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Categories</h5>
          </div>
        </div>
        <div class="row">
          @php $incrementDelay = 0; @endphp
          @forelse ($categories as $category)
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementDelay += 100 }}"
            >
              <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
                <div class="categories-image">
                  <img src="{{ Storage::url($category->photo) }}" alt="" class="w-100" />
                </div>
                <p class="categories-text">{{ $category->name }}</p>
              </a>
            </div>
          @empty
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementDelay += 100 }}"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/categories-baby.svg" alt="" class="w-100" />
                </div>
                <p class="categories-text">No categgories found</p>
              </a>
            </div>
          @endforelse
        </div>
      </div>
    </section>
  </div>

  <!-- Products -->
  <section class="store-new-products">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5 class="mb-4">All Products</h5>
        </div>
      </div>

      @forelse ($products as $product)
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementDelay += 100 }}">
            <a href="" class="component-products d-block">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="
                    @if($product->galleries->count())
                      background-image: url('{{ Storage::url($product->galleries->first()->photos) }}')
                    @else
                      background-color: #eee
                    @endif
                  "
                ></div>
              </div>
              <div class="products-text">{{ $product->name }}</div>
              <div class="products-price">{{ $product->price }}</div>
            </a>
          </div>
        </div>
      @empty
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementDelay += 100 }}">
            <a href="" class="component-products d-block">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="
                    background-color: #eee
                  "
                ></div>
              </div>
              <div class="products-text">No product found</div>
            </a>
          </div>
        </div>
      @endforelse
      <div class="row">
        <div class="col-md-12">{{ $products->links() }}
        </div>
      </div>
    </div>
  </section>
@endsection