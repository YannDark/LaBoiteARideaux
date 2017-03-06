@extends('templates/header')

<!-- resources/views/auth/register.blade.php -->

@section('main')

<form method="POST" action="register">
    <fieldset>
        <legend>Register yourself as a new Potato !</legend>
        {!! csrf_field() !!}

        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation', 'Password confirmation') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Register', ['class' => 'btn btn-primary form-control']) !!}

    </fieldset>
</form>

@stop