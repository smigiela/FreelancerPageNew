@extends('layouts.home')
@section('keywords') Programowanie, tanie strony www opole, firmowa strona, IT Solutions, Daniel Śmigiela, opole, kontakt @endsection
@section('meta_content') IT Solutions - Strona freelancera-programisty - Daniel Śmigiela | Kontakt @endsection
@section('title') - Kontakt @endsection

@section('content')
   <section id="kontakt" class="wow slideInLeft">
   @include('_inc.frontend.nav-otherpages')
     <div class="hero is-primary m-t-2">
      <div class="hero-body container">
        <h1 class="title">Kontakt</h1>
        <h3 class="subtitle">Co mogę dla Ciebie zrobić ? </h3>
      </div>
    </div><!--end of hero section-->
     <div class="container m-t-20 m-b-10">
        <div class="columns">

            <div class="column is-8">
                 {!! Form::open([url('kontakt', ['method' => 'POST'])]) !!}
                    <div class="form-group">
                        {{Form::text('name', '', ['class' => 'input', 'placeholder' => 'Twoje imię'])}}
                    </div>
                    <div class="form-group">
                        {{Form::text('email', '', ['class' => 'input m-t-10', 'placeholder' => 'Twój email'])}}
                    </div>
                    <div class="form-group">
                        {{Form::text('subject', '', ['class' => 'input m-t-10', 'placeholder' => 'Temat'])}}
                    </div>
                    <div class="form-group">
                        {{Form::textarea('message', '', ['class' => 'textarea m-t-10', 'placeholder' => 'Twoja wiadomość'])}}
                    </div>
                    <div>
                        {{Form::submit('Wyślij', ['class' => 'button is-primary m-t-10  is-block'])}}
                    </div>
                {!! Form::close() !!}
            </div>

            <div class="column is-4">
               <adress>
                   <h3 style="font-weight: bold;">IT Solutions</h3>
                   <h5>Opole, pl. Teatralny</h5>
                   <i class="fa fa-phone"></i>725-828-327<br>
                   <i class="fa fa-envelope-o"></i><a href="mailto:biuro@it-solutions.opole.pl">biuro@it-solutions.opole.pl</a>
               </adress>
                <iframe width="350" height="300" class="m-t-15" frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJl8NvpAhTEEcRl5uhKphQ3Hg&key=AIzaSyBxfQSUhfUiDBE5iXeh-cYZ1vzkg_tablY" allowfullscreen></iframe>
            </div>
        </div>
      </div>
    </section>
@endsection
