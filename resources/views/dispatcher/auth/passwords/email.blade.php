@extends('dispatcher.layout.auth')

<!-- Main Content -->
@section('content')
<div class="sign-form">
    <div class="columns">
        <div class="column">
            <div class="box b-a-0">
                <div class="p-2 text-xs-center">
                    <h5>Reset Password</h5>
                </div>
                <form class="form-material mb-1" role="form" method="POST" action="{{ url('/dispatcher/password/email') }}" >
                {{ csrf_field() }}
                    <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" name="email" value="{{ old('email') }}" required="true" class="input" id="email" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="px-2 form-group mb-0">
                        <button type="submit" class="button is-primary is-uppercase">Send Password Reset Link</button>
                    </div>
                </form>
                <div class="p-2 text-xs-center text-muted">
                    <a class="text-black" href="{{ url('/dispatcher/login') }}"><span class="underline">Login Here!</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
