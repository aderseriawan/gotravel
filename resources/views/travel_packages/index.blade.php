@extends('layouts.frontend')

@section('content')
 <!--==================== HOME ====================-->
 <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <section class="islands swiper-slide">
              <img src="{{ asset('frontend/assets/img/bali.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title">Package Travel</h1>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <!--==================== POPULAR ====================-->
      <section class="section" id="popular">
        <div class="container">
          <span class="section__subtitle" style="text-align: center">All</span>
          <h2 class="section__title" style="text-align: center">
            Package Travel
          </h2>

          <div class="popular__all">
            @foreach($travel_packages as $travel_package)
                <article class="popular__card">
                <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                    <img
                    src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                    alt=""
                    class="popular__img"
                    />
                    <div class="popular__data">
                    <h2 class="popular__price"><span>Rp.</span>{{ number_format($travel_package->price,2) }}</h2>
                    <h3 class="popular__title">{{ $travel_package->location }}</h3>
                    <p class="popular__description">{{ $travel_package->type }}</p>
                    </div>
                    <div>
                      @auth
                      <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" value="{{ $travel_package->id }}" name="id">
                          <input type="hidden" value="{{ $travel_package->location}}" name="name">
                          <input type="hidden" value="{{ $travel_package->price }}" name="price">
                          <input type="hidden" value="{{ Storage::url($travel_package->galleries->first()->images) }}"  name="image">
                          <input type="hidden" value="1" name="quantity">
                          
                          <button class="button" style="color: #fff; margin-top: 1rem; width:100%;">Tambah Paket Wisata</a>
                      </form>
                      @endauth
                      @guest
                          <button class="button" style="color: #fff; margin-top: 1rem; width:100%;">Login untuk menambahkan paket</a>
                      @endguest
                  </div>
                </a>
                </article>
            @endforeach
          </div>
        </div>
      </section>
@endsection