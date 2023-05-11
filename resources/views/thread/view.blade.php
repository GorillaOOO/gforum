<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $thread->subject }} - {{ env('SITE_NAME') }}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>{{ $thread->subject }} - {{ env('SITE_NAME') }}</h1>
    <a href="{{ route('board.view', ['id' => $board]) }}"><i>Return to board</i></a>
    <br />
    <div class="index-board">
        <center>
            <h1>{{ $thread->subject }}</h1>
            by <b><a href="{{ route('account.view', ['id' => $thread->author_id]) }}">{{ $thread->author }}</a></b>
            <br />
            <img src="{{ $threadauthor->avatar }}" alt="OP's Avatar" height=200 />
        </center>
        <pre style="font-family: inherit;">{{ $thread->body }}</pre>
    </div>


</body>

</html>