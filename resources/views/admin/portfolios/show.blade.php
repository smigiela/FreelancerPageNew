@extends('layouts.dashboard')
@section('title') | Portfolio - {{$portfolio->title}} @endsection
@section('content')
    <div class="backend-content">
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-form">
                    <div class="portfolio-img">
                        <img class="responsive" style="maxheight: 400px; maxwidth: 1000px;" src="{{asset('/img/portfolio/' . $portfolio->image)}}" alt=""><!--portfolio photo-->
                    </div>
                    <div class="card-header">
                        <h2>{{$portfolio->title}}</h2>
                    </div>
                    <div class="card-block p-t-10 p-b-10 p-l-20 p-r-20">
                        {!! $portfolio->body !!}
                    </div>
                </div>        
            </div><!--end of portfolio blog -->
            <div class="col-lg-4">
                <div class="card card-form larva-links">
                    <span style="font-style: italic;">URL: </span> <a href="{{url('portfolio/'.$portfolio->slug)}}">{{url('blog/'.$portfolio->slug)}}</a>
                </div>                
                <div class="card m-t-10">
                    <span style="font-style: italic;">Słowa kluczowe: </span><p class="post-text-asside">{{$portfolio->keywords}}</p><br>
                    <span style="font-style: italic;">Meta opis: </span><p class="post-text-asside">{{$portfolio->meta_content}}</p><br>
                </div>
                <div class="card portfolio-action m-t-10">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{route('portfolios.edit', $portfolio->id)}}" class="btn btn-lg btn-info btn-block">Edytuj</a>
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['portfolios.destroy', $portfolio->id], 'method' => 'DELETE']) !!} 
                                <button class="btn btn-lg btn-danger btn-block">Usuń</button>            
                            {!! Form::close() !!}
                        </div> 
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection