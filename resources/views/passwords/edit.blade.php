@extends('layouts.master')

@section('content')

    <div class="row">
        {!! Form::open(['route' => ['password.update', $password->id], 'class' => 'col s12', 'method' => 'PUT']) !!}
        <div class="row">

            <div class="input-field col m6 s12">
                {!! Form::text('site_name', $password->site_name, ['class' => 'validate', 'placeholder' => 'Site Name', 'autocomplete' => 'off']) !!}
                @if($errors->has('site_name'))
                    <i class="red-text error-msg">{{ $errors->first('site_name') }}</i>
                @endif
            </div>

            <div class="input-field col m6 s12">
                {!! Form::text('account_name', $password->account_name, ['class' => 'validate', 'placeholder' => 'Account Name', 'autocomplete' => 'off']) !!}
                @if($errors->has('account_name'))
                    <i class="red-text error-msg">{{ $errors->first('account_name') }}</i>
                @endif
            </div>

            <div class="input-field col m6 s12">
                {!! Form::email('email', $password->email, ['class' => 'validate', 'placeholder' => 'Email', 'autocomplete' => 'off']) !!}
                @if($errors->has('email'))
                    <i class="red-text error-msg">{{ $errors->first('email') }}</i>
                @endif
            </div>

            <div class="input-field col m6 s12">
                {!! Form::text('username', $password->username, ['class' => 'validate', 'placeholder' => 'Username', 'autocomplete' => 'off']) !!}
                @if($errors->has('username'))
                    <i class="red-text error-msg">{{ $errors->first('username') }}</i>
                @endif
            </div>

            <div class="input-field col m6 s12">
                {!! Form::password('password', ['class' => 'validate', 'placeholder' => 'Password', 'autocomplete' => 'off']) !!}
                @if($errors->has('password'))
                    <i class="red-text error-msg">{{ $errors->first('password') }}</i>
                @endif
            </div>

            <div class="input-field col m6 s12">
                {!! Form::text('category', $password->category, ['class' => 'validate', 'placeholder' => 'Category', 'autocomplete' => 'off']) !!}
                @if($errors->has('category'))
                    <i class="red-text error-msg">{{ $errors->first('category') }}</i>
                @endif
            </div>

            <div class="input-field col m6 s12">
                {!! Form::text('phone', $password->phone, ['class' => 'validate', 'placeholder' => 'Phone', 'autocomplete' => 'off']) !!}
                @if($errors->has('phone'))
                    <i class="red-text error-msg">{{ $errors->first('phone') }}</i>
                @endif
            </div>

            <div class="input-field col m6 s12">
                {!! Form::text('url', $password->url, ['class' => 'validate', 'placeholder' => 'URL', 'autocomplete' => 'off']) !!}
                @if($errors->has('url'))
                    <i class="red-text error-msg">{{ $errors->first('url') }}</i>
                @endif
            </div>

            <div class="input-field col m12 s12">
                {!! Form::textarea('extra', $password->extra, ['class' => 'validate materialize-textarea', 'placeholder' => 'Extra', 'autocomplete' => 'off']) !!}
                @if($errors->has('extra'))
                    <i class="red-text error-msg">{{ $errors->first('extra') }}</i>
                @endif
            </div>

            <div class="col m12 right-align s12">
                <button type="submit" class="waves-effect waves-light btn btn-large green">
                    <i class="material-icons left">arrow_forward</i> Update
                </button>
            </div>

        </div>
        {!! Form::close() !!}
    </div>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large blue tooltipped" href="{{ route('password.index') }}"
           data-tooltip="List of Passwords" data-position="left">
            <i class="large material-icons">list</i>
        </a>
    </div>

@endsection()