@foreach ($replies as $reply)
<br />
<div class="index-board" style="width:75%;">
    <b><a href="{{ route('account.view', ['id' => $reply->author_id]) }}">{{ $reply->author }}</a></b>, at {{ $reply->created_at }}, said:
    <hr />
    {{ $reply->body }}
</div>
@endforeach