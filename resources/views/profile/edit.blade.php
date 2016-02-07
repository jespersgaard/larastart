@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                	<div class="panel-heading">Edit Profile</div>
                	<div class="panel-body">
                        {{ Form::model($user, ['action' => 'ProfileController@edit', 'class' => 'form-horizontal']) }}

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
            </div>
        </div>
    </div>
@endsection
