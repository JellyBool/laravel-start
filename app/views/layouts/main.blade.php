<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>发现Laravel 4之美</title>
        {{ HTML::style('packages/bower_components/bootstrap/dist/css/bootstrap.min.css') }}
        {{ HTML::style('css/main.css')}}
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand hidden-sm" href="/">Laravel新手上路</a>
                </div>
                <ul class="nav navbar-nav navbar-right hidden-sm">
                @if(!Auth::check())

                
                    <li>{{ HTML::link('users/register', '注册') }}</li>
                    <li>{{ HTML::link('users/login', '登陆') }}</li>
                
                @else
                <li>{{ HTML::link('users/logout', '退出') }}</li>
                @endif
                </ul>
            </div>
        </div>
        <div class="container">
            @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
            @endif
            {{ $content }}
        </div>

    </body>
</html>