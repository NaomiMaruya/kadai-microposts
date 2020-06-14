<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
        <!--<button type="button" class="btn btn-light">-->
           
            <i class="fas fa-cog"></i>
           <span>{!! link_to_route('users.personalIndex','myaccount', ['id'=>Auth::id()]) !!}</span>
          
        <!--</button>-->
    </div>
    <div class="card-body">
        {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
        <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
    </div>
</div>
{{-- フォロー／アンフォローボタン --}}
@include('user_follow.follow_button')

