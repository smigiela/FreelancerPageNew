@extends('layouts.dashboard')
@section('title') | Zarządzanie portfolio @endsection
@section('content')
    <div class="backend-content">
            <div class="row header">
                    <div class="col-lg-6">
                        <h2>Zarządzanie portfolio</h2>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="{{route('portfolios.create')}}" class="btn btn-lg btn-success"><i class="fa fa-plus"></i> Dodaj nowy</a>
                    </div>
                </div>
                <hr>
        <div class="card card-form">
            <div class="table-responsive">
                <table class="table posts">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tytuł</th>
                            <th>Obraz</th>
                            <th>Link</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolios as $portfolio)                          
                        <tr>
                            <td>{{$portfolio->id}}</td>
                            <td><a href="{{route('portfolios.show', $portfolio->id)}}"> {{$portfolio->title}}</a></td>
                            <td><img src="{{asset('/img/portfolio/' . $portfolio->image)}}" style="width: 60px;"></td></td>
                            <td>{{$portfolio->link}}</td>
                            <td><div class="row">
                                    <div class="col-sm-1">
                                            <a href="{{route('portfolios.show', $portfolio->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                        </div>
                                <div class="col-sm-1">
                                    <a href="{{route('portfolios.edit', $portfolio->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                </div>
                                <div class="col-sm-1">
                                    {!! Form::open(['route' => ['portfolios.destroy', $portfolio->id], 'method' => 'DELETE']) !!} 
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
    
@endsection