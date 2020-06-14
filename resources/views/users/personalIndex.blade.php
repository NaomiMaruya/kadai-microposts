    @include('layouts.app')
    <div class="container">
        <h2>{{ $auth->name }} のマイページ</h2>
        <img class="rounded img-fluid" src="{{ Gravatar::get($auth->email, ['size' => 200]) }}" alt="">
        <table class="table table-bordered">
        <tr>
        <td>ユーザーID</td>
        <td>{{Auth::user()->id}}</td>
        </tr>
        <tr>
        <td>名前</td>
        <td>{{Auth::user()->name}}</td>
        </tr>
        <tr>
        <td>メールアドレス</td>
        <td>{{Auth::user()->email}}</td>
        </tr>
        <tr>
        <td>アカウント作成日</td>
        <td>{{Auth::user()->created_at}}</td>
        </tr>
        
        {{-- 設定を変更する --}}
        <div>{!! link_to_route('users.edit','設定を変更', ['user' => Auth::id()]) !!}</div>
    </div>
