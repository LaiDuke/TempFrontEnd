<style>
  #cover-tour-grid-list {
      padding: 132px 0 !important;
  }

  .pt-164 {
      padding: 0px 0 !important;
  }

  .block-info.t-grid-info p {
      overflow: hidden;
      height: 47px;
  }
</style>

<script src="{{asset('karnel/bundles/jquery-1.js')}}"></script>

<script src="{{asset('karnel/bundles/jquery-2.js')}}"></script>

<script>
  document.querySelectorAll("#for-active-ul li:nth-child(1)").setAttribute("class", "active");
  document.querySelectorAll(".dropdown-menu li").removeClass("class", "active");
</script>

<!--======================= FOOTER =======================-->
<section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

  <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
          <h1 class="footer-heading">CONTACT US</h1>
          <ul class="list-unstyled">
            <li><span><i class="fa fa-map-marker"></i></span>Garden West Karach</li>
            <li><span><i class="fa fa-phone"></i></span>+92 348 32 17 809</li>
            <li><span><i class="fa fa-envelope"></i></span>asad1807b@aptechgdn.net</li>
          </ul>
        </div><!-- end columns -->

        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
          <h1 class="footer-heading">COMPANY</h1>
          <ul class="list-unstyled">
            <li><a href="/Information/ToursitSpots">Tourist Spots</a></li>
            <li><a href="/Information/Hotels">Hotels</a></li>
            <li><a href="/Information/Resorts">Resorts</a></li>
            <li><a href="/Information/Transports">Transport</a></li>
            <li><a href="/Information/Restaurants">Restaurants</a></li>
          </ul>
        </div><!-- end columns -->

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
          <h1 class="footer-heading">RESOURCES</h1>
          <ul class="list-unstyled">
            <li><a href="#">Blogs</a></li>
            <li><a href="/Contact/Contact_Us">Contact Us</a></li>
            <li><a href="../../sitemap.xml">Site Map</a></li>
          </ul>
        </div><!-- end columns -->

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
          <h1 class="footer-heading">ABOUT US</h1>
          <p>Karnel Travels is a Tours and Travels Company which provides the various
            transportation facilities between the cities like tourist spots, transportation between
            different cities in the country, also provides accommodations in hotels, etc.</p>
          <ul class="social-links list-inline list-unstyled">
            <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
            <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
            <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
            <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
            <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
            <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
            <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
          </ul>
        </div><!-- end columns -->

      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end footer-top -->

  <div id="footer-bottom" class="ftr-bot-black">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
          <p>© 2020 <a href="#">Kernal Travel</a>. All rights reserved.</p>
        </div><!-- end columns -->

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
          <ul class="list-unstyled list-inline">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div><!-- end columns -->
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end footer-bottom -->

</section><!-- end footer -->


<script src="{{ asset('karnel/js/jquery.min.js')}}"></script>
<script src="{{ asset('karnel/js/jquery.colorpanel.js')}}"></script>
<script src="{{ asset('karnel/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('karnel/js/jquery.flexslider.js')}}"></script>
<script src="{{ asset('karnel/js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('karnel/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('karnel/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('karnel/js/custom-navigation.js')}}"></script>
<script src="{{ asset('karnel/js/custom-gallery.js')}}"></script>
<script src="{{ asset('karnel/js/custom-flex.js')}}"></script>
<script src="{{ asset('karnel/js/custom-owl.js')}}"></script>
<script src="{{ asset('karnel/js/custom-date-picker.js')}}"></script>



<script type="text/javascript">


  $(".list-group-item").click(function () {
    $("#cusdrop").slideToggle();
  });

  $('.list-group-item').on("click", function (event) {
    $('.fa-chevron-down').toggleClass('rotate');
    $('.fa-chevron-down').toggleClass('rotate-reset');
  });

  var position = $(window).scrollTop();

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > position) {
      $(".logo-area-inner").css({
        "width": "26%",
        "padding": "5px 0px"
      });
    }
    else {
      $(".logo-area-inner").css({
        "width": "37%",
        "padding": "5px 0",
        "transition": "all ease 500ms"
      });
    }

  });

  $('.colorPicker').click(function () {

    $('.colors').slideToggle(300);
  });



  $("#orange").click(function () {
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "/Content/orange.css");
    document.getElementsByTagName("head")[0].appendChild(element);
  });
  $("#blue").click(function () {
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "/Content/lightblue.css");
    document.getElementsByTagName("head")[0].appendChild(element);
  });
  $("#green").click(function () {
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "/Content/green.css");
    document.getElementsByTagName("head")[0].appendChild(element);
  });
  $("#red").click(function () {
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "/Content/red.css");
    document.getElementsByTagName("head")[0].appendChild(element);
  });
  $("#purple").click(function () {
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "/Content/purple.css");
    document.getElementsByTagName("head")[0].appendChild(element);
  });
  $("#carribeengreen").click(function () {
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "/Content/caribbean-green.css");
    document.getElementsByTagName("head")[0].appendChild(element);
  });
  $("#eggblue").click(function () {
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "/Content/egg-blue.css");
    document.getElementsByTagName("head")[0].appendChild(element);
  });
  $("#atomic").click(function () {
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "/Content/atomic.css");
    document.getElementsByTagName("head")[0].appendChild(element);
  });
  $("#brown").click(function () {
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "/Content/brown.css");
    document.getElementsByTagName("head")[0].appendChild(element);
  });
  $("#blueviolet").click(function () {
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "/Content/blue-violet.css");
    document.getElementsByTagName("head")[0].appendChild(element);
  });
  $("#pink").click(function () {
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "/Content/pink.css");
    document.getElementsByTagName("head")[0].appendChild(element);
  });
  $("#pigmentgreen").click(function () {
    var element = document.createElement("link");
    element.setAttribute("rel", "stylesheet");
    element.setAttribute("type", "text/css");
    element.setAttribute("href", "/Content/pigment-green.css");
    document.getElementsByTagName("head")[0].appendChild(element);
  });


              //$(".custom-transform").mouseenter(function(){
              //    $(".gallery-mask").css({
              //        "opacity": "1"
              //    });
              //    $(".gallery-title").css({
              //        "transform": "translateX(0)"
              //    });
              //});
              //$(".custom-transform").mouseleave(function () {
              //    $(".gallery-mask").css({
              //        "opacity": "0"
              //    });
              //    $(".gallery-title").css({
              //        "transform": "translateX(-120%)"
              //    });
              //});



</script>

<script src="{{asset('karnel/bundles/jqueryajax.js')}}"></script>

<script src="{{asset('karnel/bundles/jquery-3.js')}}"></script>

<script src="{{asset('karnel/bundles/bootstrap.js')}}"></script>
