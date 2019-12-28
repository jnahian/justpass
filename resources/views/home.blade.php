@extends('layouts.master')

@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h3 class="green-text">List of Passwords</h3>
            <hr>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="">
                <table class="responsive-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>URL</th>
                        <th>Extra</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>My Name 1</td>
                        <td>username1</td>
                        <td>email1yourdomain.com</td>
                        <td>secrate$#</td>
                        <td>http://yourdomain1.com</td>
                        <td>extra1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>My Name 2</td>
                        <td>username2</td>
                        <td>email2yourdomain.com</td>
                        <td>secrate$#</td>
                        <td>http://yourdomain2.com</td>
                        <td>extra2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>My Name 3</td>
                        <td>username3</td>
                        <td>email3yourdomain.com</td>
                        <td>secrate$#</td>
                        <td>http://yourdomain3.com</td>
                        <td>extra3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>My Name 4</td>
                        <td>username4</td>
                        <td>email4yourdomain.com</td>
                        <td>secrate$#</td>
                        <td>http://yourdomain4.com</td>
                        <td>extra4</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>My Name 5</td>
                        <td>username5</td>
                        <td>email5yourdomain.com</td>
                        <td>secrate$#</td>
                        <td>http://yourdomain5.com</td>
                        <td>extra5</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>My Name 6</td>
                        <td>username6</td>
                        <td>email6yourdomain.com</td>
                        <td>secrate$#</td>
                        <td>http://yourdomain6.com</td>
                        <td>extra6</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>My Name 7</td>
                        <td>username7</td>
                        <td>email7yourdomain.com</td>
                        <td>secrate$#</td>
                        <td>http://yourdomain7.com</td>
                        <td>extra7</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>My Name 8</td>
                        <td>username8</td>
                        <td>email8yourdomain.com</td>
                        <td>secrate$#</td>
                        <td>http://yourdomain8.com</td>
                        <td>extra8</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>My Name 9</td>
                        <td>username9</td>
                        <td>email9yourdomain.com</td>
                        <td>secrate$#</td>
                        <td>http://yourdomain9.com</td>
                        <td>extra9</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>My Name 10</td>
                        <td>username10</td>
                        <td>email10yourdomain.com</td>
                        <td>secrate$#</td>
                        <td>http://yourdomain10.com</td>
                        <td>extra10</td>
                        <td></td>
                    </tr>
                    </tbody>

                    <tfoot>
                    <tr>
                        <td colspan="8">
                            <ul class="pagination">
                                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                            </ul>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
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
