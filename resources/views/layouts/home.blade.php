<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  @include('_inc.head')

  <body>
    
      <!--Navbar is include in slider section and in other pages -->

        @if(Request::is('/'))<!--Start if - only "/" request -->
          <!--slider-->
              <section id="slider" class="container-fluid">
                @include('_inc.frontend.slider')
              </section>
          <!--end of slider-->

          <!--about-->
              <section id="about" class="container-fluid p-t-30 p-b-30 m-t-15">
              @include('_inc.frontend.about')
            </section>
          <!--end of about-->

          <!-- offer -->
              <section id="offer" class="container-fluid p-t-30 m-t-15">
                @include('_inc.frontend.offer')
              </section>

          <!-- end of offer -->

          <!-- 3 portfolios -->
              <section id="portfolio-home" class="container-fluid p-t-30 p-b-30 m-t-15">              
                       
                @include('_inc.frontend.portfolio-home')
              </section>
          <!-- end of 3 portfolios -->

          <!-- call2action -->
              <section id="call2action" class="m-t-30 hero is-primary wow tada" data-wow-delay="1s" data-wow-duration="2">
                @include('_inc.frontend.call2action')
              </section>
          <!-- end of call2action -->

          <!-- blog-posts -->
              <section id="blog-posts-home" class="container-fluid p-t-30 p-b-30">
                @include('_inc.frontend.blog-home')
              </section>
          <!-- end of blog-posts -->

          <!-- kontakt -->
              <section id="contact-home" class="container-fluid hero is-info p-t-30 p-b-30">
                @include('_inc.frontend.contact')
              </section>
          <!-- kontakt -->
        @endif<!--end of if - only "/" request -->

          <!-- content -->
            <div id="content" class="container-fluid">
              @yield('content')
            </div>
          <!-- end of content -->


          <!--footer-->
            <footer class="footer p-t-20">
              <div class="container">
                <div class="columns">
                  <div class="column">
                    <i class="fa fa-phone" aria-hidden="true"></i>725-828-327
                  </div>
                  <div class="column has-text-centered">
                    <a href="mailto:biuro@it-solutions.opole.pl"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>biuro@it-solutions.opole.pl</a>
                  </div>
                  <div class="column">
                    <div class="nav-social level-right">
                      @include('_inc.frontend.social-box')
                    </div>
                  </div>
                </div>
                <hr>
                  <p class=" has-text-centered">IT Solutions &copy; 2017</p>
              </div>
            </footer>
          <!--end of footer-->

          <!--scripts include-->
            <script src="{{ asset('js/frontend.js') }}"></script>
            <script src="{{ asset('js/wow.js') }}"></script>
            <script src="{{ asset('js/facebook.js') }}"></script>
            <script>
              new WOW().init();
            </script>
            

            @stack('scripts')
          <!--end of include scripts--> 
    </body>
</html>
