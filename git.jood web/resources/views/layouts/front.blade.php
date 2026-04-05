<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>JOOD</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap"
      rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <span> JOOD </span>
            </a>
            <div class="" id="">
              <div class="User_option">
                <form class="form-inline my-2 mb-3 mb-lg-0">
                  <input type="search" placeholder="Search" />
                  <button
                    class="btn my-sm-0 nav_search-btn"
                    type="submit"
                  ></button>
                </form>
                <a href="cart">
                  <img src="images/bag.png" alt="" />
                </a>

                @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    {{-- <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a> --}}


                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#000000]" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg> --}}
                                        </x-dropdown-link>
                                    </form>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    {{-- @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif --}}
                                @endauth
                            </nav>
                        @endif
              </div>

              <div class="custom_menu-btn">
                <button onclick="openNav()">
                  <span class="s-1"> </span>
                  <span class="s-2"> </span>
                  <span class="s-3"> </span>
                </button>
              </div>
              <div id="myNav" class="overlay">
                <div class="overlay-content">
                  <a href="index">Home</a>
                  <a href="about">About</a>
                  <a href="product">Products</a>
                  <a href="blog">Blog</a>
                  <a href="contact">Contact Us</a>
                  <a href="cart">cart </a>
                </div>

                {{-- <div id="myNav" class="overlay">
                    <div class="overlay-content">
                      <a href="index.html">Home</a>
                      <a href="about.html">About</a>
                      <a href="product.html">Products</a>
                      <a href="blog.html">Blog</a>
                      <a href="contact.html">Contact Us</a>
                      <a href="cart.html">cart </a>
                    </div> --}}
              </div>
            </div>
          </nav>
        </div>
      </header>
      
    @yield('content')
    @yield('js')
  </body>
  </html>

