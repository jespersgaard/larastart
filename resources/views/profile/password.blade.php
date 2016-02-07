@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Change Password</div>
        <div class="panel-body">
            {{ Form::open(['action' => 'ProfileController@editPassword', 'class' => 'form-horizontal']) }}


            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                {{ Form::label('password', 'New Password', ['class' => 'col-md-4 control-label']) }}

                <div class="col-md-6">
                    {{ Form::password('password', ['class' => 'form-control']) }}

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                {{ Form::label('password_confirmation', 'Confirm Password', ['class' => 'col-md-4 control-label']) }}

                <div class="col-md-6">
                    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user-secret"></i> Update Password
                    </button>
                </div>
            </div>

            {{ Form::close() }}
        </div>
    </div>
@endsection