<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $board->name }} - {{ env('SITE_NAME') }}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>{{ $board->name }} - {{ env('SITE_NAME') }}</h1>
    <a href="{{ route('board.index') }}"><i>Return to index</i></a>
    @foreach ($threads as $thread)
    <div class="index-board">
        <h2>{{ $thread->subject }}</h2>
        Started by <a href="{{ route('account.view', ['id' => $thread->author_id]) }}"><b>{{ $thread->author }}</b></a> at {{ $thread->created_at }}
    </div>
    @endforeach

</body>

</html>