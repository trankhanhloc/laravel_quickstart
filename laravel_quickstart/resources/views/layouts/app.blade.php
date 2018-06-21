<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ trans('messages.title') }}</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css.min.css') }}">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <p>{{ trans('messages.task_list') }}</p>
            <div class="show-language">
                <a href="{!! route('user.change-language', ['en']) !!}">{{ trans('messages.english')}}</a> |
                <a href="{!! route('user.change-language', ['vi']) !!}">{{ trans('messages.vietnamese')}}</a>
            </div>
        </nav>
        @yield('content')
    </div>
    </body>
</html>
