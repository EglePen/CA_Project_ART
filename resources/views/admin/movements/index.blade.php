@extends('admin.layouts.document')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ Str::title(__('app.movements')) }}</h3>
                    <a href="{{ route('admin.movements.create') }}" class="btn btn-app">
                        <i class="fas fa-plus"></i> New
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

                            @foreach ($movements as $movement)
                                <tr>
                                    <td>{{ $movement->id ?? '' }}</td>
                                    <td>{{ $movement->name ?? '' }}</td>
                                    <td>{{ $movement->created_at ?? '' }}</td>
                                    <td>{{ $movement->updated_at ?? '' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href='{{ route('admin.movements.edit', $movement) }}' type="button"
                                                class="btn btn-info">{{ Str::ucfirst(__('app.edit')) }}</a>
                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-icon"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a onclick="event.preventDefault()" class="dropdown-item delete"
                                                    href="{{ route('admin.movements.destroy', $movement) }}">{{ Str::ucfirst(__('app.delete')) }}</a>
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
