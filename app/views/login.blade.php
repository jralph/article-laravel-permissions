<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    {{ Form::open(['url' => 'login']) }}
        
        {{ Form::email('email', null, ['placeholder' => 'email']) }}
        {{ Form::password('password', ['placeholder' => 'password']) }}
        {{ Form::submit('Login.') }}

    {{ Form::close() }}
    
</body>
</html>