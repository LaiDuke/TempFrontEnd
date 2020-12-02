<!--====== LOADER =====-->
<!--========== COLOR-PANEL ==========-->
<div id="colorPanel" class="colorPanel">
  <a id="cpToggle" href="#" class="colorPicker"></a>
  <ul style="display: block;" class="colors">
    <li>
      <a href="#" class="linka" id="orange" style="background-color: rgb(250, 166, 26);"></a>
    </li>
    <li>
      <a href="#" class="linka" id="blue" style="background-color: rgb(0, 173, 239);"></a>
    </li>
    <li>
      <a href="#" class="linka" id="green" style="background-color: rgb(166, 206, 57);"></a>
    </li>
    <li>
      <a class="linka" id="red" style="background-color: rgb(230, 42, 43);"></a>
    </li>
    <li>
      <a href="#" class="linka" id="purple" style="background-color: rgb(204, 102, 153);"></a>
    </li>
    <li>
      <a href="#" class="linka" id="carribeengreen" style="background-color: rgb(0, 204, 153);"></a>
    </li>
    <li>
      <a href="#" class="linka" id="eggblue" style="background-color: rgb(0, 204, 204);"></a>
    </li>
    <li>
      <a href="#" class="linka" id="atomic" style="background-color: rgb(255, 136, 77);"></a>
    </li>
    <li>
      <a href="#" class="linka" id="brown" style="background-color: rgb(198, 140, 83);"></a>
    </li>
    <li>
      <a href="#" class="linka" id="blueviolet" style="background-color: rgb(138, 57, 238);"></a>
    </li>
    <li>
      <a href="#" class="linka" id="pink" style="background-color: rgb(255, 98, 98);"></a>
    </li>
    <li>
      <a href="#" class="linka" id="pigmentgreen" style="background-color: rgb(0, 204, 68);"></a>
    </li>
  </ul>
</div><!-- end colorPanel -->
<!------------------------------------------Made By Asad Jawaid Contact 03483217809--------------------------------------->
<!--======== SEARCH-OVERLAY =========-->
<div class="overlay">
  <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
  <div class="overlay-content">
    <div class="form-center">
      <form>
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." required />
            <span class="input-group-btn"><button type="submit" class="btn"><span><i
                    class="fa fa-search"></i></span></button></span>
          </div><!-- end input-group -->
        </div><!-- end form-group -->
      </form>
    </div><!-- end form-center -->
  </div><!-- end overlay-content -->
</div><!-- end overlay -->

<!-- Navabar -->
<div id="top-bar" class="tb-text-grey" >
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div id="info">
          <ul class="list-unstyled list-inline">
            <li><span><i class="fa fa-map-marker"></i></span>Ton That Thuyet</li>
            <li><span><i class="fa fa-phone"></i></span>+84 999 999 999</li>
          </ul>
        </div><!-- end info -->
      </div><!-- end columns -->

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div id="links">
          <ul class="list-unstyled list-inline">
            <li><a href="/Account/Login"><span><i class="fa fa-lock"></i></span>Welcome</a></li>

          </ul>
        </div><!-- end links -->
      </div><!-- end columns -->
    </div><!-- end row -->
  </div><!-- end container -->
</div><!-- end top-bar -->
<div>


  <!--Sidebar NAV-->
  <div class="sidenav-content">
    <div id="mySidenav" class="sidenav">
      <h2 id="web-name"><span><i class="fa fa-plane"></i></span>KARNEL TRAVELS</h2>

      <div id="main-menu">
        <div class="closebtn">
          <button class="btn btn-default" id="closebtn">&times;</button>
        </div><!-- end close-btn -->

        <div class="list-group panel">

          <a href="{{url('/')}}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Home<span></span></a>

          <a href="#" class="list-group-item"><span><i class="fa fa-plane link-icon"></i></span>Information<span><i
                class="fa fa-chevron-down arrow rotate-reset"></i></span></a>
          <div id="cusdrop">
            <a class="list-group-item" href="{{url('/tourist-spot')}}">Tourist Spots</a>
            <a class="list-group-item" href="{{url('/hotel')}}">Hotels</a>
            <a class="list-group-item" href="{{url('/resort')}}">Resorts</a>
            <a class="list-group-item" href="{{url('/transport')}}">Transport</a>
            <a class="list-group-item" href="{{url('/restaurant')}}">Restaurants</a>
          </div><!-- end sub-menu -->

          <a href="{{url('/search')}}" class="list-group-item"><span><i
                class="fa fa-search link-icon"></i></span>Search<span></span></a>

          <a href="{{url('/about')}}" class="list-group-item"><span><i
                class="fa fa-user-circle link-icon"></i></span>About<span></span></a>

          <a href="{{url('/contact')}}" class="list-group-item"><span><i
                class="fa fa-phone-square link-icon"></i></span>Contact Us<span></span></a>



        </div><!-- end list-group -->
      </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
  </div><!-- end sidenav-content -->
  <!--============= PAGE-COVER =============-->
  <section class="page-cover style pt-164">
    <div class="header-absolute">
      <nav class="navbar navbar-default main-navbar navbar-custom navbar-black" id="mynavbar">
        <div class="container">
          <div class="navbar-header customnav">
            <button type="button" class="navbar-toggle" id="menu-button">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="header-search hidden-lg">
              <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
            </div>
            <div class="logo-area">
              <div class="logo-area-inner">
                <a href="{{url('/')}}">
                  <img src="{{asset('karnel/images/Logo.png')}}" />
                </a>
              </div>
            </div>
          </div>  <!-- end navbar-header -->

          <div class="collapse navbar-collapse" id="myNavbar1">
            <ul class="nav navbar-nav navbar-right" id="for-active-ul">
              <li>
                <a href="{{url('/')}}">Home</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">INFORMATION<span><i
                      class="fa fa-angle-down"></i></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{url('/tourist-spot')}}">Tourist Spots</a></li>
                  <li><a href="{{url('/hotel')}}">Hotels</a></li>
                  <li><a href="{{url('/resort')}}">Resorts</a></li>
                  <li><a href="{{url('/transport')}}">Transport</a></li>
                  <li><a href="{{url('/restaurant')}}">Restaurants</a></li>
                </ul>
              </li>
              <li>
                <a href="{{url('/search')}}">Search</a>
              </li>
              <li>
                <a href="{{url('/about')}}">About</a>
              </li>
              <li>
                <a href="{{url('/contact')}}">Contact Us</a>
              </li>

              <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>

            </ul>
          </div>


        </div><!-- end navbar collapse -->
      </nav><!-- end navbar -->
    </div><!-- end container -->

    <!-- end header-absolute -->
  </section>
</div>

