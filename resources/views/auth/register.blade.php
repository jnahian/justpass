@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col m6 offset-m3 s12">
            <h4 class="green-text">{{ __('Register') }}</h4>
            <hr>

            <div class="">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>


                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus autocomplete="off">

                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="off">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>


                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="off">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>


                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="off">
                    </div>
            </div>

            <div class="col m12 right-align s12">
                <button type="submit" class="waves-effect waves-light btn btn-large green">
                    <i class="material-icons left">check</i> {{ __('Register') }}

            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
