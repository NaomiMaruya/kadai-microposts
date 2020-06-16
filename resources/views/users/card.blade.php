

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
        <!--<button type="button" class="btn btn-light">-->
           @if (Auth::id() == $user->id)
           {!! link_to_route('users.personalIndex',__('messages.myaccount'), ['id'=>Auth::id()],['class' => 'btn btn-outline-info']) !!}
           @endif
        <!--</button>-->
    </div>
    <div class="card-body">
        {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
        <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
    </div>
</div>
{{-- フォロー／アンフォローボタン --}}
@include('user_follow.follow_button')

