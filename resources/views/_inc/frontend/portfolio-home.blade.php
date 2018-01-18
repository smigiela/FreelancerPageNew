<div class="container">
 <h2 class="title has-text-centered">Przykładowe realizacje</h2>

  <div class="columns">
    @foreach($portfolios as $portfolio)
    <div class="column blogItemHome">
        <div class="imageBlogHome">
          <img src="{{asset('/img/portfolio/' . $portfolio->image)}}" alt="{{$portfolio->alt_tag}}">
          <div class="textBlogHome is-mobile">
           <p>{{$portfolio->title}}</p>
          </div>
        </div>        
      </div>
    @endforeach
  </div>   
</div>
