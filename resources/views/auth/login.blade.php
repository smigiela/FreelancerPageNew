@extends('layouts.app')

@section('content')
<div class="container login-container">  
    <div class="row">
        <div class="col-md-6 col-centered">
            <img src="/img/cms.png" height="94px" alt="">
            
            <div class="card m-t-30 m-b-30 p-t-30 p-l-45 p-r-45" style="text-align: left">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
        
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-12 control-label" for="email">E-Mail Address</label>
        
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-12 control-label">Password</label>
        
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
        
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Pamiętaj mnie
                                        </label>
                                    </div>
                                </div>
                            </div>
        
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
        
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Zapomniałeś hasła?
                                    </a>
                                </div>
                            </div>
                        </form>
            </div>        
        </div>
    </div>  
</div>
@endsection
