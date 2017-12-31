@extends('layouts.dashboard')
@section('title') | Zarządzanie postami @endsection
@section('content')
    <div class="backend-content">
        <div class="card card-form">
            <h2 class="card-header">Posty blogu:</h2>
            <div class="table-responsive">
                <table class="table posts">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tytuł</th>
                            <th>Obraz</th>
                            <th>Kategoria</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)                          
                        <tr>
                            <td>{{$post->id}}</td>
                            <td><a href="{{route('posts.show', $post->id)}}"> {{$post->title}}</a></td>
                            <td><img src="{{asset('/img/blog/' . $post->image)}}" style="width: 60px;"></td></td>
                            <td>{{$post->Category->name}}</td>
                            <td><div class="row">
                                <div class="col-sm-2">
                                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-info">Edytuj</a>
                                </div>
                                <div class="col-sm-2">
                                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!} 
                                        <button class="btn btn-sm btn-danger">Usuń</button>                       
                                    {!! Form::close() !!}
                                </div>
                            </div>
                           </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection