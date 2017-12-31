@extends('layouts.dashboard')
@section('title') | Kategoria {{$category->name}} @endsection
@section('content')
    <div class="backend-content">
        <div class="row">
        <div class="col-lg-3 col-centered">
            <div class="card card-form" style="padding: 30px;">
                <span class="badge badge-pill badge-success" style="height: 45px; font-size: 1.2rem; padding: 10px;">{{$category->name}}</span>
                <hr>
                <small>Opis:</small>
                <p style="font-style: italic;">{{$category->description}}</p>
                <div class="row col-centered">
                        <div class="col-sm-6">
                            <a href="{{route('categories.edit', $category->id)}}" class="btn btn-sm btn-info">Edytuj</a>
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!} 
                                <button class="btn btn-sm btn-danger">Usuń</button>                       
                            {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-centered">
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
                                </tr>
                                <tbody>                                    
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td><a href="#">{{$post->title}}</a></td>
                                            <td><img src="{{asset('/img/blog/' . $post->image)}}" style="width: 60px;"></td>
                                            <td>{{$post->created_at}}</td>
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
@endsection