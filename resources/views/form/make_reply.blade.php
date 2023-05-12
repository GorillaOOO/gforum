<form method="post" action="{{ route('thread.reply') }}">
    @csrf

    <textarea name="body" placeholder="Body" style="width: 395px;height: 200px;" /></textarea><br />
    <input type="submit" value="New Reply" />
    <input type="hidden" value="{{ $thread->id }}" name="reply_to" />
    <input type="hidden" value="{{ $board }}" name="board" />
</form>