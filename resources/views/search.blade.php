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

    <div class="search-tabs" id="search-tabs-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="tab-content">


                        <div id="tours" class="tab-pane in active">

                            <div class="row">
                                <form action="/Data/SearchResult" data-ajax="true"
                                      data-ajax-loading="#divLoading" data-ajax-mode="replace"
                                      data-ajax-update="#searchResult" id="form0" method="post">
                                    <div id="divLoading" style="width: 74px; display: none; float: left;">
                                        <img src="/images/loading.gif" style="width:100%" />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-9">
                                        <div class="form-group left-icon">
                                            <input id="keyword" name="keyword" type="text"
                                                   class="form-control" />
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                        <button class="btn btn-orange" type="submit">Search</button>
                                    </div><!-- end columns -->
                                </form>
                            </div><!-- end row -->

                        </div>

                    </div><!-- end tab-content -->

                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->
    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="tour-grid" class="innerpage-section-padding">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-12 content-side">

                        <div class="row" id="searchResult">

                            <div id="post">
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="grid-block main-block t-grid-block">
                                        <div class="main-img t-grid-img">
                                            <a href="tour-detail-left-sidebar.html">

                                                <img src="{{asset('karnel/images/3.png')}}" alt="Selfie Styler" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">$500.00<span class="divider">|</span><span
                                                            class="pkg"> Availiblity Yes</span></li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end t-grid-img -->

                                        <div class="block-info t-grid-info">
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </div><!-- end rating -->

                                            <h3 class="block-title"><a href="tour-detail-left-sidebar.html">Selfie
                                                    Styler</a></h3>

                                            <p>ince the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only
                                                five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged. It wa</p>
                                            <div class="grid-btn">
                                                <a href="/Information/Details/3"
                                                   class="btn btn-orange btn-block btn-lg">View More</a>
                                            </div><!-- end grid-btn -->
                                        </div><!-- end t-grid-info -->
                                    </div><!-- end t-grid-block -->
                                </div><!-- end columns -->
                            </div>

                        </div><!-- end row -->

                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end tour-grid -->
    </section><!-- end innerpage-wrapper -->
    <!-- ##### Best Feature Area Start ##### -->
    @include('partials/best-feature')

    <!-- ##### Newsletter Area Start ##### -->
    @include('partials/newsletter')


    <!-- ##### Footer Area Start ##### -->
    @include('partials/footer')
    <!-- ##### Footer Area Start ##### -->

</body>

</html>
