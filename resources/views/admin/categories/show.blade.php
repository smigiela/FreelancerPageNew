@extends('layouts.dashboard')
@section('title') | Kategoria {{$category->name}} @endsection
@section('content')
    <div class="backend-content">
            <div class="row header">
                    <div class="col-lg-6">
                        <h2> Kategoria: {{$category->name}}</h2>
                    </div>
                    <div class="col-lg-6 text-right">
                            <a href="" class="btn btn-lg btn-success"><i class="fa fa-plus"></i> Dodaj nową</a>
                        </div>
                </div>
                <hr> 
        <div class="row">
        <div class="col-lg-12">
            <div class="card card-form" style="padding: 30px;">                
                Opis:
                <p style="font-style: italic;">{{$category->description}}</p>
                Meta opis:
                <p style="font-style: italic;">{{$category->meta_content}}</p>
                Słowa kluczowe:
                <p style="font-style: italic;">{{$category->keywords}}</p>
            </div>
        </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                    <div class="card card-form">
                            <h3 class="card-header">Posty w kategorii:</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thhead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nazwa</th>
                                            <th>Zdjęcie</th>
                                            <th>Data utworzenia</th>
                                            <th>Akcje</th>
                                        </tr>
                                        <tbody>                                    
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td>{{$post->id}}</td>
                                                    <td>{{$post->title}}</td>
                                                    <td><img src="{{asset('/img/blog/' . $post->image)}}" style="width: 60px;"></td>
                                                    <td>{{$post->created_at}}</td>
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
                                    </thhead>
                                </table>
                            </div>
                        </div>
            </div>
        </div>
        

            </div>
    </div>
    </div>    
@endsection