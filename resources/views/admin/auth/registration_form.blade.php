@extends('admin.layouts.auth')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('front.paintings.index') }}"><b>ART Admin Page</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ Str::ucfirst(__('app.register')) }}</p>

                <form action="{{ route('admin.auth.register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="first_name"
                            placeholder="{{ Str::ucfirst(__('app.first_name')) }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="last_name"
                            placeholder="{{ Str::ucfirst(__('app.last_name')) }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email"
                            placeholder="{{ Str::ucfirst(__('app.email')) }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password"
                            placeholder="{{ Str::ucfirst(__('app.password')) }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation"
                            placeholder="{{ Str::ucfirst(__('app.password_confirmation')) }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit"
                                class="btn btn-primary btn-block">{{ Str::ucfirst(__('app.sing_in')) }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
