<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">Microposts</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                
                @if (Auth::check())
                    
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                                {{-- ユーザ詳細ページへのリンク --}}
                                <li class="dropdown-item">{!! link_to_route('users.show', __('messages.My profile'), ['user' => Auth::id()]) !!}</li>
                                {{-- follow一覧 --}}
                                <li class="dropdown-item">{!! link_to_route('users.followings', __('messages.Followings'), ['id' => Auth::id() ]) !!}</li>
                                {{-- follower一覧 --}}
                                <li class="dropdown-item">{!! link_to_route('users.followers', __('messages.Followers'), ['id' => Auth::id() ]) !!}</li>
                                {{-- お気に入り一覧へのリンク --}}
                                <li class="dropdown-item">{!! link_to_route('users.favorites', __('messages.Favorites'),['id' => Auth::id() ]) !!}</li>
                            <li class="dropdown-divider"></li>
                                {{-- ログアウトへのリンク --}}
                                <li class="dropdown-item">{!! link_to_route('logout.get', __('messages.Logout')) !!}</li>
                        </ul>
                    </li>
                    {{-- ユーザ一覧ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('users.index', __('messages.users'), [], ['class' => 'nav-link']) !!}</li>
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get', __('messages.signup'), [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', __('messages.Login'), [], ['class' => 'nav-link']) !!}</li>
                @endif
                
                 {{-- 言語切替 --}}
                <li class="nav-item dropdown" id="nav-lang">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                {{ __('messages.languages') }}
                <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                <li>
                    <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                </li>
                @endif
                @endforeach
                </ul>
                </li>
                
            </ul>
        </div>
    </nav>
</header>