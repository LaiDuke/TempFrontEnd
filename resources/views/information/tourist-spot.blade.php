
<!DOCTYPE html>
<html lang="en">
@include('partials/head')
<body id="travel-agency">
    <!-- ##### Header Area Start ##### -->
    @include('partials/header')

    <section class="page-cover" id="cover-tour-grid-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Toursit Spots</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Information</a></li>
                        <li class="active">Toursit Spots</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper" >
        <div id="tour-grid" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-12 content-side">

                        <div class="row">

                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="grid-block main-block t-grid-block">
                                    <div class="main-img t-grid-img">
                                        <a href="tour-detail-left-sidebar.html">

                                            <img src="{{asset('karnel/images/3.png')}}" alt="SAIFUL MALOOK LAKE"/>
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">Sale of<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
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

                                        <h3 class="block-title"><a href="tour-detail-left-sidebar.html">Xin chao</a></h3>

                                        <p>Content</p>
                                        <div class="grid-btn">
                                            <a href="/Information/TourDetails/2" class="btn btn-orange btn-block btn-lg">View More</a>
                                        </div><!-- end grid-btn -->
                                    </div><!-- end t-grid-info -->
                                </div><!-- end t-grid-block -->
                            </div><!-- end columns -->
                            @foreach($listTour as $tour)
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="grid-block main-block t-grid-block">
                                        <div class="main-img t-grid-img">
                                            <a href="tour-detail-left-sidebar.html">

                                                <img src="{{$tour->ImageUrl == null ? asset('karnel/images/3.png') : $tour->ImageUrl}}" alt="SAIFUL MALOOK LAKE"/>
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">Go to<span class="divider">|</span><span class="pkg">{{$tour->Destination}}</span></li>
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

                                            <h3 class="block-title"><a href="tour-detail-left-sidebar.html">{{$tour->Name}}</a></h3>

                                            <p>Content</p>
                                            <div class="grid-btn">
                                                <a href="/Information/TourDetails/2" class="btn btn-orange btn-block btn-lg">View More</a>
                                            </div><!-- end grid-btn -->
                                        </div><!-- end t-grid-info -->
                                    </div><!-- end t-grid-block -->
                                </div><!-- end columns -->
                            @endforeach
                        </div><!-- end row -->

                        {{ $listTour->links("Sem3_frontEnd/public/tourist-spot") }}
                        <div class="pages">
                            <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="/Information/ToursitSpots?page=2">2</a></li><li class="PagedList-skipToNext"><a href="/Information/ToursitSpots?page=2" rel="next">»</a></li></ul></div>
                        </div>
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


</body>

</html>
