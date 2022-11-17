<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Base') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/sidebar.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/Favicon.png') }}">
    @yield('css')

    @yield('header')
</head>

<body>
    <div id="app">
        <!-- Sidebar -->
        <div class="sidebar animate__faster animate__animated animate__slideOutLeft">
            <ul class="nav-links pt-0">
                <li class="text-center close-btn">
                    <i class="material-icons md-36 mx-auto  mt-0 pt-0">menu</i>
                </li>

                {{-- @auth --}}
                <!-- Home -->
                <li class="text-center pb-1">
                    <a href="#" class="text-center">
                        <i class="material-icons md-18 mx-auto">home</i>
                    </a>
                    <a href="#">
                        <p class="link mx-auto">TEATROS</p>
                    </a>
                </li>
                <!-- Home -->

                <!-- Home -->
                <li class="text-center pb-1">
                    <a href="#" class="text-center">
                        <i class="material-icons md-18 mx-auto">home</i>
                    </a>
                    <a href="#">
                        <p class="link mx-auto">RENTCA</p>
                    </a>
                </li>
                <!-- Home -->

                <!-- Home -->
                <li class="text-center pb-1">
                    <a href="#" class="text-center">
                        <i class="material-icons md-18 mx-auto">home</i>
                    </a>
                    <a href="#">
                        <p class="link mx-auto">SISRATRAC</p>
                    </a>
                </li>
                <!-- Home -->
            </ul>
        </div>
        <!-- Sidebar -->

        <!-- Home Section -->
        <div class="banner home-section">
            <div class="home-content pt-5 pb-5">
                <div class="container-fluid">
                    <div class="col-6 col-sm-12 col-md-12">
                        <div class="row p-0 m-0">
                            @auth
                            <div class="col-6 col-md-1 menu my-auto">
                                <div class="col-3 col-sm-3 menu my-auto">
                                    <i class="material-icons md-36 mx-auto menu color-secondary my-auto">menu</i>
                                </div>
                            </div>
                            @endauth
                            @guest
                            <div class="col-6 col-md-1 menu pt-0 mt-0 d-block d-md-none d-lg-none d-xl-none">
                                <div class="col-3 col-sm-3 menu">
                                    <i class="material-icons md-36 mx-auto menu color-secondary">menu</i>
                                </div>
                            </div>
                            @endguest

                            <!-- Institution Name -->
                            {{-- <div class=" col-sm-4 col-md-6 d-none d-md-block d-lg-block d-xl-block">
                                <div class="col-4 col-sm-12">
                                    <a class="navbar-brand" href="{{ url('/') }}">
                                        <h3 class="text-uppercase pt-4 fw-bold color-secondary mb-0">Name/Logo Brand
                                        </h3>
                                    </a>
                                </div>
                            </div> --}}
                            <!-- Institution Name -->

                            <!-- Logo Brand -->
                            <div class=" col-sm-4 col-md-6 d-none d-md-block d-lg-block d-xl-block">
                                <div class="col-4 col-sm-12 mb-2">
                                    <a class="navbar-brand" href="{{ url('/') }}">
                                        <img class="" src="/logos/Logo.svg" style="max-width: 60%" />
                                    </a>
                                </div>
                            </div>
                            <!-- Logo Brand -->

                            {{-- @guest --}}
                            <div class="col-6 col-md-6 text-right d-none d-md-block d-lg-block d-xl-block">
                                <div class="row mt-2 pt-1">
                                    <div class=" col-md-12 text-end">
                                        <a href="#cards" class="btn btn-normal-light-nav shadow-none">Solicitudes</a>
                                        <a href="#" class="btn btn-normal-light-nav shadow-none">Contacto</a>
                                        <a href="#" class="btn btn-normal-light-nav shadow-none">Sobre Nosotros</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-content">
                <span class="text-white text-center first-title">
                    Landing page de <span class="first-title-bold">solicitudes</span>
                </span>
                <span class="text-white text-center second-title">
                    Lorem ipsum <span class="second-title-bold">dolor sit amet</span>
                </span>
                <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                    Doloremque velit doloribus</p>

                <div class="p-3">
                    <a href="#cards" class="btn btn-normal-dark">Explorar</a>
                </div>
            </div>
        </div>
        <!-- Home Section -->

        <!-- Main -->
        <main class="main content py-4">
            @yield('content')
        </main>
        <!-- Main -->

        <!-- Footer  -->
        <footer-vue />
        <!-- Footer  -->
    </div>

    <!-- Scripts -->
    @yield('scripts')
</body>

</html>