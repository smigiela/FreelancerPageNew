
  <nav class="navbar is-transparent has-shadow"><!-- navbar -->
    <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{route('frontend.index')}}">
        <img src="/img/logo-new.png" alt="it-solutions">
      </a>
      <div id="menu-button" class="navbar-burger burger" data-target="navbar" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="navbarsExampleDefault" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="{{route('frontend.index')}}">
          Główna
        </a>
        <a class="navbar-item" href="{{route('frontend.oFirmie')}}">
          O mnie
        </a>
        <a class="navbar-item" href="{{route('frontend.oferta')}}">
          Oferta
        </a>
        <a class="navbar-item" href="{{route('portfolio.index')}}">
          Portfolio
        </a>
        <a class="navbar-item" href="{{route('blog.index')}}">
          Blog
        </a>
        <a class="navbar-item" href="{{route('frontend.kontakt')}}">
          Kontakt
        </a>
      </div><!-- end of navbar left side -->
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="nav-social">
            @include('_inc.frontend.social-box')
          </div>
        </div>
      </div>
    </div>
  </div>
</nav><!-- end of navbar -->


@push('scripts')
  <script>
    $(document).ready(function(){
      $('#menu-button').click(function(){
      $('#navbarsExampleDefault').stop().slideToggle(300);
      });
    });
  </script>
@endpush
