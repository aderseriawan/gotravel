<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--=============== BOXICONS ===============-->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        @stack('style-alt')
        <title>Reservation Travel - KELOMPOK 4</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="{{ route('homepage') }}" class="nav__logo"
                    >G<i class="bx bxs-map"></i> TRAVEL</a
                >

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('homepage') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                                <i class="bx bx-home-alt"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('travel_package.index') }}" class="nav__link {{ request()->is('travel-packages') || request()->is('travel-packages/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-building-house"></i>
                                <span>Paket Travel</span>
                            </a>
                        </li>
                        {{-- <li class="nav__item">
                            <a href="{{ route('blog.index') }}" class="nav__link {{ request()->is('blogs') || request()->is('blogs/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-award"></i>
                                <span>Blog</span>
                            </a>
                        </li> --}}
                        <li class="nav__item">
                            <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                                <i class="bx bx-phone"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- theme -->
                <i class="bx bx-moon change-theme" id="theme-button"></i>
                <div class="flex">
                    @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                            <a href="{{ route('cart.list') }}" target="_blank" class="button nav__button"><i class="bx bxs-cart"></i> Keranjang paket wisata</a>
                            <button class="button nav__button">Logout</button>
                        </form>
                    @endauth
                    @guest
                        <a href="{{ route('register') }}" target="_blank" class="button nav__button">Register</a>
                        <a href="{{ route('login') }}" target="_blank" class="button nav__button">Login</a>
                    @endguest
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            @yield('content')
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="{{ route('homepage') }}" class="footer__logo">
                        G<i class="bx bxs-map"></i> TRAVEL
                    </a>
                    <p class="footer__description">
                        Visi kami adalah membantu orang-orang menemukan <br> 
                        tempat-tempat terbaik untuk melakukan <br>
                        perjalanan dengan keamanan yang tinggi.
                    </p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">About</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Features </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">News & Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Company</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link"
                                    >How We Work?
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Capital </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"> Security</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Support</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">FAQs </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"
                                    >Support center
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"> Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Follow us</h3>

                        <ul class="footer__social">
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-facebook-circle"></i>
                            </a>
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-instagram-alt"></i>
                            </a>
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-pinterest"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__info container">
                <span class="footer__copy">
                    &#169; ypcode. All rigths reserved
                </span>
                <div class="footer__privacy">
                    <a href="#">Terms & Agreements</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="bx bx-chevrons-up"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        @stack('script-alt')
    </body>
</html>
