<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    {{Asset::container('header')->styles()}}
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

@if(Session::get('error'))
	Sorry, your username or password was incorrect.
@endif

{{Form::open()}}

{{Form::label('username', 'Username')}}
{{Form::text('username')}}

{{Form::label('password', 'Password')}}
{{Form::password('password')}}

{{Form::submit('Login', array('class' => 'btn btn-success'))}}

{{Form::token()}}
{{Form::close()}}

</body>
</html>