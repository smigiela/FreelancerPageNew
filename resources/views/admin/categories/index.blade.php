@extends('layouts.dashboard')
@section('title') | Zarządzanie kategoriami @endsection
@section('content')
    <div class="backend-content">
            <div class="row header">
                    <div class="col-lg-6">
                        <h2> Zarządzanie kategoriami</h2>
                    </div>
                    <div class="col-lg-6 text-right">
                            <a href="{{route('categories.create')}}" class="btn btn-lg btn-success"><i class="fa fa-plus"></i> Dodaj nową</a>
                        </div>
                </div>
                <hr>  
        <div class="row">
        <div class="col-lg-12">
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
                                <div class="col-sm-6">
                                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-sm btn-info">Edytuj</a>
                                </div>
                                <div class="col-sm-6">
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
    </div><!--end of row-->
    <hr>
    <div class="row">
        <div class="col-lg-12">
                        <div class="card card-form">
                            <h2 class="card-header">Dodaj kategorię</h2>
                                {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                                {!! Form::label('name', 'Nazwa:') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            
                                {!! Form::label('keywords', 'Sowa kluczowe:') !!}
                                {!! Form::text('keywords', null, ['class' => 'form-control']) !!}
            
                                {!! Form::label('meta_content', 'Meta opis:') !!}
                                {!! Form::textarea('meta_content', null, ['class' => 'form-control', 'rows' => 3]) !!} 
                
                                {!! Form::label('description', 'Opis:') !!}
                                {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) !!} 
                                
                                {!! Form::submit('Dodaj', ['class' => 'btn btn-success m-t-5']) !!}
                            {!! Form::close() !!} 
                        </div>
        </div>
    </div>
    </div>
    
@endsection