@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Laravel 5.2</div>

                <div class="panel-body">
                    Welcome to my website, powered by Laravel 5.2!

                    @can('edit_forum')
                    <br />
                    <a href="#">Edit Form</a>
                    @endcan

                    @can('manage_money')
                    <br />
                    <a href="#">Add Funds</a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
