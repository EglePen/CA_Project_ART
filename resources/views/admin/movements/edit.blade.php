@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ Str::ucfirst(__('app.edit_information_about')) }} {{ $movement->name ?? '' }},
                {{ $movement->id ?? '' }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.movements.update', $movement) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $movement->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">{{ Str::title(__('app.name')) }}</label>
                    <input type="text" class="form-control" name="name" value="{{ $movement->name ?? '' }}"
                        id="name" placeholder="{{ Str::ucfirst(__('app.name')) }}">
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ Str::ucfirst(__('app.submit')) }}</button>
                </div>
        </form>
    </div>
@endsection
