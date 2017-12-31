@extends('layouts.home')
@section('keywords') {{$post->keywords}} @endsection
@section('meta_content') Blog poświęcony programowaniu | {{$post->meta_content}} @endsection

@section('title') | Blog - {{$post->title}} @endsection

@section('content')
@include('_inc.frontend.nav-otherpages')
  <div id="blog-post" class="container m-t-30 m-b-30">
    <div class="columns">
      <div class="column blog-post-content is-10"><!--content of post -->

        <img class="blog-post-image" src="{{asset('/img/blog/' . $post->image)}}" alt=""><!--post photo-->

        <h2 class="title blog-post-title">{{$post->title}}</h2><!--post title-->
        <div class="blog-post-footer">
          <small>Opublikowano: {{$post->created_at}} | Kategoria: {{$post->Category->name}} | Tagi: @foreach($post->Tag as $tag)
                {{$tag->name}},
              @endforeach 
              |
          </small>

        </div>
        <hr>
        <div class="blog-post-body"><!--blog post body-->
          {!! $post->body !!}
        </div><!-- end of blog post body-->

        {{--  <hr>

        <div class="blog-post-comments"><!--comments-->
          <div class="add-comment"><!--add comments-->
            <h2 class="title">Dodaj komentarz</h2>
            <div class="columns ">
              <div class="column is-half is-narrow"><!--contact form-->
                <div class="columns">
                  <div class="column">
                   <input class="input is-small is-primary" type="text" placeholder="Imię">
                 </div>
                 <div class="column">
                   <input class="input is-small is-primary" type="text" placeholder="Email">
                 </div>
                </div>
                  <div>
                    <textarea class="textarea is-small is-primary" placeholder="Twoja wiadomość"></textarea>
                  </div>
                  <div class="is-centered">
                    <a href="#" class="button is-primary is-outlined m-t-10 is-block">Wyślij</a>
                  </div>

              </div><!--end of contact form-->
             </div>
          </div><!--end of add comments-->
          <h3 class="comment-title"><i class="fa fa-comment"></i>Komentarze: 0 </h3>
          <div class="comments-list">
          <div class="comment"><!--list of comments-->
            <div class="author-info">
                <img src="https://www.gravatar.com/avatar/daniel.smigiela@outlook.com" . "?s=50&d=mm" class="author-image m-t-10">
                <div class="author-name">
                  <h4>Nazwa autora</h4>

                  <p class="author-time">komentarz-data dodania</p>
                </div>
            </div>
            <div class="comment-content">treść komentarza
            </div>
          </div>
          <div class="comment">
            <div class="author-info">
                <img src="https://www.gravatar.com/avatar/daniel.smigiela@outlook.com" . "?s=50&d=mm" class="author-image m-t-10">
                <div class="author-name">
                  <h4>Nazwa autora</h4>

                  <p class="author-time">komentarz-data dodania</p>
                </div>
            </div>
            <div class="comment-content">treść komentarza
            </div>
          </div>
          <div class="comment">
            <div class="author-info">
                <img src="https://www.gravatar.com/avatar/daniel.smigiela@outlook.com" . "?s=50&d=mm" class="author-image m-t-10">
                <div class="author-name">
                  <h4>Nazwa autora</h4>

                  <p class="author-time">komentarz-data dodania</p>
                </div>
            </div>
            <div class="comment-content">treść komentarza
            </div>
          </div>

        </div><!--list of comments-->
        </div><!--end of comments-->  --}}

      </div><!--end of content of post -->
      <div class="column asside-blog is-2"><!--asside panel-->
        <div class="card card-asside larva-links"> 
        <h4 class="subtitle">Kategorie:</h4>
         <ul>
           @foreach($categories as $category)
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
@endsection
