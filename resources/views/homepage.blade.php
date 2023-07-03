@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
    <div class="swiper-container">
        <div>
            <!--========== ISLANDS 1 ==========-->
            <section class="islands">
                <img
                    src="{{ asset('frontend/assets/img/hero.jpg') }}"
                    alt=""
                    class="islands__bg"
                />
                <div class="bg__overlay">
                    <div class="islands__container container">
                        <div
                            class="islands__data"
                            style="z-index: 99; position: relative"
                        >
                            <h2 class="islands__subtitle">
                                Explore
                            </h2>
                            <h1 class="islands__title">
                                Wonderfull World
                            </h1>
                            <p class="islands__description">
                                Ini saat yang tepat untuk melakukan perjalanan 
                                waktu dan menikmati <br />
                                keindahan dunia.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!--==================== LOGOS ====================-->
<section
    class="logos"
    style="margin-top: 9rem; padding-bottom: 3rem"
>
    <div class="logos__container container grid">
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/tripadvisor.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/airbnb.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/booking.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/airasia.png') }}" alt="" />
        </div>
    </div>
</section>

<!--==================== POPULAR ====================-->
<section class="section" id="popular">
    <div class="container">
        <span class="section__subtitle" style="text-align: center"
            >Pilihan Terbaik</span
        >
        <h2 class="section__title" style="text-align: center">
            Popular Places
        </h2>

        <div style="display: flex; flex-wrap: wrap; gap: 16px;">

            @foreach($travel_packages as $travel_package)
                <article class="popular__card swiper-slide">
                        <img
                            src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                            alt=""
                            class="popular__img"
                        />
                        <div class="popular__data">
                            <h2 class="popular__price">
                                <span>Rp. {{ number_format($travel_package->price,2) }}</span>
                            </h2>
                            <h3 class="popular__title">
                                {{ $travel_package->location}}
                            </h3>
                            <p class="popular__description" style="margin-bottom: 16px;">{{ $travel_package->type }}</p>
                            <div>
                                <a href="{{ route('travel_package.show', $travel_package->slug) }}">Lihat detail paket</a>
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
                        </div>
                </article>
            @endforeach

        </div>

        {{-- <div class="popular__container swiper">
            <div class="swiper-wrapper">
                @foreach($travel_packages as $travel_package)
                    <article class="popular__card swiper-slide">
                        <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                            <img
                                src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                                alt=""
                                class="popular__img"
                            />
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>Rp.</span>{{ number_format($travel_package->price,2) }}
                                </h2>
                                <h3 class="popular__title">
                                    {{ $travel_package->location}}
                                </h3>
                                <p class="popular__description">{{ $travel_package->type }}</p>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>

            <div class="swiper-button-next">
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="bx bx-chevron-left"></i>
            </div>
        </div> --}}
    </div>
</section>

<!--==================== VALUE ====================-->
<section class="value section" id="value">
    <div class="value__container container grid">
        <div class="value__images">
            <div class="value__orbe"></div>

            <div class="value__img">
                <img src="{{ asset('frontend/assets/img/team.jpg') }}" alt="" />
            </div>
        </div>

        <div class="value__content">
            <div class="value__data">
                <span class="section__subtitle">Why Choose Us</span>
                <h2 class="section__title">
                    Experience That We Promise To You
                </h2>
                <p class="value__description">
                    Kami selalu siap melayani dengan menyediakan layanan terbaik untuk Anda. Kami membuat pilihan yang baik untuk melakukan perjalanan mengelilingi dunia.
                </p>
            </div>

            <div class="value__accordion">
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-shield-x value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Tempat-tempat terbaik di dunia.
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Kami menyediakan tempat-tempat terbaik di 
                            seluruh dunia dan memiliki layanan berkualitas tinggi.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-x-square value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Harga yang terjangkau untuk Anda.
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Kami berusaha membuat anggaran Anda 
                            sesuai dengan tujuan yang ingin Anda kunjungi.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-bar-chart-square value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                           Rencana terbaik untuk waktu Anda.
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Kami menyediakan waktu yang terbaik untuk Anda.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-check-square value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Jaminan keamanan.
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Kami memastikan bahwa layanan kami memiliki tingkat keamanan yang baik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <!-- blog -->
<section class="blog section" id="blog">
    <div class="blog__container container">
        <span class="section__subtitle" style="text-align: center"
            >Our Blog</span
        >
        <h2 class="section__title" style="text-align: center">
            The Best Trip For You
        </h2>

        <div class="blog__content grid">
            @foreach($blogs as $blog)
                <article class="blog__card">
                    <div class="blog__image">
                        <img
                            src="{{ Storage::url($blog->image) }}"
                            alt=""
                            class="blog__img"
                        />
                        <a href="{{ route('blog.show', $blog->slug) }}" class="blog__button">
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>

                    <div class="blog__data">
                        <h2 class="blog__title">
                            {{ $blog->title }}
                        </h2>
                        <p class="blog__description">
                            {{ $blog->excerpt }}
                        </p>

                        <div class="blog__footer">
                            <div class="blog__reaction">
                                {{ date('d M Y', strtotime($blog->created_at)) }}
                            </div>
                            <div class="blog__reaction">
                                <i class="bx bx-show"></i>
                                <span>{{ $blog->reads }}</span>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section> --}}
@endsection