@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ Str::title(__('app.add_method')) }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.methods.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="name">{{ Str::title(__('app.name')) }}</label>
                    <input type="text" class="form-control" name="name" id="name"
                        placeholder="{{ Str::ucfirst(__('app.name')) }}">
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ Str::ucfirst(__('app.submit')) }}</button>
                </div>
        </form>
    </div>
@endsection
