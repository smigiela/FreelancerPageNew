@extends('layouts.home')

@section('keywords') Strony www, cms, php, javascript, tanie strony, opole, tanie strony opole, portfolio @endsection

@section('meta_description') IT Solutions - Tanie profesjonalne strony www! Sprawdź portfolio! @endsection

@section('title') | Portfolio - zrealizowane projekty @endsection

@section('content')
  <section id="portfolio-index" class="wow slideInLeft">
  @include('_inc.frontend.nav-otherpages')
    <div class="hero is-primary m-t-2">
     <div class="hero-body container">
       <h1 class="title">Portfolio</h1>
       <h3 class="subtitle">Realizacje IT Solutions </h3>
     </div>
   </div><!--end of hero section-->
    <div class="container m-t-20">     
      <div class="columns">
        @foreach($portfolios as $portfolio)
        <div class="column">
          <div class="portfolio-item-home">             
             <figure>
                <a href="{{url('portfolio/' . $portfolio->slug)}}">
                    <img src="img/demo.png" alt="">
                 </a>
           		<figcaption>
                 <a href="{{url('portfolio/' . $portfolio->slug)}}"><h3>{{$portfolio->title}}</h3></a>{!!str_limit(strip_tags($portfolio->body), $limit=80)!!}
               </figcaption>
           	</figure>
          </div>
        </div>
        @endforeach
        </div>
        <div class="columns"><!--pagination-->
          <div class="column is-4 is-offset-3 paginate">
            {{ $portfolios->links("pagination::bootstrap-4") }}
          </div>
          </div>
    </div>





   <section id="contact-home" class="container-fluid hero is-info m-t-30 p-t-30 p-b-30">
     <div class="container">
      <h4 class="subtitle has-text-centered m-b-30">Zamów wycenę projektu dla Ciebie</h4>
        <h2 class="title has-text-centered m-t-30">Teraz!</h2>


       <div class="columns is-centered">
         <div class="column is-half is-narrow"><!--contact form-->
           <div class="columns">
             <div class="column">
              <input class="input" type="text" placeholder="Imię">
            </div>
            <div class="column">
              <input class="input" type="text" placeholder="Email">
            </div>
           </div>
             <div>
               <textarea class="textarea" placeholder="Opisz krótko czego oczekujesz"></textarea>
             </div>
             <div class="is-centered">
               <a href="#" class="button is-info is-inverted is-outlined m-t-10 is-block">Wyślij</a>
             </div>

         </div><!--end of contact form-->
        </div>
        </div>
   </section>
   </div>
 </div>
 </section>
@endsection
