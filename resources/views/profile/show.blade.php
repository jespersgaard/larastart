@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
    	<div class="panel-heading">{!! $user->name !!}</div>
        <div class="panel-body">
    	   This is a dummy profile of {!! $user->username !!}.
    	</div>
    </div>
@endsection