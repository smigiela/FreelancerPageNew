@extends('layouts.dashboard')
@section('keywords') {{$post->keywords}} @endsection
@section('meta_content') {{$post->meta_content}} @endsection
@section('title') | Post - {{$post->title}} @endsection
@section('content')
    <div class="backend-content">
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-form">
                    <div class="post-img">
                        <img class="responsive" style="maxheight: 400px; maxwidth: 1000px;" src="{{asset('/img/blog/' . $post->image)}}" alt=""><!--post photo-->
                    </div>
                    <div class="card-header">
                        <h2>{{$post->title}}</h2>
                    </div>
                    <div class="card-footer">
                            <small>Opublikowano: {{$post->created_at}} | Kategoria: 
                                {{$post->Category->id}} | Tagi: 
                            @foreach($post->Tag as $tag)
                                {{$tag->name}},
                            @endforeach | <i class="fa fa-comment"></i>Komentarze: 0 </small>
                    </div>
                    <div class="card-block p-t-10 p-b-10 p-l-20 p-r-20">
                        {!! $post->body !!}
                    </div>
                </div>        
            </div><!--end of post blog -->
            <div class="col-lg-4">
                <div class="card card-form larva-links">
                    <span style="font-style: italic;">URL: </span> <a href="{{url('blog/'.$post->slug)}}">{{url('blog/'.$post->slug)}}</a>
                </div>                
                <div class="card m-t-10">
                    <span style="font-style: italic;">Słowa kluczowe: </span><p class="post-text-asside">{{$post->keywords}}</p><br>
                    <span style="font-style: italic;">Meta opis: </span><p class="post-text-asside">{{$post->meta_content}}</p><br>
                </div>
                <div class="card post-action m-t-10">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-lg btn-info btn-block">Edytuj</a>
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!} 
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