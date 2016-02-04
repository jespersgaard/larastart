@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Laravel 5.2</div>

                <div class="panel-body">
                    Welcome to my website, powered by Laravel 5.2!
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">How To Guide:</div>
                <ul class="nav">
                    <li><a href="{!! url('/how-to/add-a-static-page') !!}">Create a Static Page.</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
