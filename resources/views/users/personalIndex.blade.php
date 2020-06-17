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
    <div class="text-center mt-4">{!! link_to_route('users.edit',__('messages.ModifyyourUserInfo'), ['user' => Auth::id()],['class' => 'btn btn-info']) !!}</div>
    <div class="text-center mt-3 mb-3">{{ __('messages.OR') }}</div>
    <div class="text-center">
        {!! Form::open(['route' => ['users.destroy', Auth::id()], 'method' => 'delete']) !!}
        {!! Form::submit(__('messages.deleteaccount'), ['class' => 'btn btn-warning']) !!}
        
    </div>
    </div>
        
    
