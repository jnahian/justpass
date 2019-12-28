@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col m8 offset-m2">
            <table class="striped">
                <tr>
                    <th>Site Name</th>
                    <th>:</th>
                    <td>{{ $password->site_name }}</td>
                </tr>
                <tr>
                    <th>Account Name</th>
                    <th>:</th>
                    <td>{{ $password->account_name }}</td>
                </tr>
                <tr>
                    <th>Username</th>
                    <th>:</th>
                    <td>{{ $password->username }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <th>:</th>
                    <td>{{ $password->email }}</td>
                </tr>
                <tr>
                    <th>Password</th>
                    <th>:</th>
                    <td>
                        <input type="password" class="list-pass" value="{{ \App\Password::decrypt_password($password->password) }}" disabled>
                        <i class="material-icons show-pass tooltipped" data-tooltip="Show Password" data-position="top">visibility</i>
                        <i class="material-icons hide-pass tooltipped" data-tooltip="Hide Password" data-position="top">visibility_off</i>
                    </td>
                </tr>
                <tr>
                    <th>Category</th>
                    <th>:</th>
                    <td>
                        @if($password->category)
                            <label class="label light-blue">{{ $password->category }}</label>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <th>:</th>
                    <td>{{ $password->phone }}</td>
                </tr>
                <tr>
                    <th>URL</th>
                    <th>:</th>
                    <td>
                        <a href="{{ $password->url }}" target="_blank" class="orange-text">{{ $password->url }}</a>
                    </td>
                </tr>
                <tr>
                    <th>Extra</th>
                    <th>:</th>
                    <td>{{ $password->extra }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large blue tooltipped" href="{{ route('password.index') }}"
           data-tooltip="List of Passwords" data-position="left">
            <i class="large material-icons">list</i>
        </a>
    </div>

@endsection()