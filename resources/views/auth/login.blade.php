@extends('layouts.session')

@section('content')
<div class="card login">

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="card-body p-4" >
          <div class="card-title text-white font-weight-bold mt-3">{{ __('Login to your account')}}</div>

          <div class="form-group row">
            <label for="email" class="ml-2 text-md-right text-white font-weight-bold">{{ __('E-Mail Address') }}</label>

            <div class="col-md-12">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="ml-2 text-md-right text-white font-weight-bold">{{ __('Password') }}</label>

            <div class="col-md-12">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-footer">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Login')}}</button>
        </div>
    </div>
</form>
</div>
@endsection


