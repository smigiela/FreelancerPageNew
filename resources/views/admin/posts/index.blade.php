@extends('layouts.dashboard')
@section('title') | Zarządzanie postami @endsection
@section('content')
    <div class="backend-content">
                    <div class="row header">
                            <div class="col-lg-6">
                                <h2>Zarządzanie postami</h2>
                            </div>
                            <div class="col-lg-6 text-right">
                                <a href="{{route('posts.create')}}" class="btn btn-lg btn-success"><i class="fa fa-plus"></i> Dodaj nowy</a>
                            </div>
                        </div>
                        <hr>
        <div class="card card-form">
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
                                    <div class="col-sm-1">
                                            <a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                        </div>
                                    <div class="col-sm-1">
                                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                    </div>
                                    <div class="col-sm-1">
                                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!} 
                                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>                       
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