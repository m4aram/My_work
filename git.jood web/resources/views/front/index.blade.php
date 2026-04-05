@extends('layouts.front')
@section('content')
  <body>
    <div class="hero_area">
      <!-- header section strats -->
      {{-- <header class="header_section">
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
                <a href="cart.html">
                  <img src="images/bag.png" alt="" />
                </a>
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
              </div>
            </div>
          </nav>
        </div>
      </header> --}}
      <!-- end header section -->
      <!-- slider section -->
      <section class="slider_section">
        <div class="side-img">
          <img src="images/side-img.png" alt="" />
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>J<span>OO</span>D</h1>
                <h2>Perfumes</h2>
                <a href=""> Read More </a>
              </div>
            </div>
            <div class="col-md-6">
              <div
                id="carouselExampleControls"
                class="carousel slide"
                data-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="" />
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img-box">
                      <img src="images/slider-img2.png" alt="" />
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img-box">
                      <img src="images/slider-img3.png" alt="" />
                    </div>
                  </div>
                </div>
                <div class="carousel_btn-container">
                  <a
                    class="carousel-control-prev"
                    href="#carouselExampleControls"
                    role="button"
                    data-slide="prev"
                  >
                    <span
                      class="carousel-control-prev-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a
                    class="carousel-control-next"
                    href="#carouselExampleControls"
                    role="button"
                    data-slide="next"
                  >
                    <span
                      class="carousel-control-next-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end slider section -->
    </div>
    <!-- product section -->
    <section class="product_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>Our Perfumes</h2>
        </div>
        <div class="product_container">
            @foreach ($products as $product)
            <div class="box">
              <div class="img-box">
                <img src="{{$product->image}}" alt="" />
              </div>
              <div class="detail-box">
                <h5>{{$product->name}}</h5>
                <h4>{{$product->categories->name}}</h4>
                <h4><span>RY</span>{{$product->price}}</h4>
                <a href="{{ route('cart') }}"> Buy Now </a>
              </div>
            </div>
            @endforeach
          {{-- <div class="box">
            <div class="img-box">
              <img src="images/blue.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>Blue De - Chanel</h5>
              <h4>Eau de parfum</h4>
              <h4><span>RY</span>10000</h4>
              <a href="{{ route('cart') }}"> Buy Now </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/erba pura.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>Erba Pura - Xserjoff</h5>
              <h4>Eau De Parum</h4>
              <h4><span>RY</span>12000</h4>
              <a href="{{ route('cart') }}"> Buy Now </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/mayar.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>Mayar - Lattafa</h5>
              <h4>Eau De Parfum</h4>
              <h4><span>RY</span>14000</h4>
              <a href="{{ route('cart') }}"> Buy Now </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/scandal.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>Scandal - Jean Paul Gultair</h5>
              <h4>Eau De Parfum</h4>
              <h4><span>RY</span>12000</h4>
              <a href="{{ route('cart') }}"> Buy Now </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/badea.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>Badea'a Al-oud - Lattafa</h5>
              <h4>Eau de Parfum</h4>
              <h4><span>RY</span>20000</h4>
              <a href="{{ route('cart') }}"> Buy Now </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/sauvage.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>Sauvage - Dior</h5>
              <h4>Eau De Parfum</h4>
              <h4><span>RY</span>10000</h4>
              <a href="{{ route('cart') }}"> Buy Now </a>
            </div>
          </div> --}}
        </div>
        <!-- <div class="btn-box">
        <a href="">
          See More
        </a>
      </div> -->
      </div>
    </section>
    <!-- end product section -->
    <!-- about section -->
    <section class="about_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">


                <h2>We help the world to smell better!</h2>
              </div>
              <p>
                Many of people likes to express his personality in several ways.
                We see the most appropriate way is choosing a suitable
                fragrance. A fragrance is your story that you tell.

                <a href=""> Read More </a>
              </p>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="images/myway2.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end about section -->
    <!-- us section -->
    <section class="us_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="img-box">
              <img src="images/rouge.jpg" alt="" />
            </div>
          </div>
          <div class="col-md-7">
            <div class="detail-box">
              <div class="heading_container">
                <h2>Why Choose us</h2>
              </div>
              <div class="box">
                <div class="text-box">
                  <div class="number-box">
                    <h5>01</h5>
                  </div>
                  <h6>
                    It is a long established fact that a reader will be
                    distracted
                  </h6>
                </div>
                <div class="text-box">
                  <div class="number-box">
                    <h5>02</h5>
                  </div>
                  <h6>
                    It is a long established fact that a reader will be
                    distracted
                  </h6>
                </div>
                <div class="text-box">
                  <div class="number-box">
                    <h5>03</h5>
                  </div>
                  <h6>
                    It is a long established fact that a reader will be
                    distracted
                  </h6>
                </div>
              </div>
              <div class="btn-box">
                <a href=""> Read More </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end us section -->
    <!-- store section -->
    <section class="store_section layout_padding-bottom">
      <div class="container">
        <div class="heading_container">
          <h2>JOOD Perfumes Store</h2>
        </div>
      </div>
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="img-box">
                <img src="images/store-img1.png" alt="" />
              </div>
            </div>
            <div class="carousel-caption d-none d-md-block">
              <h5>Fragrance experts from all over the world</h5>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="img-box">
                <img src="images/store-img2.png" alt="" />
              </div>
            </div>
            <div class="carousel-caption d-none d-md-block">
              <h5>They will help you to choose your perfect scent</h5>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="img-box">
                <img src="images/store-img3.png" alt="" />
              </div>
            </div>
            <div class="carousel-caption d-none d-md-block">
              <h5>Visit Us!</h5>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a
            class="carousel-control-prev"
            href="#carouselExampleCaptions"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleCaptions"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end store section -->
    <!-- blog section -->
    <section class="blog_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>Our Blog</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/b-1.png" alt="" />
              </div>
              <div class="detail-box">
                <h3>New FOOC Products</h3>
                <p>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                  The point of using Lorem
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/b-2.png" alt="" />
              </div>
              <div class="detail-box">
                <h3>New FOOC Products</h3>
                <p>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                  The point of using Lorem
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end blog section -->
    <!-- client section -->
    <section class="client_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>Customer's Testimonial</h2>
        </div>
        <div
          id="carouselExample3Controls"
          class="carousel slide"
          data-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box">
                <div class="img_container">
                  <div class="img-box">
                    <div class="img_box-inner">
                      <img src="images/client.jpg" alt="" />
                    </div>
                  </div>
                </div>
                <div class="detail-box">
                  <h5>Hingaroo</h5>
                  <h6>Dealer</h6>
                  <p>
                    Potential Clients are pouring our website on a daily basis
                    after we use Organic Visit, really recommended their great
                    job!
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="img_container">
                  <div class="img-box">
                    <div class="img_box-inner">
                      <img src="images/client.jpg" alt="" />
                    </div>
                  </div>
                </div>
                <div class="detail-box">
                  <h5>Hingaroo</h5>
                  <h6>Dealer</h6>
                  <p>
                    Potential Clients are pouring our website on a daily basis
                    after we use Organic Visit, really recommended their great
                    job!
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="img_container">
                  <div class="img-box">
                    <div class="img_box-inner">
                      <img src="images/client.jpg" alt="" />
                    </div>
                  </div>
                </div>
                <div class="detail-box">
                  <h5>Hingaroo</h5>
                  <h6>Dealer</h6>
                  <p>
                    Potential Clients are pouring our website on a daily basis
                    after we use Organic Visit, really recommended their great
                    job!
                  </p>
                </div>
              </div>
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExample3Controls"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExample3Controls"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end client section -->
    <!-- contact section -->
    <section class="contact_section layout_padding">
      <div class="container">
        <h2 class="">Request A Call Back</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6 mx-auto">
            <form action="">
              <div>
                <input type="text" placeholder="Name" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex justify-content-center">
                <button>SEND</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <footer class="footer_section">
        <div class="container">
            <p>&copy; <span id="displayYear"></span> @Maram Sharaf Fadel
                @Manar Talal AL_Subbari
                @Dhoha Ziyad AL_Rowaishan.</p>
        </div>
    </footer>
    </section>
@endsection
@section('js')
<script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</script>
@endsection
  </body>
</html>
