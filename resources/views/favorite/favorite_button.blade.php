  <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script> 
   
    @if (Auth::user()->added_favorites($micropost->id))
        {{-- アンフェイバリッドボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::button('<i class="fas fa-heart-broken"></i>', ['class' => "btn btn-primary btn-sm", 'type' => 'submit']) !!}
        {!! Form::close() !!}
        
        
    
        
    @else
        {{-- フェイバリッドボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::button('<i class="fas fa-heart"></i>', ['class' => "btn btn-danger btn-sm", 'type' => 'submit']) !!}
        {!! Form::close() !!}
    @endif
