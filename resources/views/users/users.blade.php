<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>

@if (count($users) > 0)
    <ul class="list-unstyled">
        @foreach ($users as $user)
            <li class="media">
                {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    
                     
                    <div>
                        {{ $user->name }}
                    </div>
                    <div class="d-flex flex-row">
                    <div  class="mr-3">
                        {{-- ユーザ詳細ページへのリンク --}}
                        
                        {!! link_to_route('users.show', __('messages.Viewprofile'), ['user' => $user->id]) !!}
                    </div>
                    
                       @if (Auth::id() != $user->id)
                    @if (Auth::user()->is_following($user->id))
                    {{-- アンフォローボタンのフォーム --}}
                        {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete']) !!}
                            {!! Form::button('<i class="fas fa-heart-broken"></i>', ['class' => "btn btn-outline-primary btn-sm", 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    @else
                        {{-- フォローボタンのフォーム --}}
                        {!! Form::open(['route' => ['user.follow', $user->id]]) !!}
                            {!! Form::button('<i class="fas fa-heart"></i>', ['class' => "btn btn-outline-danger btn-sm", 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    @endif
                @endif
                </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $users->links() }}
@endif