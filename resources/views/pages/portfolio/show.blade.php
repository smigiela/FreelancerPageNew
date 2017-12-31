@extends('layouts.home')
@section('keywords') | Portfolio - {{$portfolio->keywords}} @endsection
@section('meta_description') | Portfolio - {{$portfolio->meta_description}} @endsection
@section('title') | Portfolio - {{$portfolio->title}} @endsection

@section('content')
@include('_inc.frontend.nav-otherpages')
  <div id="blog-post" class="container m-t-30 m-b-30">
    <div class="columns">
      <div class="column blog-post-content"><!--content of post -->
        <img class="blog-post-image" src="{{asset('/img/portfolio' . $portfolio->image)}}" alt=""><!--post photo-->
        <h2 class="title blog-post-title">{{$portfolio->title}}</h2><!--post title-->        
        <hr>
        <div class="blog-post-body"><!--blog post body-->
         {{$portfolio->body}}
        </div><!-- end of blog post body-->
        <hr>
      </div><!--end of content of post -->
      
    </div>
  </div>
@endsection
