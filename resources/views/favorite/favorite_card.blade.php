<div class="d-flex flex-row">

    @if (Auth::user()->added_favorites($favorite->id))
        {{-- アンフェイバリッドボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $favorite->id], 'method' => 'delete']) !!}
        {!! Form::button('<i class="fas fa-heart-broken"></i>', ['class' => "btn btn-primary btn-sm", 'type' => 'submit']) !!}
        {!! Form::close() !!}
    @else
        {{-- フェイバリッドボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $favorite->id]]) !!}
        {!! Form::button('<i class="fas fa-heart"></i>', ['class' => "btn btn-danger btn-sm", 'type' => 'submit']) !!}
        {!! Form::close() !!}
    @endif
    <div class="ml-2">
    @if (Auth::id() == $favorite->user_id)
        {{-- 投稿削除ボタンのフォーム --}}
        {!! Form::open(['route' => ['microposts.destroy', $favorite->id], 'method' => 'delete']) !!}
        {!! Form::button('<i class="fas fa-trash-alt"></i>', ['class' => "btn btn-secondary btn-sm", 'type' => 'submit']) !!}
        {!! Form::close() !!}
    @endif
    </div>
</div>