@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col m6 offset-m3 s12">
            <div class="">
                <h4 class="green-text">{{ __('Login') }}</h4>
                <hr>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus autocomplete="off">

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

                    <div class="col m12 right-align s12">
                        <button type="submit" class="waves-effect waves-light btn btn-large green">
                            <i class="material-icons left">check</i> {{ __('Login') }}
                        </button>
                    </div>

                    <div class="form-group mb-0">
                        <a class="red-text" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
