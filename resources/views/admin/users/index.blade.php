@extends('layouts.dashboard')
@section('title') | Użytkownicy @endsection
@section('content')
    <div class="backend-content">
        <div class="row">
            <div class="col-lg-3"><!--one user card-->
                <div class="card card-user">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-4">
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
            <div class="col-lg-3"><!--one user card-->
                <div class="card card-user">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-4">
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
            <div class="col-lg-3"><!--one user card-->
                <div class="card card-user">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-4">
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
            <div class="col-lg-3"><!--one user card-->
                <div class="card card-user">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-4">
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
        </div><!--end of row-->
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-form">
                        <h4 class="card-header">Dodaj użytkownika:</h4>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group input-group-sm">
                                    <label for="name">Nazwa:</label>
                                    <input type="text" class="form-control" id="name">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" id="email">
                                    <button class="btn btn-success m-t-5">Dodaj</button>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="category">Rola:</label>
                                    <select class="form-control" id="category">
                                        <option>Administrator</option>
                                        <option>Bloger</option>
                                        <option>Programista</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                </div>
            </div>
        </div>
    </div>
@endsection