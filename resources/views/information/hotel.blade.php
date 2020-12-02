
<!DOCTYPE html>
<html lang="en">
@include('partials/head')
<body id="travel-agency">
<!-- ##### Header Area Start ##### -->
@include('partials/header')

<section class="page-cover hotelCover" id="cover-tour-grid-list">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Hotels</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Information</a></li>
                    <li class="active">Hotels</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->

<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="tour-grid" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-12 content-side">

                    <div class="row">

                        @foreach($listHotel as $hotel)
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="grid-block main-block t-grid-block">
                                    <div class="main-img t-grid-img">
                                        <a href="{{'Sem3_frontEnd/public/hotel/'.$hotel->HotelID}}">

                                            <img src="{{$hotel->ImageUrl == null ? asset('karnel/images/3.png') : 'http://res.cloudinary.com/a123abc/image/upload/'.$hotel->ImageUrl}}" alt="Selfie Styler" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">Price<span class="divider">|</span><span class="pkg">{{$hotel->Price}}</span></li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end t-grid-img -->

                                    <div class="block-info t-grid-info">


                                        <div class="rating" id="rating_3">
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>

                                        </div><!-- end rating -->
                                        <div id="customRating_3">Two</div>
                                        <h3 class="block-title"><a href="{{'Sem3_frontEnd/public/hotel/'.$hotel->HotelID}}">{{$hotel->Name}}</a></h3>

                                        <p>{{$hotel->Location}}</p>
                                        <div class="grid-btn">
                                            <a href="{{'Sem3_frontEnd/public/hotel/'.$hotel->HotelID}}" class="btn btn-orange btn-block btn-lg">View More</a>
                                        </div><!-- end grid-btn -->
                                    </div><!-- end t-grid-info -->
                                </div><!-- end t-grid-block -->
                            </div><!-- end columns -->
                        @endforeach

                        <script>

                            $(".dropdown-menu li:nth-child(2)").attr("class", "active");
                            var id = "3";

                            var obj = $("#customRating_" + id).text();
                            if (obj == "Five") {
                                $("#rating_" + id + " span:nth-child(1) i").attr("class", "fa fa-star orange");
                                $("#rating_" + id + " span:nth-child(2) i").attr("class", "fa fa-star orange");
                                $("#rating_" + id + " span:nth-child(3) i").attr("class", "fa fa-star orange");
                                $("#rating_" + id + " span:nth-child(4) i").attr("class", "fa fa-star orange");
                                $("#rating_" + id + " span:nth-child(5) i").attr("class", "fa fa-star orange");
                            }
                            if (obj == "Four") {
                                $("#rating_" + id + " span:nth-child(1) i").attr("class", "fa fa-star orange");
                                $("#rating_" + id + " span:nth-child(2) i").attr("class", "fa fa-star orange");
                                $("#rating_" + id + " span:nth-child(3) i").attr("class", "fa fa-star orange");
                                $("#rating_" + id + " span:nth-child(4) i").attr("class", "fa fa-star orange");
                            }
                            if (obj == "Three") {
                                $("#rating_" + id + " span:nth-child(1) i").attr("class", "fa fa-star orange");
                                $("#rating_" + id + " span:nth-child(2) i").attr("class", "fa fa-star orange");
                                $("#rating_" + id + " span:nth-child(3) i").attr("class", "fa fa-star orange");
                            }
                            if (obj == "Two") {
                                $("#rating_" + id + " span:nth-child(1) i").attr("class", "fa fa-star orange");
                                $("#rating_" + id + " span:nth-child(2) i").attr("class", "fa fa-star orange");
                            }
                            if (obj == "One") {
                                $("#rating_" + id + " span:nth-child(1) i").attr("class", "fa fa-star orange");
                            }
                        </script>
                    </div><!-- end row -->
                    <div class="pages">
                        <div class="pagination-container">
                            <ul class="pagination">
                                <li class="active"><a>1</a></li>
                            </ul>
                        </div>
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
