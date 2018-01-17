@extends('layouts.home')
@section('keywords') Programowanie, tanie strony www opole, firmowa strona, IT Solutions, Daniel Śmigiela, opole, oferta, własny cms @endsection
@section('meta_content') IT Solutions | Autorski CMS - Strona freelancera-programisty - Daniel Śmigiela  @endsection
@section('title') | Autorski CMS - ITS_CMS - Poznaj narzędzie, do zarządzania Twoją stroną @endsection

@section('content')
  <section id="offer" class="wow slideInLeft">
  @include('_inc.frontend.nav-otherpages')
    <div class="hero is-primary m-t-2">
     <div class="hero-body container">
       <h1 class="title">Autorski CMS - ITS_CMS</h1>
       <h3 class="subtitle">Pełnoprawny system zarządzania treścią na którym bazują moje witryny </h3>
     </div>
   </div><!--end of hero section-->
   <div class="container m-t-20">
     <div class="columns">
       <div class="column is-4">
         <img src="/img/icons/ITSCMS/its_cms2.png" alt="autorski_cms">
       </div>
       <div class="column is-8">
         <div class="subpage-text">
           <h2 class="subtitle">Poznaj mój własny system</h2>
           <p>ITS_CMS to pełnoprawny system zarządzania treścią! Zawiera w sobie podstawowe funkcjonalności, aby ułatwić pracę z każdą witryną, którą wykonuję</p><br>
           <p>Zamawiając stronę u mnie masz Otrzymujesz ten system wliczony w zamówienie, jego wykonanie wyceniam na extra 1790zł, których nie musisz ponosić!</p>
         </div>
       </div>
     </div><!--end of columns-->
     <hr>
     <div class="columns">
       <div class="column is-8">
        <div class="subpage-text">
           <h2 class="subtitle">Dodawanie postów, portfolio ...</h2>
           <p>...jeszcze nigdy nie było tak proste! Bardziej intuicyjne mechanizmy niż w przypadku znanych systemów CMS takich jak Wordpress czy Joomla. </p><br />
           <p>Każdy post domyślnie zawiera takie sekcje jak 'tytuł', 'slug' (przyjazna nazwa w adresie url, wspomagająca pozycjonowanie), 'kategorię', 'tagi' (kategoriami i tagami możesz zarządzać) a także 'zdjęcie' wyróżniające Twój wpis. Zawiera również sekcję SEO - 'słowa kluczowe', 'opis meta', 'open graph' - nie musisz grzebać w ustawieniach strony aby zadbać o SEO - podczas tworzenia artykułu wpisujesz wszelkie niezbędne informacje dla SEO, które zostaną umieszczone w odpowiednim miejscu w kodzie każdej podstrony z postem!</p>
        </div>
       </div>
       <div class="column is-4">
         <img src="/img/icons/ITSCMS/its_cms3.png" alt="">
       </div>
     </div><!--end of columns-->
     <hr>
     <div class="columns">
       <div class="column is-4">
         <img src="/img/icons/ITSCMS/its_cms4.png" alt="">
       </div>
     <div class="column is-8">
       <div class="subpage-text">
         <h2 class="subtitle">Zarządzanie użytkownikami</h2>
         <p>a także ich uprawnieniami i rolami</p>
         <p>Masz więcej niż jednego użytkownika? Nadaj im odpowiednie prawa!</p><br>
         <p>Nie każdy musi mieć dostęp do zarządzania cała stroną. Masz osobę odpowiedzialną za pisanie treści? Ta osoba nie potrzebuje mieć dostępu do zaawansowanych funkcji takich jak skrypty analizujące zewnętrznych systemów. Dzięki ITS_CMS tworzysz odpowiednie role dając im odpowiednie uprawnienia a następnie role przypisujesz do użytkowników.</p>
       </div>
     </div>
   </div><!--end of columns-->
   <hr>
   <div class="columns">
     <div class="column is-8">
       <div class="subpage-text">
         <h2 class="subtitle">Dostosowany do wszystkich urządzeń</h2>
         <p>jesteś w podrózy i masz pomysł na post? Możesz napisać szkic i zapisać go na swojej stronie, lub napisać gotowy post i od razu go opublikować! </p><br>
         <p>Mój CMS wyświetla się poprawnie na wszystkich urządzeniach! Dzieki czemu aby dostarczać nowe treści swoim odbiorcom wystarczy Ci urządzenie z dostępem do sieci www.</p>
       </div>
     </div>
     <div class="column is-4">
       <img src="/img/icons/ITSCMS/its_cms_mobile.png"  style="width:50%" alt="">
     </div>
   </div><!--end of columns-->
 </div><!--end of container-->
 <section class="subpage-hero hero">
    <div class="hero-body container">
      <h4 class="subtitle">Autorskie zabezpieczenia znane tylko autorowi - ale co mi to da?</h4>
      <h2 class="title">Bezpieczeństwo! </h2>
    </div>
 </section><!--end of subpage-hero-->
 <div class="container m-t-20 p-b-30">
  <div class="columns">
    <div class="column is-8">
      <div class="subpage-text">
        <h2 class="subtitle">Bezpieczeństwo przede wszystkim</h2>
        <p>Autorski CMS sprawia, że użyte zabezpieczenia, moduły autoryzacji uzytkowników stają sie trudniejsze do obejścia niz w przypadku znanych systemów.</p>
        <p>Dziennie mnóstwo robotów przemierza strony internetowe w poszukiwaniu stron logowania popularnych systemów cms takich jak Wordpress czy Joomla. Gdy napotkaja charakterystyczną stronę logowania próbują złamać zabezpieczenie.</p>
        <p>Czy możesz sobie pozwolić na to aby utracić swoje cenne dane na rzecz jakiegoś pseudo hackera ? </p>
        <p>Twoja strona ma być dla Ciebie narzędziem do zarabiania, ma sprzedawać Twoje usługi, produkty. Nie możesz pozwolić sobie na przejęcie dostępu do niej przez osoby niepowołane! Dlatego też autorski system z zabezpieczeniami nieznanymi nikomu poza twórcą kodu jest jest przeznaczony specjalnie dla Ciebie!</p>
      </div>
    </div>
    <div class="column is-4">
      <img src="/img/icons/ITSCMS/its_cms_mobile3.png"  style="width:50%" alt="">
    </div>
  </div>
 </div>
@endsection
