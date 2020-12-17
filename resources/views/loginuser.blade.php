<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Movies :: Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{url('login')}}" method="post">
        @csrf
        <textarea name="email" placeholder="user@company.com"></textarea>
        <textarea name="password" placeholder="More than 8 digits"></textarea>
        <input type="submit" value="Send">
    </form>
</body>
</html>