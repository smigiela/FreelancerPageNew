@extends('layouts.dashboard')
@section('title') | Zarządzanie kategoriami @endsection
@section('content')
    <div class="backend-content">
        <div class="row">
        <div class="col-lg-4">
            <div class="card card-form">
                <h2 class="card-header">Dodaj kategorię</h2>
                    {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                    {!! Form::label('name', 'Nazwa:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    
                    {!! Form::label('description', 'Opis:') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) !!} 
                    
                    {!! Form::submit('Dodaj', ['class' => 'btn btn-success m-t-5']) !!}
                {!! Form::close() !!} 
            </div>
        </div>
        <div class="col-lg-8">
        <div class="card card-form">
            <h2 class="card-header">Kategorie na blogu:</h2>
            <div class="table-responsive">
                <table class="table categories">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nazwa</th>
                            <th>Opis</th>
                            <th>Posty</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)                          
                        <tr>
                            <td>{{$category->id}}</td>
                            <td><a href="{{route('categories.show', $category->id)}}"> {{$category->name}}</a></td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->Post()->count()}}</td>
                            <td><div class="row">
                                <div class="col-sm-2">
                                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-sm btn-info">Edytuj</a>
                                </div>
                                <div class="col-sm-2">
                                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!} 
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