@extends('layouts.admin')

@section('content')


    <h1>Edit Users</h1>

    
    <img height="10" src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/250x250'}}" alt="" class="img-responsive img-rounded">


    <div class="sol-sm-9">

        {!! Form::model($user, ['method' =>'PATCH', 'action' =>['AdminUsersController@update', $user->id],'files' => true]) !!}


        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
    
        </div>

        <div class="form-group">

            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id',[''=>'Choose Option'] + $roles, null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('photo_id', 'Add Photo:') !!}
            {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Confirm', ['class' => 'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}


    </div>

    <div class="row">

        @include('includes.form_error')

    </div>


@stop