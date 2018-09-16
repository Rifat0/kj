@extends('content.layout.layout')

@section('css')

@endsection

@section('container')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <header class="page-header">
                <h1 class="page-title">Create Account</h1>
            </header>
            <div class="box-lg">
                <div class="row" data-gutter="60">
                	<div class="col-md-4">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                            <div class="form-group">
                                <label>Company name</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>About Company</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label>Company Description</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Website-URL</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label>CAC Number</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label>Type of Business</label>
                                <input class="form-control" type="text" />
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="form-group">
                                <label>Years of Existence</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label>Phone of MD/Chairman</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label>Email of MD/Chairman</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label>Phone of Contact Person</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label>Email of Contact Person</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label>Company Rating</label>
                                <input class="form-control" type="text" />
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Passwprd</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Confirm Passwprd</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Sign Up to the Newsletter</label>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Create Account" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection