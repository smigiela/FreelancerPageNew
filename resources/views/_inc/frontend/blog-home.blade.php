<div class="container">
  <h2 class="title has-text-centered">Blog</h2>
  <h4 class="subtitle has-text-centered">Najświeższe wpisy</h4>

 <div class="columns">
   <div class="column is-10 blog-home-content">
     <div class="columns m-t-25"><!--start blog row-->
      @foreach($posts as $post)
      <div class="column blogItemHome">
        <div class="imageBlogHome">
          <img src="{{asset('/img/blog/' . $post->image)}}" alt="{{$post->alt_tag}}">
          <div class="textBlogHome is-mobile">
           <p>{{$post->title}}</p>
          <hr>
          <p>Kategoria: <span style="font-style:italic">{{$post->Category->name}}</span></p>
          </div>
        </div>        
      </div>
      @endforeach
     </div><!--end of blog row-->
   </div>
   <div class="column is-2"><!--aside panel-->
     <h4 class="subtitle">Kategorie:</h4>
      <ul class="larva-links" style="list-style-type:none;">
        @foreach ($categories as $category)
            <li><a href="{{route('blog.category', $category->id)}}">{{$category->name}}</a></li>
        @endforeach
      </ul>
    <h4 class="subtitle m-t-45">Tagi:</h4>
      <div class="tags">
        @foreach ($tags as $tag)
            <a href="{{route('blog.tag', $tag->id)}}">
              <span style="margin: 0 2px;" class="tag">{{$tag->name}} </span>
            </a>
            @endforeach
      </div>
   </div><!--end of aside panel-->
 </div>
</div>
