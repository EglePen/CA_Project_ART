<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    @include('admin.partials.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('admin.partials.navigation')

        @include('admin.partials.sidebar')

        <div class="content-wrapper">

            <section class="content-header">

                <section class="content">
                    <div class="container-fluid">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @yield('content')

                    </div>
                </section>

            </section>

        </div>

        @include('admin.partials.footer')

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    @include('admin.partials.javascripts')
</body>

</html>
