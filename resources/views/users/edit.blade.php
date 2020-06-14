@extends('layouts.app')

@section('content')

<div class="container">
    <h2>{{ $user->name }} ユーザー情報編集</h2>
    <div class="row">
        <div class="col-6">
        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'User name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'User email:') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

@endsection
