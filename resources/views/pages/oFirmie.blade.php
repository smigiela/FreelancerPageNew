@extends('layouts.home')

@section('keywords') Programowanie, tanie strony www opole, firmowa strona, IT Solutions, Daniel Śmigiela, opole @endsection
@section('meta_content') IT Solutions - Strona freelancera-programisty - Daniel Śmigiela | O firmie @endsection
@section('title') | O firmie @endsection

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
       <div class="column is-4">
         <img src="/img/icons/social-icons.png" alt="">
       </div>
       <div class="column is-8">
         <div class="subpage-text">
           <h2 class="subtitle">Poznaj moc socialmediów</h2>
           <p>Bill Gates powiedział, że jeśli nie ma Twojego biznesu w internecie, to on nie istnieje. To fakt, jednak kluczową rolę odgrywają tu social-media. Skoro ludzie, szczególnie młodzi, choć coraz częściej wiek nie ma tu znaczenia, spędzają mnóstwo czasu w social-mediach, to najszybciej do nich można dotrzeć właśnie tą drogą!</p><br />
           <p>Dlatego właśnie oferuję połączenie zrobionej strony www lub aplikacji webowej z social-mediami! Profile, podlinkowania to silnik napędowy dla Twojego biznesu!</p>
         </div>
       </div>
     </div><!--end of columns-->
     <hr>
     @include('_inc.frontend.portfolio-home')
   </div><!--end of container-->
  </section>
@endsection
