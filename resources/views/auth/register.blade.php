@extends('layouts.app')

@section('content')
<div class="container login-container">
        <div class="row">
                <div class="col-md-6 col-centered">
                    <img src="/img/settings/cms.png" height="94px" alt="">
                    
                    <div class="card m-t-30 m-b-30 p-t-30 p-l-45 p-r-45" style="text-align: left">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
            
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-12 control-label">Imię i nazwisko</label>
            
                                        <div class="col-md-12">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-12 control-label">E-Mail </label>
            
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="row p-l-15">
                                            <div class="col-sm-6">
                                                <label for="password" class="col-md-12 control-label">Hasło</label>
                                                <input id="password" type="password" class="form-control" name="password" required>
            
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="password-confirm" class="col-md-12 control-label">Potwierdź hasło</label>
            
                                                <div class="col-md-12">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                </div>
                                            </div>
                                        </div>                                      
                                    </div>
                                    <div class="form-group p-l-15">
                                        <label for="user_image">Zdjęcie (obowiązkowo)</label>
                                        <input id="post_image" name="user_image" type="file" class="file">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Zarejestruj!
                                            </button>
                                        </div>
                                    </div>
                                </form>
                    </div>        
                </div>
            </div>  
</div>
@endsection
