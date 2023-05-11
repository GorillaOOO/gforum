<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $account->name }} - {{ env('SITE_NAME') }}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Viewing Profile '{{ $account->name }}'</h1>
    <a href="{{ route('board.index') }}"><i>Return to index</i></a>
    <div class="index-board">
        <div class="image-with-text">
            <img src="{{ $account->avatar }}" height="250" style="width:170px;height:170px;" alt="{{ $account->name }}'s profile picture">
            <div style="margin-left: 20px;">
                <b>{{ $account->name }}</b>
                <br />
                Joined {{ $account->created_at }}
                <br />
                Website: <a href="{{ $account->website }}">{{ $account->website }}</a>
            </div>
        </div>
    </div>

</body>

</html>