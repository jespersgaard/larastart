@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Profile

            <a href="{{ url('settings/password') }}" class="pull-right">Change Password</a>
        </div>
        <div class="panel-body">
            {{ Form::model(auth()->user(), ['action' => 'ProfileController@postEditSettings', 'class' => 'form-horizontal']) }}

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                {{ Form::label('username', 'Username', ['class' => 'col-md-4 control-label']) }}

                <div class="col-md-6">
                    {{ Form::text('username', old('username'), ['class' => 'form-control']) }}

                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                {{ Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) }}

                <div class="col-md-6">
                    {{ Form::text('email', old('email'), ['class' => 'form-control']) }}

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-cog"></i> Update Settings
                    </button>
                </div>
            </div>

            {{ Form::close() }}
        </div>
    </div>
@endsection
