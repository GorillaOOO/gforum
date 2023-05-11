<form method="post" action="{{ route('thread.create') }}">
    @csrf

    <input name="subject" placeholder="Subject" /><br />
    <textarea name="body" placeholder="Body" style="width: 395px;height: 200px;" /></textarea><br />
    <input type="submit" value="New Thread" />
    <input type="hidden" value="{{ $board->id }}" name="board_id" />
</form>