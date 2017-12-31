@extends('layouts.dashboard')
@section('title') | Zarządzanie portfolio @endsection
@section('content')
    <div class="backend-content">
        <div class="card card-form">
            <h2 class="card-header">Portfolio:</h2>
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
                                <div class="col-sm-2">
                                    <a href="{{route('portfolios.edit', $portfolio->id)}}" class="btn btn-sm btn-info">Edytuj</a>
                                </div>
                                <div class="col-sm-2">
                                    {!! Form::open(['route' => ['portfolios.destroy', $portfolio->id], 'method' => 'DELETE']) !!} 
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
    
@endsection