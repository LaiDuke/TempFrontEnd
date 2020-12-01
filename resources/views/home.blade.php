
<!DOCTYPE html>
<html lang="en">
@include('partials/head')
<body id="travel-agency">
    <!-- ##### Header Area Start ##### -->
    @include('partials/header')


    <div style="margin-top:-140px">
        <div class="flexslider slider" id="slider-5">
            <ul class="slides">

                <li class="item-1 back-size" style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(karnel/images/slider1.jpg) 50% 60%;
	background-size:142%;
	height:100%;">
                    <div class="meta">
                        <div class="container">
                            <h2>Discover</h2>
                            <p>The Magnificent Himalayas & Karakoram Ranges</p>
                            <span class="highlight-price">Get A Package</span>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-1 -->

                <li class="item-2 back-size" style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(karnel/images/slider2.jpg) 50% 60%;
	background-size:142%;
	height:100%;">
                    <div class="meta">
                        <div class="container">
                            <h2>Discover</h2>
                            <p>The Fascinating Cultures and Colors of the Land.</p>
                            <span class="highlight-price">Get A Package</span>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-2 -->

                <li class="item-2 back-size" style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(karnel/images/slider3.jpg) 50% 60%;
	background-size:142%;
	height:100%;">
                    <div class="meta">
                        <div class="container">
                            <h2>Discover</h2>
                            <p>The Surreal and Enchanting Glory of Nature.</p>
                            <span class="highlight-price">Get A Package</span>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-2 -->

                <li class="item-2 back-size" style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(karnel/images/slider4.jpg) 50% 60%;
	background-size:142%;
	height:100%;">
                    <div class="meta">
                        <div class="container">
                            <h2>Discover</h2>
                            <p>The Contrast of Spellbinding Grandeur and Sheer Simplicity.</p>
                            <span class="highlight-price">Get A Package</span>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-2 -->

            </ul>
        </div><!-- end slider -->
    </div>


    <!--=============== TOUR OFFERS ===============-->
    <section id="tour-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Tour Offers</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">

                        <div>
                            <div class="grid">
                                <div class="main-block tour-block">
                                    <div class="main-img">

                                        <a href="#">
                                            <img src="{{asset('karnel/images/tour-1.jpg')}}" class="img-responsive" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$568.00<a href="#"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="#">China Temple Tour</a>
                                            <p>From: China</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end grid -->

                            <div class="grid">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="tour-detail-right-sidebar.html">
                                            <img src="{{asset('karnel/images/tour-2.jpg')}}" class="img-responsive" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$745.00<a href="tour-detail-right-sidebar.html"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="tour-detail-right-sidebar.html">African Safari Tour</a>
                                            <p>From: Africa</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end grid -->
                        </div>

                        <div>
                            <div class="grid">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="tour-detail-right-sidebar.html">
                                            <img src="{{asset('karnel/images/tour-3.jpg')}}" class="img-responsive" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$459.00<a href="tour-detail-right-sidebar.html"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="tour-detail-right-sidebar.html">Paris City Tour</a>
                                            <p>From: Paris</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end grid -->

                            <div class="grid">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="tour-detail-right-sidebar.html">
                                            <img src="{{asset('karnel/images/tour-4.jpg')}}" class="img-responsive" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$745.00<a href="tour-detail-right-sidebar.html"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="tour-detail-right-sidebar.html">Newzeland Tour</a>
                                            <p>From: China</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end grid -->
                        </div>

                        <div>
                            <div class="grid">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="tour-detail-right-sidebar.html">
                                            <img src="{{asset('karnel/images/tour-5.jpg')}}" class="img-responsive" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$459.00<a href="tour-detail-right-sidebar.html"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="tour-detail-right-sidebar.html">Paris City Tour</a>
                                            <p>From: Paris</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end grid -->

                            <div class="grid">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="tour-detail-right-sidebar.html">
                                            <img src="{{asset('karnel/images/tour-6.jpg')}}" class="img-responsive" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$745.00<a href="tour-detail-right-sidebar.html"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="tour-detail-right-sidebar.html">Orlando City Tour</a>
                                            <p>From: China</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end grid -->
                        </div>

                        <div>
                            <div class="grid">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="tour-detail-right-sidebar.html">
                                            <img src="{{asset('karnel/images/tour-7.jpg')}}" class="img-responsive" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$459.00<a href="tour-detail-right-sidebar.html"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="tour-detail-right-sidebar.html">London City Tour</a>
                                            <p>From: Paris</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end grid -->

                            <div class="grid">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="tour-detail-right-sidebar.html">
                                            <img src="{{asset('karnel/images/tour-8.jpg')}}" class="img-responsive" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$745.00<a href="tour-detail-right-sidebar.html"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="tour-detail-right-sidebar.html">Shanghai Tour</a>
                                            <p>From: China</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end grid -->
                        </div>
                    </div><!-- end owl-tour-offers -->

                    <div class="view-all text-center">
                        <a href="/Data/Search" class="btn btn-orange">View All</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end tour-offers -->

    <!--========================= BEST FEATURES =======================-->
    <section id="best-features" class="banner-padding lightgrey-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Best Price Guarantee</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.
                        </p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>Safe and Secure</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.
                        </p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Best Travel Agents</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.
                        </p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-bars"></i></span>
                        <h3>Travel Guidelines</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.
                        </p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end best-features -->

    <!--======= OFFER BANNER ======-->
    <section id="cruise-offer-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 cruise-offer-img text-center">
                    <img src="{{asset('karnel/images/best-offer-cruise.jpg')}}" class="img-responsive" alt="offer-img" />
                </div><!-- end columns -->

                <div class="col-sm-6 cruise-offer-text">
                    <h2>Best Offer</h2>
                    <h3 class="cruise-tour">Bodrum Alacati To Istanbul Tour</h3>
                    <p class="cruise-offer-dur">7 Nights, 6 Days</p>
                    <p class="cruise-offer-price">From $1,441</p>

                    <a href="/Information/ToursitSpots" class="btn btn-black">Click to View</a>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end offer-banner -->

    <!--===================== GALLERY-SECTION ===================-->
    <section id="gallery-section" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page-heading">
                        <h2>Picture Gallery</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div id="masonry">

                        <div class="gallery-product">
                            <div class="gallery-block">
                                <div class="gallery-img ">
                                    <img src="{{asset('karnel/images/mas-gallery-1.jpg')}}" class="img-responsive" alt="gallery-img">
                                    <div class="gallery-mask">
                                        <div class="gallery-title">
                                            <h2>Image Title</h2>
                                            <p>2 Pictures</p>
                                        </div> <!-- end gallery-title -->
                                        <a href="{{asset('karnel/images/mas-gallery-1.jpg')}}" title="image-1"
                                           class="with-caption image-link"><span><i class="fa fa-arrows-v"></i></span></a>
                                    </div><!-- end gallery-mask -->
                                </div><!-- end gallery-img -->
                            </div><!-- end gallery-block -->
                        </div><!-- end gallery-product -->

                        <div class="gallery-product">
                            <div class="gallery-block">
                                <div class="gallery-img ">
                                    <img src="{{asset('karnel/images/mas-gallery-2.jpg')}}" class="img-responsive" alt="gallery-img">
                                    <div class="gallery-mask">
                                        <div class="gallery-title">
                                            <h2>Image Title</h2>
                                            <p>2 Pictures</p>
                                        </div><!-- end gallery-title -->
                                        <a href="{{asset('karnel/images/mas-gallery-2.jpg')}}" title="image-2"
                                           class="with-caption image-link"><span><i class="fa fa-arrows-v"></i></span></a>
                                    </div><!-- end gallery-mask -->
                                </div><!-- end gallery-img -->
                            </div><!-- end gallery-block -->
                        </div><!-- end gallery-product -->

                        <div class="gallery-product">
                            <div class="gallery-block">
                                <div class="gallery-img ">
                                    <img src="{{asset('karnel/images/mas-gallery-3.jpg')}}" class="img-responsive" alt="gallery-img">
                                    <div class="gallery-mask">
                                        <div class="gallery-title">
                                            <h2>Image Title</h2>
                                            <p>2 Pictures</p>
                                        </div><!-- end gallery-title -->
                                        <a href="{{asset('karnel/images/mas-gallery-3.jpg')}}" title="image-3"
                                           class="with-caption image-link"><span><i class="fa fa-arrows-v"></i></span></a>
                                    </div><!-- end gallery-mask -->
                                </div><!-- end gallery-img -->
                            </div><!-- end gallery-block -->
                        </div><!-- end gallery-product -->

                        <div class="gallery-product">
                            <div class="gallery-block">
                                <div class="gallery-img ">
                                    <img src="{{asset('karnel/images/mas-gallery-4.jpg')}}" class="img-responsive" alt="gallery-img">
                                    <div class="gallery-mask">
                                        <div class="gallery-title">
                                            <h2>Image Title</h2>
                                            <p>2 Pictures</p>
                                        </div><!-- end gallery-title -->
                                        <a href="{{asset('karnel/images/mas-gallery-4.jpg')}}" title="image-4"
                                           class="with-caption image-link"><span><i class="fa fa-arrows-v"></i></span></a>
                                    </div><!-- end gallery-mask -->
                                </div><!-- end gallery-img -->
                            </div><!-- end gallery-block -->
                        </div><!-- end gallery-product -->

                        <div class="gallery-product">
                            <div class="gallery-block">
                                <div class="gallery-img ">
                                    <img src="{{asset('karnel/images/mas-gallery-5.jpg')}}" class="img-responsive" alt="gallery-img">
                                    <div class="gallery-mask">
                                        <div class="gallery-title">
                                            <h2>Image Title</h2>
                                            <p>2 Pictures</p>
                                        </div><!-- end gallery-title -->
                                        <a href="{{asset('karnel/images/mas-gallery-5.jpg')}}" title="image-5"
                                           class="with-caption image-link"><span><i class="fa fa-arrows-v"></i></span></a>
                                    </div><!-- end gallery-mask -->
                                </div><!-- end gallery-img -->
                            </div><!-- end gallery-block -->
                        </div><!-- end gallery-product -->

                        <div class="gallery-product">
                            <div class="gallery-block">
                                <div class="gallery-img ">
                                    <img src="{{asset('karnel/images/mas-gallery-6.jpg')}}" class="img-responsive" alt="gallery-img">
                                    <div class="gallery-mask">
                                        <div class="gallery-title">
                                            <h2>Image Title</h2>
                                            <p>2 Pictures</p>
                                        </div><!-- end gallery-title -->
                                        <a href="{{asset('karnel/images/mas-gallery-6.jpg')}}" title="image-6"
                                           class="with-caption image-link"><span><i class="fa fa-arrows-v"></i></span></a>
                                    </div><!-- end gallery-mask -->
                                </div><!-- end gallery-img -->
                            </div><!-- end gallery-block -->
                        </div><!-- end gallery-product -->

{{--                        <div class="gallery-product">--}}
{{--                            <div class="gallery-block">--}}
{{--                                <div class="gallery-img ">--}}
{{--                                    <img src="{{asset('karnel/images/mas-gallery-7.jpg)}}" class="img-responsive" alt="gallery-img">--}}
{{--                                    <div class="gallery-mask">--}}
{{--                                        <div class="gallery-title">--}}
{{--                                            <h2>Image Title</h2>--}}
{{--                                            <p>2 Pictures</p>--}}
{{--                                        </div><!-- end gallery-title -->--}}
{{--                                        <a href="" title="image-7"--}}
{{--                                           class="with-caption image-link"><span><i class="fa fa-arrows-v"></i></span></a>--}}
{{--                                    </div><!-- end gallery-mask -->--}}
{{--                                </div><!-- end gallery-img -->--}}
{{--                            </div><!-- end gallery-block -->--}}
{{--                        </div><!-- end gallery-product -->--}}

{{--                        <div class="gallery-product">--}}
{{--                            <div class="gallery-block">--}}
{{--                                <div class="gallery-img ">--}}
{{--                                    <img src="{{asset('karnel/images/mas-gallery-8.jpg')}}" class="img-responsive" alt="gallery-img">--}}
{{--                                    <div class="gallery-mask">--}}
{{--                                        <div class="gallery-title">--}}
{{--                                            <h2>Image Title</h2>--}}
{{--                                            <p>2 Pictures</p>--}}
{{--                                        </div><!-- end gallery-title -->--}}
{{--                                        <a href="" title="image-8"--}}
{{--                                           class="with-caption image-link"><span><i class="fa fa-arrows-v"></i></span></a>--}}
{{--                                    </div><!-- end gallery-mask -->--}}
{{--                                </div><!-- end gallery-img -->--}}
{{--                            </div><!-- end gallery-block -->--}}
{{--                        </div><!-- end gallery-product -->--}}

                    </div><!-- end masonry -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end gallery-section -->

    <!--==================== HIGHLIGHTS ====================-->
    <section id="highlights" class="section-padding back-size">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div id="boxes">

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-plane"></i></span>
                                    </div><!-- end h-icon -->

                                    <div class="h-text">
                                        <span class="numbers">2496</span>
                                        <p>Outstanding Tours</p>
                                    </div><!-- end h-text -->
                                </div><!-- end highlight-box -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-ship"></i></span>
                                    </div><!-- end h-icon -->

                                    <div class="h-text cruise">
                                        <span class="numbers">1906</span>
                                        <p>Worldwide Cruise</p>
                                    </div><!-- end h-text -->
                                </div><!-- end highlight-box -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-taxi"></i></span>
                                    </div><!-- end h-icon -->

                                    <div class="h-text taxi">
                                        <span class="numbers">2033</span>
                                        <p>Luxury Car Booking</p>
                                    </div><!-- end h-text -->
                                </div><!-- end highlight-box -->
                            </div><!-- end columns -->

                        </div><!-- end boxes -->
                    </div><!-- end row -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end highlights -->

    <!--=============== TEAM ===============-->
    <section id="team" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Meet Our Team</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="owl-carousel owl-theme" id="owl-team">

                        <div class="item">
                            <div class="member-block">
                                <div class="member-img">
                                    <img src="{{asset('karnel/images/team-member-1.jpg')}}" class="img-responsive img-circle" alt="member-img" />
                                    <ul class="list-unstyled list-inline contact-links">
                                        <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                    </ul>
                                </div><!-- end member-img -->

                                <div class="member-name">
                                    <h3>M. Saif</h3>
                                    <p>Editor</p>
                                </div><!-- end member-name -->
                            </div><!-- end member-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="member-block">
                                <div class="member-img">
                                    <img src="{{asset('karnel/images/team-member-2.jpg')}}" class="img-responsive img-circle" alt="member-img" />
                                    <ul class="list-unstyled list-inline contact-links">
                                        <li><a href="https://facebook.com"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                    </ul>
                                </div><!-- end member-img -->

                                <div class="member-name">
                                    <h3>M.Asad</h3>
                                    <p>Full Stack Web Developer</p>
                                </div><!-- end member-name -->
                            </div><!-- end member-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="member-block">
                                <div class="member-img">
                                    <img src="{{asset('karnel/images/team-member-3.jpg')}}" class="img-responsive img-circle" alt="member-img" />
                                    <ul class="list-unstyled list-inline contact-links">
                                        <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                    </ul>
                                </div><!-- end member-img -->

                                <div class="member-name">
                                    <h3>Muhammad Noor</h3>
                                    <p>Front End</p>
                                </div><!-- end member-name -->
                            </div><!-- end member-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="member-block">
                                <div class="member-img">
                                    <img src="{{asset('karnel/images/team-member-4.jpg')}}" class="img-responsive img-circle" alt="member-img" />
                                    <ul class="list-unstyled list-inline contact-links">
                                        <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                    </ul>
                                </div><!-- end member-img -->

                                <div class="member-name">
                                    <h3>Tahaa</h3>
                                    <p>Front End + Data Entry Operator</p>
                                </div><!-- end member-name -->
                            </div><!-- end member-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="member-block">
                                <div class="member-img">
                                    <img src="{{asset('karnel/images/team-member-5.jpg')}}" class="img-responsive img-circle" alt="member-img" />
                                    <ul class="list-unstyled list-inline contact-links">
                                        <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                    </ul>
                                </div><!-- end member-img -->

                                <div class="member-name">
                                    <h3>John Doe</h3>
                                    <p>Director</p>
                                </div><!-- end member-name -->
                            </div><!-- end member-block -->
                        </div><!-- end item -->

                    </div><!-- end owl-team -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end team -->

    <!--=================== PACKAGES ================-->
    <section id="tour-packages" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page-heading">
                        <h2>Top Tour Packages</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="row" id="tour-package-tables">

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
                            <div class="package tour-package">
                                <div class="t-pkg-heading">
                                    <h2 class="t-pkg-title">Naran Kaghan</h2>
                                    <h2 class="t-pkg-price">PKR - 20000.00 / 7 Days</h2>
                                </div><!-- end t-pkg-heading -->

                                <div class="pkg-features">
                                    <ul class="list-unstyled text-center">
                                        <li>Serviece One
                                            Serviece Two
                                            Serviece Three
                                            Serviece One
                                            Serviece Two
                                            Serviece Three</li>
                                    </ul>
                                    <input type="button" class="btn" value="Select Package"
                                           onclick='window.location = "/Register/Registration";' />
                                </div><!-- end features -->
                            </div><!-- end tour-package -->
                        </div><!-- end columns -->



                    </div><!-- end row -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end tour-packages -->

    <!--===================== MESSAGE BANNER ===================-->
    <section id="message-banner" class="section-padding back-size">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                    <h2>Karnel Travels Guide .</h2>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.
                    </p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 message-btn">
                    <a href="#" class="btn btn-white">Read More</a>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end message-banner -->

    <!--=============== TESTIMONIALS-2 ===============-->
    <section id="testimonials-2" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Testimonials</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="owl-carousel owl-theme" id="owl-testimonials">

                        <div class="item">
                            <div class="review-block">
                                <img src="{{asset('karnel/images/reviewer-1.jpg')}}" alt="reviewer-image" class="img-circle img-responsive">
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei
                                    vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo
                                    fugit aeque fabulas, in lucilius prodesset pri.</p>

                                <small>Jhon Smith</small>
                                <p class="position">Manager</p>
                            </div><!-- end review-block -->
                        </div><!-- end item -->


                        <div class="item">
                            <div class="review-block">
                                <img src="{{asset('karnel/images/reviewer-2.jpg')}}" alt="reviewer-image" class="img-circle img-responsive">
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei
                                    vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo
                                    fugit aeque fabulas, in lucilius prodesset pri.</p>

                                <small>Jhon Smith</small>
                                <p class="position">Manager</p>
                            </div><!-- end review-block -->
                        </div><!-- end item -->


                        <div class="item">
                            <div class="review-block">
                                <img src="{{asset('karnel/images/reviewer-3.jpg')}}" alt="reviewer-image" class="img-circle img-responsive">
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei
                                    vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo
                                    fugit aeque fabulas, in lucilius prodesset pri.</p>

                                <small>Jhon Smith</small>
                                <p class="position">Manager</p>
                            </div><!-- end review-block -->
                        </div><!-- end item -->

                    </div>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end testimonials -->

    <!-- ##### Newsletter Area Start ##### -->
    @include('partials/newsletter')


    <!-- ##### Footer Area Start ##### -->
    @include('partials/footer')


</body>

</html>
