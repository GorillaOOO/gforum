<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index - {{ env('SITE_NAME') }}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Board Index - {{ env('SITE_NAME') }}</h1>
    @php
    if (Session::has('user_id')) {
    echo "logged in as <b>" . Session::get('user_id') . "</b>";
    } else {
    echo "<a href=" . route('account.login') . ">Login to " . env('SITE_NAME') . "</a>";
    }
    @endphp

    @foreach ($boards as $board)
    <a href="{{ route('board.view', ['id' => $board->id]) }}">
        <div class="index-board">
            <h2>{{ $board->name }}</h2>
            {{ $board->description }}
        </div>
    </a>
    @endforeach

</body>

</html>