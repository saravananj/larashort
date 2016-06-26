{{-- ========================================================================
 * LaraShort v0.1
 * Copyright 2016 Saravanan Jayabalan (http://www.saravananj.com)
 * Licensed under MIT (https://github.com/saravananj/larashort/blob/master/LICENSE)
 * ======================================================================== --}}
@extends('master')

@section('content')
    <br/><br/>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="card">
                <div class="card-header">
                    Signup
                </div>
                <div class="card-block">

                    @if (count($errors))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::open() !!}
                        <fieldset class="form-group">
                            <label for="larashortRegisterName">Name</label>
                            <input type="text" class="form-control" name="name" id="larashortRegisterName" placeholder="John Doe" value="{{ old('name') }}">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="larashortRegisterEMail">E-Mail Address</label>
                            <input type="text" class="form-control" name="email" id="larashortRegisterEMail" placeholder="john.doe@example.com" value="{{ old('email') }}">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="larashortRegisterPassword">Password</label>
                            <input type="password" class="form-control" name="password" id="larashortRegisterPassword" placeholder="A strong secret" value="{{ old('password') }}">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="larashortRegisterConfirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="larashortRegisterConfirmPassword" placeholder="Same as above">
                        </fieldset>
                        <div class="form-group g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE') }}"></div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

