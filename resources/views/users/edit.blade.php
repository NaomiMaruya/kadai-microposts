@extends('layouts.app')

@section('content')

<div class="container">
    <h2>{{ $user->name }} {{__('messages.modifyinfo')}}</h2>
    <div class="row">
        <div class="col-6">
        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('name', __('messages.Name')) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', __('messages.Email')) !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

@endsection
