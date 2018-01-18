@extends('layouts.home')

@section('keywords') Programowanie, tanie strony www opole, firmowa strona, IT Solutions, Daniel Śmigiela, opole @endsection
@section('meta_content') IT Solutions - Strona freelancera-programisty - Daniel Śmigiela | O mnie @endsection
@section('title') | O mnie @endsection

@section('content')
  <section id="about" class="wow slideInLeft">
  @include('_inc.frontend.nav-otherpages')
    <div class="hero is-primary m-t-2">
     <div class="hero-body container">
       <h1 class="title">O IT-Solutions</h1>
       <h3 class="subtitle">Agencji interaktywnej </h3>
     </div>
   </div><!--end of hero section-->
   <div class="container  m-t-30">
    <div class="columns">
      <div class="column is-8">
        <div class="subpage-text">
          <h2 class="subtitle">Działam na rynku od 2016r</h2>
            <p>Doświadczenie w językach opisowych zbieram od 2002r czyli od momentu kiedy uświadomiłem sobie jak ważna jest to umiejętność.</p><br>
            <p>Dziś mogę śmiało oferować zdobyte doświadczenie podzielone na 4 najważniejsze grupy:</p>
          <ul class="ul-custom">
            <li>Responsywne strony www</li>
            <li>Optymalizacja kodu - SEO</li>
            <li>Socialmedia i reklama</li>
            <li>Aplikacje webowe</li>
          </ul>
       </div>
     </div>
       <div class="column is-4">
         <img src="/img/users/smigiela.JPG" width="250" height="650" alt="">
      </div>
    </div><!--end columns-->
    <hr>
    <div class="columns">
      <div class="column is-4">
        <img src="/img/settings/logo.png" alt="">
      </div>
      <div class="column is-8">
        <div class="subpage-text">
          <h2 class="subtitle">Pierwszy kontakt z webmasteringiem dla biznesu...</h2>
          <p>...miał miejsce w 2016r kiedy wspólnie z ludźmi z niemal każdej dziedziny założyliśmy agencje ON-MEDIA.</p>
          <p>Dziś jednak oferuję swoje usługi jako freelancer, z umiejętnościami w każdej potrzebnej dziedzinie: html, css, php, mysql. Dzięki temu jestem w stanie od podstaw napisać aplikację webową oraz prostą stronę. Kod pisany przeze mnie jest zoptymalizowany pod kątem wyszukiwarki google.</p>
        </div>
      </div>
    </div><!--end columns-->
  </div><!--end of container-->
    <section class="hero subpage-hero">
      <div class="hero-body container">
        <h4 class="subtitle">Choć korzystam z gotowych bibliotek zgodnie z ich licencjami</h4>
        <h2 class="title">Każdy napisany kod jest mojego autorstwa</h2>
      </div>
    </section><!--end of subpage-hero-->
    <div class="container m-t-30 m-b-30">
<div class="columns">
  <div class="column">
  <a href="#" class="pop">
      <img src="/img/icons/certyfikaty/google.png" style="width: 400px; height: 264px;">
  </a>
  <a href="#" class="pop">
    <img src="/img/icons/certyfikaty/e-business.png" style="width: 400px; height: 264px;">
</a>
  
  <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">              
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <img src="" class="imagepreview" style="width: 100%;" >
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
   </div><!--end of container-->
  </section>
@endsection
@push('scripts')
<script> //modal certyficat
  $(function() {
    $('.pop').on('click', function() {
      $('.imagepreview').attr('src', $(this).find('img').attr('src'));
      $('#imagemodal').modal('show');   
    });		
  });
</script>
@endpush