@extends('admin.layouts.auth')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('front.paintings.index') }}"><b>ART AdminPage</a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ Str::ucfirst(__('app.sign_in')) }}</p>
                <form action="{{ route('admin.auth.authenticate') }}" method="post">
                    @csrf
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
                    <div class="row">
                        <div class="col-4">
                            <button type="submit"
                                class="btn btn-primary btn-block">{{ Str::ucfirst(__('app.sign_in')) }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
