<!DOCTYPE html>
<html lang="en">

@include('partials/head')
<body id="travel-agency">

    <!-- ##### Header Area Start ##### -->
    @include('partials/header')

    <!--================== PAGE-COVER ===============-->
    <section class="page-cover" id="cover-travel-guide">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <br><br><br>
                    <h1 class="page-title">Travel Guide</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Travel Guide</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->
    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="travel-guide" class="innerpage-section-padding">
            <div class="container">

                <h2 style="text-align: center;font-size: 44px;font-weight: bold;font-family: sans-serif;text-shadow: 5px 3px 9px;">Details Of Selfie Styler </h2>
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-12 content-side">
                        <div class="detail-tabs">
                            <div class="tab-content">

                                <div id="tv-guide-overview" class="tab-pane in active">
                                    <img src="{{asset('karnel/images/3.png')}}" class="img-responsive" alt="tour-guide-img" style="width: 100%;" />

                                    <div class="tab-text">
                                        <h3>Selfie Styler</h3>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>Country</td>
                                                        <td>Pakistan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Price</td>
                                                        <td>500.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Available</td>
                                                        <td>Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Go To 3d View</td>

                                                        <td>
                                                            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal" style="border-radius:3px">Click Here</button>
                                                            <div id="myModal" class="modal fade" role="dialog">
                                                                <div class="modal-dialog" style="width:100%;">

                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            <h4 class="modal-title">Selfie Styler</h4>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <p><iframe src="https://www.google.com/maps/embed?pb=!4v1579511789078!6m8!1m7!1sCAoSLEFGMVFpcE5TY19veDIydERiY2ExUlNwTHdpd1J3MkFFdTc3X1VEV3ZuWGQ3!2m2!1d25.0370001!2d67.1398694!3f236.74497241760008!4f4.525561119238276!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0; width:100%;" allowfullscreen=""></iframe></p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                    </tr>
                                                    <tr>
                                                        <td>Currency</td>
                                                        <td>PKR</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- end table-responsive -->

                                    <p>DescriptionDescriptionDescriptionDescriptionDescriptionDescription</p>
                                    </div><!-- end tab-text -->
                                </div><!-- end tv-guide-overview -->



                            </div><!-- end tab-content -->
                        </div><!-- end detail-tabs -->
                    </div><!-- end columns -->


                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end travel-guide -->
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
