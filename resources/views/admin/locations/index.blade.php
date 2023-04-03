@extends('admin.layouts.document')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ Str::title(__('app.location')) }}</h3>
                    <a href="{{ route('admin.locations.create') }}" class="btn btn-app">
                        <i class="fas fa-plus"></i> {{ Str::ucfirst(__('app.new')) }}
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>{{ Str::title(__('app.name')) }}</th>
                                <th>{{ Str::title(__('app.created_at')) }}</th>
                                <th>{{ Str::title(__('app.updated_at')) }}</th>
                                <th>{{ Str::title(__('app.actions')) }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($locations as $location)
                                <tr>
                                    <td>{{ $location->id ?? '' }}</td>
                                    <td>{{ $location->name ?? '' }}</td>
                                    <td>{{ $location->created_at ?? '' }}</td>
                                    <td>{{ $location->updated_at ?? '' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href='{{ route('admin.locations.edit', $location) }}' type="button"
                                                class="btn btn-info">{{ Str::ucfirst(__('app.edit')) }}</a>
                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-icon"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a onclick="event.preventDefault()" class="dropdown-item delete"
                                                    href="{{ route('admin.locations.destroy', $location) }}">{{ Str::ucfirst(__('app.delete')) }}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
