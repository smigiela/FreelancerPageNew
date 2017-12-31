@extends('layouts.home')
@section('keywords') Programowanie, tanie strony www opole, firmowa strona, IT Solutions, Daniel Śmigiela, opole, oferta @endsection
@section('meta_content') IT Solutions - Strona freelancera-programisty - Daniel Śmigiela | Oferta @endsection
@section('title') | Oferta @endsection

@section('content')
  <section id="offer" class="wow slideInLeft">
  @include('_inc.frontend.nav-otherpages')
    <div class="hero is-primary m-t-2">
     <div class="hero-body container">
       <h1 class="title">Oferta</h1>
       <h3 class="subtitle">Jaki Twój problem mogę rozwiązać ? </h3>
     </div>
   </div><!--end of hero section-->
   <div class="container m-t-20">
     <div class="columns">
       <div class="column is-4">
         <img src="/img/rwd1.png" alt="rwd">
       </div>
       <div class="column is-8">
         <div class="subpage-text">
           <h2 class="subtitle">Responsywny design</h2>
           <p>Strony, które tworzę są dopasowane do wszystkich urządzeń z zastosowaniem zasady "mobile first", ponieważ żyjemy w biegu i coraz częściej użytkownicy smartfonów i tabletów przeglądają internet będąc w trasie. Nie można pozwolić na to, aby Twoja strona na ich urządzeniach wyświetlała się nieporpawnie, przecież to potencjalni klienci!</p><br>
           <p>Zamawiając stronę u mnie masz pewność, że strona wyświetli się poprawnie na każdym urządzeniu! Od smartfona przez tablet do dużego monitora!</p>
         </div>
       </div>
     </div><!--end of columns-->
     <hr>
     <div class="columns">
       <div class="column is-8">
        <div class="subpage-text">
           <h2 class="subtitle">Zoptymalizowany kod pod kątem wyszukiwarek...</h2>
           <p>...zapewnia dobre pozycjonowanie w wynikach wyszukiwania, dzięki czemu potencjalni klienci szybciej trafią do Ciebie zamiast konkurencji. </p><br />
           <p>Sama strona w internecie to połowa sukcesu. Jednak co z tego, jak nikt jej nie odnajdzie w gąszczu wypluwanych prze wyszukiwarkę wynikach ? Wiele osób stawia na automatyczne generatory stron www, nie zdając sobie sprawy jak kiepskiej jakości generują kod. Jednak człowiek piszący kod zgodnie ze standardami google, html5 góruje nad automatycznymi procesami, przynajmniej w kwestii tworzenia stron.</p>
        </div>
       </div>
       <div class="column is-4">
         <img src="/img/seo1.png" alt="">
       </div>
     </div><!--end of columns-->
     <hr>
     <div class="columns">
       <div class="column is-4">
         <img src="/img/domena.png" alt="">
       </div>
     <div class="column is-8">
       <div class="subpage-text">
         <h2 class="subtitle">Darmowa domena .PL</h2>
         <p>Każda strona w internecie musi mieć swój adres!</p>
         <p>Wybór adresu nie jest prostą sprawą wbrew pozorom, dobór odpowiedniej domeny, którą ludzie zapamiętają, będą kojarzyć i która będzie odpowiadać frazom, po których witryna jest pozycjonowana w wyszukiwarkach jest sztuką! Mamy domeny regionalne, funkcjonalne, globalne etc.</p><br>
         <p>Nie zawracaj sobie głowy doborem odpowiedniej domeny dla Twojego biznesu. Zamawiając stronę u mnie pomoc w doborze domeny oraz domenę otrzymasz gratis!</p>
       </div>
     </div>
   </div><!--end of columns-->
   <hr>
   <div class="columns">
     <div class="column is-8">
       <div class="subpage-text">
         <h2 class="subtitle">Nie musisz porównywać firm hostingowych, ofert...</h2>
         <p>...skoro ktoś to może zrobić za Ciebie! </p><br>
         <p>Zamawiając sronę u mnie masz zagwarantowany odpowiedni hosting do wybranej aplikacji webowej, biorę na siebie pełną konfigurację hostingu, podpięcie domen, wrzucenie gotowej strony. Reasumując Twój udział ogranicza się tylko do zlecenia projektu, podpisania umowy, resztą zajmę się ja!</p>
       </div>
     </div>
     <div class="column is-4">
       <img src="/img/hosting.png" alt="">
     </div>
   </div><!--end of columns-->
 </div><!--end of container-->
 <section class="subpage-hero hero">
    <div class="hero-body container">
      <h4 class="subtitle">Inni mają ukryte opłaty? Abonmenty? Opłaty okresowe?</h4>
      <h2 class="title">U mnie zapłacisz tylko raz!</h2>
    </div>
 </section><!--end of subpage-hero-->
 <div class="container m-t-20 p-b-30">
  <div class="columns">
    <div class="column is-8">
      <div class="subpage-text">
        <h2 class="subtitle">Czego finalnie możesz się spodziewać ?</h2>
        <p>Otóż, zlecasz mi wykonanie strony/aplikacji. Otrzymujesz wstępny projekt graficzny oraz kosztorys. Jeśli akceptujesz - podpisujemy umowe B2B lub B2C - jak wolisz.</p>
        <p>Po wykonaniu zlecenia otrzymujesz w pełni działąjącą stronę/aplikację, dostęp do panelu zarządzania stroną, dostęp do panelu hostingowego, dostęp do zarządzania domeną.</p>
        <p>Wszelkie umowy zawarte z firmami hostingowymi, rejestratorami domen, profile społecznościowe, google firma, itd zostają zawarte na Twoje dane i przekazane Tobie po zakończeniu projektu.</p>
        <p>Możesz pozostawić witrynę w moich rękach i uiszczać opłatę abonamentową(miesięczną lub roczną) w zamian za pełną administrację witryną.</p>
      </div>
    </div>
    <div class="column is-4">
      <img src="/img/finger.png" alt="">
    </div>
  </div>
 </div>
@endsection
