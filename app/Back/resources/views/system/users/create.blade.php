@extends('back::app')

@section('page-name', 'system users')

@section('page-title')
    <h1>Users</h1>
@stop

@section('page-actions')
    <a href="{{ route('back.system.users.index') }}" class="btn btn-brand"><i class="fa fa-arrow-left"></i> Back</a>
@stop

@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="card-title">Create user</h4>

            {!! Form::open(['method' => 'post', 'route' => ['back.system.users.store']]) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    {!! Form::openGroup('name', 'Name') !!}
                    {!! Form::text('name') !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    {!! Form::openGroup('email', 'Email') !!}
                    {!! Form::text('email') !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    {!! Form::openGroup('password', 'Password') !!}
                    {!! Form::password('password') !!}
                    {!! Form::closeGroup() !!}
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop