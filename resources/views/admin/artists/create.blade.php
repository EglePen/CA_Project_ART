@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ Str::title(__('app.add_artist')) }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.artists.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="first-name">{{ Str::title(__('app.first_name')) }}</label>
                    <input type="text" class="form-control" name="first_name" id="first-name"
                        placeholder="{{ Str::title(__('app.first_name')) }}">
                </div>

                <div class="form-group">
                    <label for="last-name">{{ Str::title(__('app.last_name')) }}</label>
                    <input type="text" class="form-control" name="last_name" id="last-name"
                        placeholder="{{ Str::title(__('app.last_name')) }}">
                </div>

                <div class="form-group">
                    <label for="date-of-birth">{{ Str::title(__('app.date_of_birth')) }}</label>
                    <input type="date" class="form-control" name="date_of_birth" id="date-of-birth"
                        placeholder="{{ Str::title(__('app.date_of_birth')) }}">
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ Str::title(__('app.submit')) }}</button>
                </div>
        </form>
    </div>
@endsection
