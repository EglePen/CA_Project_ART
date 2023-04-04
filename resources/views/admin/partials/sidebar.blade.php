<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div>
                <a href="{{route('admin.paintings.index')}}" class="d-block"> 
                    <h3>
                        ART AdminPage
                    </h3>
                </a>
            </div>
        </div>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="{{route('admin.paintings.index')}}" class="d-block"><h5>{{ Str::title(Auth::user()->fullName) }}</h5></a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header"><h6>{{ Str::upper(__('app.data_tables')) }}</h6></li>
                <li class="nav-item">
                    <a href="{{ route('admin.paintings.index') }}" class="nav-link">
                        <p>
                            {{ Str::title(__('app.paintings')) }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.artists.index') }}" class="nav-link">
                        <p>
                            {{ Str::title(__('app.artists')) }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.colors.index') }}" class="nav-link">
                        <p>
                            {{ Str::title(__('app.colors')) }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.frames.index') }}" class="nav-link">
                        <p>
                            {{ Str::title(__('app.frames')) }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.locations.index') }}" class="nav-link">
                        <p>
                            {{ Str::title(__('app.locations')) }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.methods.index') }}" class="nav-link">
                        <p>
                            {{ Str::title(__('app.methods')) }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.movements.index') }}" class="nav-link">
                        <p>
                            {{ Str::title(__('app.movements')) }}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
