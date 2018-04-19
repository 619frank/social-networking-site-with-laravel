@extends('layouts.main')
@section('content')
    <h3>Signin</h3>
    <div class="row">
        <div class="col-lg-6">
            <form class="form-vertical" role="form" method="post" action="{{route('auth.signin')}}">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email" class="control-label">
                        Email
                    </label>
                    <input type="text" name="email" id="" class="form-control" value="{{old('email')}}">
                    <span class="text-danger">{{ $errors->first('email') }}</span>

                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password" class="control-label">
                        password
                    </label>
                    <input type="password" name="password" id="" class="form-control">
                <span class="text-danger">{{ $errors->first('password') }}</span>

                </div>
                <div class="checkbox">
                    <label for="">
                        <input type="checkbox" name="remember" id=""> Remember me
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Signin</button>
                </div>
                {{csrf_field()}}
            </form>
        </div>

    </div>
@endsection