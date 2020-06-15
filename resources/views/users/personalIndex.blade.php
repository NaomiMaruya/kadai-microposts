    @include('layouts.app')
    
    <div class="container">
        <h2>{{ __('messages.UserInfo')}}</h2>
        <img class="rounded img-fluid" src="{{ Gravatar::get($auth->email, ['size' => 200]) }}" alt="">
        <table class="table table-bordered">
        <tr>
        <td>{{ __('messages.UserID')}}</td>
        <td>{{Auth::user()->id}}</td>
        </tr>
        <tr>
        <td>{{ __('messages.Name')}}</td>
        <td>{{Auth::user()->name}}</td>
        </tr>
        <tr>
        <td>{{ __('messages.Email')}}</td>
        <td>{{Auth::user()->email}}</td>
        </tr>
        <tr>
        <td>{{ __('messages.Createdat')}}</td>
        <td>{{Auth::user()->created_at}}</td>
        </tr>
        </table>
        {{-- 設定を変更する --}}
    <div class="text-center">{!! link_to_route('users.edit',__('messages.ModifyyourUserInfo'), ['user' => Auth::id()],['class' => 'btn btn-info']) !!}</div>
 
    </div>
        
    
