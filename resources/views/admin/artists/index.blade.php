@extends('admin.layouts.document')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Artist</h3>
                <a href="{{ route('admin.artists.create') }}" class="btn btn-app">
                  <i class="fas fa-plus"></i> Add
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date of Birth</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($artists as $artist)
                            <tr>
                                <td>{{ ($artist->id ?? '') }}</td>
                                <td>{{ ($artist->first_name ?? '') }}</td>
                                <td>{{ ($artist->last_name ?? '') }}</td>
                                <td>{{ ($artist->date_of_birth ?? '') }}</td>
                                <td>{{ ($artist->created_at ?? '') }}</td>
                                <td>{{ ($artist->updated_at ?? '') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href='{{ route('admin.artists.edit', $artist) }}' type="button" class="btn btn-info">Edit</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a onclick="event.preventDefault()" class="dropdown-item delete" href="{{ route('admin.artists.destroy', $artist) }}">Delete</a>
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
{{-- {{dd($movies)}} --}}