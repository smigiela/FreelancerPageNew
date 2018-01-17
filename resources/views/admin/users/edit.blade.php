@extends('layouts.dashboard')
@section('title') | Edytuj użytkownika @endsection
@section('content')
    <div class="backend-content">
            <div class="row header">
                    <div class="col-lg-6">
                        <h2> Dodaj użytkownika</h2>
                    </div>
                </div>
                <hr> 
        <div class="row">
            <div class="col-lg-12">
                            <div class="card card-form">
                                    <div class="row">
                                            <div class="col-lg-4">
                                    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                                        {!! Form::label('name', 'Nazwa:') !!}
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}                 
                                        {!! Form::label('email', 'Email:') !!}
                                        {!! Form::text('email', null, ['class' => 'form-control']) !!} 
                                      
                                        <br>                
                                        {!! Form::label('password', 'Hasło:') !!}
                                        {!! Form::password('password', null, ['class' => 'form-control']) !!}                 
                                        {!! Form::label('reenter_password', 'Powtórz hasło:') !!}
                                        {!! Form::password('reenter_password', null, ['class' => 'password form-control']) !!}     <br>
                                        {!! Form::label('image', "Wybierz zdjęcie dla użytkownika:") !!}<br>
                                        {!! Form::file('image') !!}             
                                    <button class="btn btn-success m-t-10">Dodaj</button>                
                                {!! Form::close() !!} 
                            </div>
                        </div>
                            </div>          
                
            </div>

        <div>
    </div>
@endsection