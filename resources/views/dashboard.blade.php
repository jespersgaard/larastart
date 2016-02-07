@extends('layouts.app')

@section('content')
    @if(auth()->user()->hasRole('administrator'))
        <div class="panel panel-default">
            <div class="panel-heading">Administration Options</div>
            <div class="panel-body">
                As you were the first user registered you have been assigned the role of administrator.<br>
                Any users who register now will be assigned the role of user.
            </div>
        </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <div class="panel-body">
            You are logged in!
        </div>
    </div>
@endsection
