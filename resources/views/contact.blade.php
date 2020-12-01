
<!DOCTYPE html>
<html lang="en">
@include('partials/head')
<body id="travel-agency">
@include('partials/header')

<style>
        .page-cover {
            padding: 0 !important;
            position: relative;
        }
    </style>
    <section class="innerpage-wrapper">
        <div id="contact-us-2">

            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d904.9780890799371!2d67.0255736!3d24.8668428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e6b1566c46f%3A0x65318f4eb62c7aa8!2sAptech%20Computer%20Education%20Garden%20Center!5e0!3m2!1sen!2s!4v1579252495442!5m2!1sen!2s"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div><!-- end map -->

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">

                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="contact-block-2">
                                    <span class="border-shape-top"></span>
                                    <span><i class="fa fa-map-marker"></i></span>
                                    <h4>Find us at</h4>
                                    <p>Garden West</p>
                                    <span class="border-shape-bot"></span>
                                </div><!-- end contact-block-2 -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-4">
                                <div class="contact-block-2">
                                    <span class="border-shape-top"></span>
                                    <span><i class="fa fa-envelope"></i></span>
                                    <h4>Email us at</h4>
                                    <p>asad1807b@aptechgdn.net</p>
                                    <span class="border-shape-bot"></span>
                                </div><!-- end contact-block-2 -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-4">
                                <div class="contact-block-2">
                                    <span class="border-shape-top"></span>
                                    <span><i class="fa fa-phone"></i></span>
                                    <h4>Call us at</h4>
                                    <p>+92 348 321 78 09</p>
                                    <span class="border-shape-bot"></span>
                                </div><!-- end contact-block-2 -->
                            </div><!-- end columns -->
                        </div><!-- end row -->

                        <div id="contact-form-2" class="innerpage-section-padding">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-10 col-lg-offset-1">
                                    <div class="page-heading">
                                        <h2>Contact Us</h2>
                                        <hr class="heading-line" />
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 contact-form-2-text">
                                            <p><strong>Important:</strong>Karnel Travels is a Tours and Travels Company which provides the
                                                various
                                                transportation facilities between the cities like tourist spots, transportation between
                                                different cities in the country, also provides accommodations in hotels, etc. Also they
                                                provide the online facility where the customers can visit online, view and order for
                                                the tours and as well the transportation. Now they want to provide a website,
                                                through which they wan to attract the customers. They want to reach out to the
                                                customers by providing various information services like the list of tourist spot,
                                                information about the various hotels and restaurants, etc. They want the website to
                                                be a URL Specific. So they approached us to build a website for them.</p>
                                            <ul class="social-links list-inline list-unstyled">
                                                <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                                            </ul>

                                        </div>

                                        <div class="col-xs-12 col-sm-6" id="contact">

                                            <form action="/Contact/Contact_Us" id="removeaftersubmit" method="post"><input
                                                    name="__RequestVerificationToken" type="hidden"
                                                    value="2VyaSqWMqC0jeV4MKASUlnM2Qb2pLqTF0ZzZ2ahOZQpijTSDMGPflKyYAVOe_a59TZ6KlyuuI59G90A5w9NJRFtomcuckUgr2FY75R0a1HQ1" />
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control text-box single-line" data-val="true"
                                                                   data-val-length="Length Must Be Between 3 to 15 Character" data-val-length-max="15"
                                                                   data-val-length-min="3" data-val-required="The Name field is required." id="Name"
                                                                   name="Name" placeholder="Name" type="text" value="" />
                                                            <span class="field-validation-valid text-danger" data-valmsg-for="Name"
                                                                  data-valmsg-replace="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group">

                                                            <input class="form-control text-box single-line" data-val="true"
                                                                   data-val-required="The Email field is required." id="Email" name="Email"
                                                                   placeholder="Email" type="email" value="" />
                                                            <span class="field-validation-valid text-danger" data-valmsg-for="Email"
                                                                  data-valmsg-replace="true"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control text-box single-line" data-val="true"
                                                           data-val-length="Length Must Be Between 4 to 15 Character" data-val-length-max="15"
                                                           data-val-length-min="4" data-val-required="The Subject field is required." id="Subject"
                                                           name="Subject" placeholder="Subject" type="text" value="" />
                                                    <span class="field-validation-valid text-danger" data-valmsg-for="Subject"
                                                          data-valmsg-replace="true"></span>
                                                </div>
                                                <div class="form-group">
                        <textarea class="form-control text-box multi-line" data-val="true"
                                  data-val-length="Description Must Be Between 15 To 500 Characters !!"
                                  data-val-length-max="500" data-val-length-min="15"
                                  data-val-required="The Description field is required." id="Description" name="Description"
                                  placeholder="Your Message" rows="4">
                        </textarea>
                                                    <span class="field-validation-valid text-danger" data-valmsg-for="Description"
                                                          data-valmsg-replace="true"></span>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-orange">Send</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end contact-us -->
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
