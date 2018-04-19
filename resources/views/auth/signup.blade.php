@extends('layouts.main')
@section('content')
    <div class="row">
            <div class="col-lg-6">
                <form action="{{route('auth.signup')}}" class="form-vertical" method="post" role="form">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="control-lable">
                            Email Address
                        </label>
                        <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                        <label for="username" class="control-lable">
                            Username
                        </label>
                        <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}">
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="Password" class="control-lable">
                            Password
                        </label>
                        <input type="text" name="password" id="email" class="form-control">
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Signup</button>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>
    </div>
@endsection
