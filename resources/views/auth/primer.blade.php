@extends('layouts.home_my')
@section('title', 'logins')

@section('class')
    <!--стили -->
    <link rel="stylesheet" type="text/css" href="css/login/util.css">
    <link rel="stylesheet" type="text/css" href="css/login/main.css">
@stop

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

                    <span class="login100-form-title p-b-32">
                        {{ __('Account Login') }}
					</span>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <span for="email" class="txt1 p-b-11">
                                {{ __('E-Mail Address') }}
                            </span>
                            <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                                <input id="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100"></span>
                            </div>
                            <span class="txt1 p-b-11">
						        {{ __('Password') }}
					        </span>
                            <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
                                <span class="btn-show-pass">
                                    <i class="fa fa-eye"></i>
                                </span>
                                <input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                <span class="focus-input100"></span>
                            </div>
                            <div class="flex-sb-m w-full p-b-48">
                                <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                    <label class="label-checkbox100" for="ckb1">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                <div>
                                    <a href="{{ route('password.request') }}" class="txt3">
                                        {{ __('Forgot Your Password?') }}
                                    </a><br>
                                    <a href="#" class="txt3">
                                        {{ __('Want to register?') }}
                                    </a>
                                </div>
                            </div>
                            <div class="container-login100-form-btn">
                                <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" type="submit">
                                    {{ __('Login') }}
                                </button>
                            </div>

                        </form>
                    </div>

            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>


@endsection
