<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('login.auth')}}" method="post">
        @csrf
        <label> Email
            <input type="text" name="email">
        </label>
        <label> Password
            <input type="password" name="password">
        </label>
        <button type="submid">login</button>
    </form>
</body>

</html>