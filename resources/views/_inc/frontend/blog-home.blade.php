<div class="container">
  <h2 class="title has-text-centered">Blog</h2>
  <h4 class="subtitle has-text-centered">Najświeższe wpisy</h4>

 <div class="columns">
   <div class="column is-10 blog-home-content">
     <div class="columns"><!--start blog row-->
      @foreach($posts as $post)
       <div class="column">
         <div class="card">
          <div class="card-image">
            <figure class="image is-16by9">
              <img src="{{asset('/img/blog/' . $post->image)}}">
            </figure>
          </div>
          <div class="card-content">
            <div class="content">
              <h4 class="modal-card-title">
                {{$post->title}}  
              </h4>
              {!!str_limit(strip_tags($post->body), $limit=60)!!}
              <hr>
              <small class="is-size-7">
                Opublikowano:
                <time datetime="2016-1-1">{{$post->created_at}}</time><br>
                Kategoria: {{$post->Category->name}}<br>
                Tagi: 
                @foreach($post->Tag as $tag)
                  <span class="tag">{{$tag->name}}</span>
                @endforeach
              </small>
            </div>
          </div>
        </div>
       </div>
       @endforeach
     </div><!--end of blog row-->
   </div>
   <div class="column is-2"><!--aside panel-->
     <h4 class="subtitle">Kategorie:</h4>
      <ul>
        @foreach ($categories as $category)
            <li>{{$category->name}}</li>
        @endforeach
      </ul>
    <h4 class="subtitle m-t-45">Tagi:</h4>
      <div class="tags">
        @foreach($tags as $tag)
          <span class="tag">{{$tag->name}}</span>
        @endforeach
      </div>
   </div><!--end of aside panel-->
 </div>
</div>
