@extends('layouts.app')

@section('content')
<h2>{{ __('messages.ATTTENTION') }}</h2>
<p>{{ __('messages.Please clear all your posts before deleting account!') }}</p>

{{-- トップに戻る　--}}
<a href="/">{{ __('messages.back')}}</a>

@endsection