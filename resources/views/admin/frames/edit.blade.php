@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ Str::ucfirst(__('app.edit_information_about')) }} {{ Str::title(__('app.frame')) }},
                {{ $frame->id ?? '' }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.frames.update', $frame) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $frame->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="dimensions">{{ Str::title(__('app.dimensions')) }}, cm</label>
                    <input type="text" class="form-control" name="dimensions" value="{{ $frame->dimensions ?? '' }}"
                        id="dimensions" placeholder="{{ Str::ucfirst(__('app.dimensions')) }}">
                </div>
                <div class="form-group">
                    <label for="price">{{ Str::title(__('app.price')) }}, €</label>
                    <input type="text" class="form-control" name="price" value="{{ $frame->price ?? '' }}"
                        id="price" placeholder="{{ Str::ucfirst(__('app.price')) }}">
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ Str::ucfirst(__('app.submit')) }}</button>
                </div>
        </form>
    </div>
@endsection
