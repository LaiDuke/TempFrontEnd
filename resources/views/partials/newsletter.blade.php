<!--========================= NEWSLETTER-1 ==========================-->
<section id="newsletter-1" class="section-padding back-size newsletter">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <h2>Subscribe Our Newsletter</h2>
        <p>Subscibe to receive our interesting updates</p>
        <form action="{{ url('/home') }}" method="post">
            @csrf
          <div class="form-group">
            <div class="input-group">
              <input name="Email" type="email" class="form-control input-lg" placeholder="Enter your email address" required />
                <span class="input-group-btn"><button type="submit" class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
            </div>
              <br>
              <div class="input-group">
                  <input name="Content" class="form-control input-lg" placeholder="Enter Something" required style="width: 610px" />
              </div>
          </div>
        </form>
      </div><!-- end columns -->
    </div><!-- end row -->
  </div><!-- end container -->
</section><!-- end newsletter-1 -->
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

