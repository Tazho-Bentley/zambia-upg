@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($errors) > 0)
                    <div>
                        <h1>Here</h1>
                        <section class="info-box fail">
                            <ul>
                                <li>
                                    @foreach($errors ->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </li>
                            </ul>
                        </section>
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Login</div>
                    <div class="panel-body">

                        @if(Session::has('fail'))
                            <div>
                                <section class="info-box fail">
                                    {{Session::get('fail')}}
                                </section>
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{'auth'}}">
                            <div class="input-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" placeholder="Username"/>
                            </div>
                            <div class="input-group">
                                <label for="password">Password</label>
                                <input id="password" name="password" placeholder="Password" type="password"/>
                            </div>
                            <div class="input-group-btn">
                                <button type="submit">Login</button>
                            </div>
                            <input type="hidden" value="{{Session::token()}}" name="_token"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection