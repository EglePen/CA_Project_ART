<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="{{ route('admin.logout') }}" class="nav-link" role="button">
                <i class="fa-solid fa-right-from-bracket"></i>
                {{ Str::ucfirst(__('app.logout')) }}
            </a>
        </li>
    </ul>
</nav>
