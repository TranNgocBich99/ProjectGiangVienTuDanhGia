@extends('layouts.app')

@section('content')
<div class="container">
<img src="{{asset('/uploads/home/img/logo.png')}}" alt="" >
    </div>


    <div class="row justify-content-center"
    style="background-color: #6cb2ebb5; padding-top: 30px; padding-bottom: 30px"
    >
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
