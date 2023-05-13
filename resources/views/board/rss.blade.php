<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">

<channel>
  <title>{{ $board->name }}</title>
  <link>https://www.w3schools.com</link>
  <description>{{ $board->description }}</description>
  @foreach ($threads as $thread)
  <item>
    <title>{{ $thread->subject }}</title>
    <link>{{ env('APP_URL') }}/board/{{ $board->id }}/{{ $thread->id }}</link>
    <description>{{ $thread->body }}</description>
  </item>
  @endforeach
</channel>

</rss>