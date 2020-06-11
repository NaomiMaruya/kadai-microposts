<div class="d-flex flex-row">
<div>
 @if (Auth::id() == $favorite->user_id)
    {{-- 投稿削除ボタンのフォーム --}}
    {!! Form::open(['route' => ['microposts.destroy', $favorite->id], 'method' => 'delete']) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
    {!! Form::close() !!}
@endif
</div>
    @if (Auth::user()->added_favorites($favorite->id))
        {{-- アンフェイバリッドボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $favorite->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-warning btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フェイバリッドボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $favorite->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-light btn-block"]) !!}
        {!! Form::close() !!}
    @endif
</div>