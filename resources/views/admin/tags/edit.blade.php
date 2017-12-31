@extends('layouts.dashboard')
@section('title') | Kategoria - edycja @endsection
@section('content')
    <div class="backend-content">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-form m-t-50">
                    {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
                        {!! Form::label('name', 'Nazwa', ['class' => ' m-t-10']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        {!! Form::submit('Zapisz', ['class' => 'btn btn-success btn-outlined m-t-10']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        <div>
    </div>
@endsection