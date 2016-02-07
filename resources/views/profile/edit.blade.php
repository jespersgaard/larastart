@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Profile

            <a href="{{ url('edit-profile/password') }}" class="pull-right">Change Password</a>
        </div>
        <div class="panel-body">
            {{ Form::model($user, ['action' => 'ProfileController@edit', 'class' => 'form-horizontal']) }}

            <div class="form-group">
                {{ Form::label('username', 'Username', ['class' => 'col-md-4 control-label']) }}

                <div class="col-md-6">
                    {{ Form::text('username', old('username'), ['class' => 'form-control','disabled' => 'disabled']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email Address', ['class' => 'col-md-4 control-label']) }}

                <div class="col-md-6">
                    {{ Form::text('email', old('email'), ['class' => 'form-control','disabled' => 'disabled']) }}
                </div>
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {{ Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) }}

                <div class="col-md-6">
                    {{ Form::text('name', old('name'), ['class' => 'form-control']) }}

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"></i> Update Profile
                    </button>
                </div>
            </div>

            {{ Form::close() }}
        </div>
    </div>
@endsection
