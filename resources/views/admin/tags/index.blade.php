@extends('layouts.dashboard')
@section('title') | Zarządzanie tagami @endsection
@section('content')
    <div class="backend-content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-form">
                    <h2 class="card-header">Dodaj tag:</h2>
                        {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                            {!! Form::label('name', 'Nazwa:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}                 
                            <button class="btn btn-success m-t-10">Dodaj</button>                
                        {!! Form::close() !!} 
                    </div>
                </div>    
                <div class="col-lg-8">
                    <div class="card card-form">
                    <h2 class="card-header">Tagi:</h2>
                    <div class="table-responsive">
                        <table class="table categories">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nazwa</th>
                                <th>Posty</th>
                                <th>Akcje</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)                          
                            <tr>
                                <td>{{$tag->id}}</td>
                                <td><a href="{{route('tags.show', $tag->id)}}"> {{$tag->name}}</a></td>
                                <td>{{$tag->Post()->count()}}</td>
                                <td><div class="row">
                                    <div class="col-sm-2">
                                        <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-sm btn-info">Edytuj</a>
                                    </div>
                                    <div class="col-sm-2">
                                        {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!} 
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
    </div>
</div>
    
@endsection