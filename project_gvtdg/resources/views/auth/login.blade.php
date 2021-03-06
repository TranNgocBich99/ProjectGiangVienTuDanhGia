@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-12" style="text-align: center">
        <img src="{{asset('/uploads/home/img/logo.png')}}" alt="" >
    </div>


    <div class="row justify-content-center"
   
    >

        <div class="col-md-6"
            >
            <div class="card">
                <div class="card-header" style = "font-weight: bold;font-size: 16px;    color: #eeb10a;">{{ __('Đăng nhập') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check" style = "padding:0px !important">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style = "    margin-left: 16px;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
						<div class = "form-group row">
							@if (Route::has('password.request'))
								<a style = "display:block"  class="btn btn-link col=md-6 offset-md-4" href="{{ route('password.request') }}">
								<!--	{{ __('Forgot Your Password?') }} -->
								</a>
                            @endif
						</div>
                        <div class="form-group row mb-0">

                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style = "margin-right: 20px;">
                                    {{ __('Đăng nhập') }}
                                </button>
								<button type="button" class="btn btn-default" style = "margin-right: 20px;" onclick = "click_dang_ky()">
									{{ __('Đăng ký') }}
								</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<script>
		function click_dang_ky(){
			window.location.href = "{{URL::route('getDangki')}}";
		}
	</script>
</div>
@endsection
