<div class="container">
 <h2 class="title has-text-centered">Przykładowe realizacje</h2>

  <div class="columns">
    @foreach($portfolios as $portfolio)
    <div class="column">
      <div class="card is-4">
        <div class="card-image">
          <figure class="image is-16by9">
            <img src="{{asset('/img/portfolio/' . $portfolio->image)}}">
          </figure>
        </div>
        <div class="card-content">
          <div class="content">
            <h4 class="modal-card-title">
                  {{$portfolio->title}}
            </h4>             
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>   
</div>
