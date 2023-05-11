<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - {{ env('SITE_NAME') }}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Login to {{ env('SITE_NAME') }}</h1>
    <a href="{{ route('board.index') }}"><i>Return to index</i></a>
    <div class="index-board">
        <form method="post" action="{{ route('account.auth') }}">
            @csrf

            <input name="email" placeholder="E-Mail Address" /><br />
            <input type="password" name="password" placeholder="Password" /><br />
            <input type="submit" value="Login" />
        </form>
    </div>

</body>

</html>