@extends('layouts.dashboard')
@section('title') | Użytkownicy @endsection
@section('content')
    <div class="backend-content">
            <div class="row header">
                    <div class="col-lg-6">
                        <h2>Zarządzanie użytkownikami</h2>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-lg btn-success"><i class="fa fa-edit"></i> Edytuj</a>
                    </div>
                </div>
                <hr>
        <div class="row">
            <div class="col-lg-8"><!--one user card-->
                <div class="card card-user">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="{{asset('/img/users/' . $user->image)}}" alt="">
                            </div>
                            <div class="col-sm-8">
                                <span class="bagde badge-pill badge-secondary">Daniel Śmigiela</span><br>
                                <span class="bagde badge-pill badge-secondary">{{$user->email}}</span><br>
                                <span class="bagde badge-pill badge-secondary">{{$user->name}}</span><br>
                                Role:<br> <span class="bagde badge-pill badge-danger">Administrator</span>
                            </div>
                        </div><!--end of row-->
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <button class="btn btn-sm btn-info">Aktywność</button>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-sm btn-success">Edytuj</button>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-sm btn-danger">Usuń</button>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div><!--end of one user card-->
    </div>
@endsection