@extends('layouts.dashboard')
@section('title') | Użytkownicy @endsection
@section('content')
    <div class="backend-content">
            <div class="row header">
                    <div class="col-lg-6">
                        <h2>Zarządzanie użytkownikami</h2>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="{{route('users.create')}}" class="btn btn-lg btn-success"><i class="fa fa-plus"></i> Dodaj nowy</a>
                    </div>
                </div>
                <hr>
       
                <div class="row">
                        <div class="col-lg-12">
                        <div class="card card-form">
                            <h2 class="card-header">Użytkownicy:</h2>
                            <div class="table-responsive">
                                <table class="table categories">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nazwa</th>
                                            <th>Email</th>
                                            <th>Akcje</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)                          
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td><div class="row">
                                                <div class="col-sm-1">
                                                    <a href="{{route('users.show', $user->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="col-sm-1">
                                                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                <div class="col-sm-1">
                                                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!} 
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
                    </div><!--end of row-->
    </div>
@endsection