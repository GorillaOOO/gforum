<!DOCTYPE html>
<html lang="en">

<head>
    <title>404 - {{ env('SITE_NAME') }}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    body {
        background-image: url('../assets/img/404.gif');
    }
</style>

<body>
    <h1>404 - Page Not Found</h1>
    <a href=" {{ route('board.index') }}"><i>Return to index</i></a>
    <div class="index-board">
        This page could not be found. It's likely that the account, board, thread, etc. that you're looking for has been removed.
    </div>

</body>

</html>