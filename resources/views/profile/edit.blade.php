@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Profile

            <a href="{{ url('settings/password') }}" class="pull-right">Change Password</a>
        </div>
        <div class="panel-body">
            {{ Form::model(auth()->user()->profile, ['action' => 'ProfileController@getEditProfile', 'class' => 'form-horizontal']) }}

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

            <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                {{ Form::label('country', 'Country', ['class' => 'col-md-4 control-label']) }}

                <div class="col-md-6">
                    {{ Form::select('country', $countries, old('country'), ['class' => 'form-control']) }}

                    @if ($errors->has('country'))
                        <span class="help-block">
                            <strong>{{ $errors->first('country') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('hometown') ? ' has-error' : '' }}">
                {{ Form::label('hometown', 'Hometown', ['class' => 'col-md-4 control-label']) }}

                <div class="col-md-6">
                    {{ Form::text('hometown', old('hometown'), ['class' => 'form-control']) }}

                    @if ($errors->has('hometown'))
                        <span class="help-block">
                            <strong>{{ $errors->first('hometown') }}</strong>
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
