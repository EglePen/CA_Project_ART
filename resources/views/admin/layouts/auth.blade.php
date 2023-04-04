<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    @include('admin.partials.head')
</head>

<body class="hold-transition login-page">

    @if ($errors->any())
        <div class="alert alert-danger">

            @foreach ($errors->all() as $error)
                <div>
                    {{ $error }}
                </div>
            @endforeach

        </div>
    @endif

    @if (session()->has('messages'))
        <div class="alert alert-success">
            @foreach (session()->get('messages') as $message)
                <div>
                    {{ $message }}
                </div>
            @endforeach
        </div>
    @endif

    @yield('content')
    @include('admin.partials.javascripts')
    @yield('js')
</body>

</html>
