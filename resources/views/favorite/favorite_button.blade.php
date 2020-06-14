    @if (Auth::user()->added_favorites($micropost->id))
        {{-- アンフェイバリッドボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-outline-secondary btn-block btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フェイバリッドボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-outline-success btn-block btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
