@extends('layouts.master')

@section('content')

    <div class="col s12">
        {!! Form::open(['route' => 'password.index', 'class' => 'col s12', 'method' => 'GET']) !!}
        <div class="row">
            <div class="input-field col m6 s10 offset-m3">
                <input name="search" type="text" class="validate" placeholder="Search">

                <button class="green-text search-btn"><i class="material-icons">search</i></button>
            </div>
        </div>
        {!! Form::close() !!}
        <table class="responsive-table striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Site Name</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Category</th>
                <th>URL</th>
                {{--<th>Extra</th>--}}
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @if(count($passwords))
                @foreach($passwords as $password)
                    <tr>
                        <td>{{ ($loop->index + 1) }}</td>
                        <td>{{ $password->site_name }}</td>
                        <td>{{ $password->username }}</td>
                        <td>{{ $password->phone }}</td>
                        <td>
                            <input type="password" class="list-pass" value="{{ \App\Password::decrypt_password($password->password) }}" disabled>
                            <i class="material-icons show-pass tooltipped" data-tooltip="Show Password" data-position="top">visibility</i>
                            <i class="material-icons hide-pass tooltipped" data-tooltip="Hide Password" data-position="top">visibility_off</i>
                        </td>
                        <td class="center-align">
                            @if($password->category)
                                <label class="label light-blue">{{ $password->category }}</label>
                            @endif
                        </td>
                        <td>
                            <a href="{{ $password->url }}" target="_blank" class="orange-text">{{ $password->url }}</a>
                        </td>
                        {{--                        <td>{{ $password->extra }}</td>--}}
                        <td>
                            <a href="{{ route('password.show', $password->id) }}" class="green-text tooltipped" data-tooltip="Details of {{ $password->site_name }}"
                               data-position="top">
                                <i class="material-icons">dvr</i>
                            </a>
                            <a href="{{ route('password.edit', $password->id) }}" class="blue-text tooltipped" data-tooltip="Edit {{ $password->site_name }}"
                               data-position="top">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="{{ route('password.destroy', $password->id) }}" class="red-text tooltipped" data-tooltip="Delete {{ $password->site_name }}" data-position="top"
                               onclick="return deleteItem(this, event)">
                                <i class="material-icons">delete</i>
                            </a>

                            {!! Form::open(['route' => ['password.destroy', $password->id], 'class' => 'hidden delete-form', 'method' => 'DELETE']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8">Nothing Found</td>
                </tr>
            @endif
            </tbody>

        </table>
        {{ $passwords->links() }}
    </div>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large blue tooltipped" href="{{ route('password.create') }}" data-tooltip="Add New Password" data-position="left">
            <i class="large material-icons">mode_edit</i>
        </a>
    </div>

    {{--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
