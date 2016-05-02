<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/tab/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lte/AdminLTE.min.css') }}" />
    <title>Document</title>
</head>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="http://asgart.pro"><b>Asgart</b>PRO</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Авторизация</p>
        <form role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">

                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Пароль">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8" >
                        <div class="checkbox" style="float: left">
                            <label >
                                <input type="checkbox" name="remember"> Запомнить?
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-bitbucket btn-block btn-flat">Вход</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
