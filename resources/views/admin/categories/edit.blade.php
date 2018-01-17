@extends('layouts.dashboard')
@section('title') | Kategoria - edycja @endsection
@section('content')
    <div class="backend-content">
            <div class="row header">
                    <div class="col-lg-6">
                        <h2> Edytuj kategorię</h2>
                    </div>
                </div>
                <hr> 
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-form m-t-50">
                    {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
                        {!! Form::label('name', 'Nazwa', ['class' => ' m-t-10']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        
                        {!! Form::label('keywords', 'Słowa kluczowe:') !!}
                        {!! Form::text('keywords', null, ['class' => 'form-control']) !!}
    
                        {!! Form::label('meta_content', 'Meta opis:') !!}
                        {!! Form::textarea('meta_content', null, ['class' => 'form-control', 'rows' => 3]) !!} 

                        {!! Form::label('description', 'Opis', ['class' => ' m-t-10']) !!}
                        {!! Form::textarea('description', null, ['class' => 'textarea form-control', 'rows' => '3']) !!}
                        
                        {!! Form::submit('Zapisz', ['class' => 'btn btn-success btn-outlined m-t-10']) !!}
                    {!! Form::close() !!}
                </div>
            </div>

        <div>
    </div>
@endsection