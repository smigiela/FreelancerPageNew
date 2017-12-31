@extends('layouts.home')
@section('keywords') Programowanie, tanie strony www opole, firmowa strona, IT Solutions, Daniel Śmigiela, opole, blog @endsection
@section('meta_content') Blog poświęcony programowaniu i ciekawostkom ze świata IT - Sprawdź czego możesz się dowiedzieć @endsection

@section('title') | Blog poświęcony programowaniu - Daniel Śmigiela @endsection

@section('content')
  <div id="blog-index" class="wow slideInLeft">
  @include('_inc.frontend.nav-otherpages')
    <div class="hero is-primary m-t-2">
     <div class="hero-body container">
       <h1 class="title">Blog</h1>
       <h3 class="subtitle">Najnowsze wpisy</h3>
     </div>
   </div><!--end of hero section-->
   <div class="container m-t-20">
    <div class="columns">
       <div class="column is-8 is-offset-1"><!--blog content-->
        @foreach($posts as $post)
            <div class="card blog-item m-t-10">
              <div class="card-image">
                <img class="is-2by1" src="{{asset('/img/blog/' . $post->image)}}" height="240px">
              </div>
              <div class="card-content">
                <h2 class="card-header-title">
                  <a href="{{url('blog/post/' . $post->slug)}}">
                  {{$post->title}}
                </a>
                </h2>
                <p>{!!str_limit(strip_tags($post->body), $limit=80)!!}</p>
                <small class="card-footer is-size-7">
                  Dodano: {{$post->created_at}}
                  Kategoria: {{$post->Category->name}}<br>Tagi: 
                  @foreach($post->Tag as $tag)
                    <span class="tag">{{$tag->name}}</span>
                  @endforeach
                </small>
              </div>
            </div>
            
      @endforeach 
      <div class="columns"><!--pagination-->
          <div class="column is-4 is-offset-3 paginate">
            {{ $posts->links("pagination::bootstrap-4") }}
          </div>
          </div>
    </div>
       <div class="column asside-blog is-2 is-offset-1"><!--asside panel-->
        <div class="card card-asside larva-links">   
        <h4 class="subtitle">Kategorie:</h4>
          <ul>
            @foreach ($categories as $category)
            <a href="{{route('blog.category', $category->id)}}">
              <li>{{$category->name}}</li>
            </a>
            @endforeach
          </ul>
        <h4 class="subtitle m-t-45">Tagi:</h4>
          <div class="tags">
            @foreach ($tags as $tag)
            <a href="{{route('blog.tag', $tag->id)}}">
              <span class="tag">{{$tag->name}}</span>
            </a>
            @endforeach
          </div>
        <h4 class="subtitle m-t-45">Polecam:</h4>
        <img src="https://static01.helion.com.pl/global/okladki/326x466/ce73b63405821f468576dd9f942eeba7,selfco.jpg" alt="">
       </div><!--end of aside panel-->
      </div>
     </div>
   </div>


   <section id="contact-home" class="container-fluid hero is-info m-t-30 p-t-30 p-b-30">
     <div class="container">
      <h4 class="subtitle has-text-centered m-b-30">Masz pomysł na post, chcesz poznać moje zdanie na dany temat?</h4>
        <h2 class="title has-text-centered m-t-30">Napisz!</h2>


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
               <textarea class="textarea" placeholder="Twoja wiadomość"></textarea>
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
  </div>
@endsection
