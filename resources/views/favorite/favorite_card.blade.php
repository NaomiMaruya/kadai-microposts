<div class="d-flex flex-row">

    @if (Auth::user()->added_favorites($favorite->id))
        {{-- アンフェイバリッドボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $favorite->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-outline-secondary btn-block btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フェイバリッドボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $favorite->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-outline-success btn-block btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
    <div>
    @if (Auth::id() == $favorite->user_id)
        {{-- 投稿削除ボタンのフォーム --}}
        {!! Form::open(['route' => ['microposts.destroy', $favorite->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm']) !!}
        {!! Form::close() !!}
    @endif
    </div>
</div>