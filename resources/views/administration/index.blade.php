@extends('templates/administration')

@section('main')
    <!-- resources/views/auth/login.blade.php -->
    <fieldset>

        <form method="POST" action="login">

            <legend>Log into the potato</legend>
            {!! csrf_field() !!}


            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'password') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div>
                <input type="checkbox" name="remember"> Remember Me
            </div>

            {!! Form::submit('Login', ['class' => 'btn btn-primary form-control']) !!}
        </form>
    </fieldset>
@stop