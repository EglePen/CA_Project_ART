@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ Str::ucfirst(__('app.edit_information_about')) }} {{ $painting->title ?? '' }},
                [{{ $painting->id ?? '' }}]</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.paintings.update', $painting) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $paininting->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">{{ Str::title(__('app.title')) }}</label>
                    <input type="text" class="form-control" name="title" value="{{ $painting->title ?? '' }}"
                        id="title" placeholder="{{ Str::ucfirst(__('app.title')) }}">
                </div>

                <div class="form-group">
                    <label for="year-created">{{ Str::title(__('app.year')) }}</label>
                    <input type="number" min="1800" max="2099" step="1" class="form-control"
                        name="year_created" value="{{ $painting->year_created ?? '' }}" id="year_created">
                    <div class="form-group">
                        <label for="description">{{ Str::title(__('app.description')) }}</label>
                        <input type="text" class="form-control" name="description"
                            value="{{ $painting->description ?? '' }}" id="description"
                            placeholder="{{ Str::ucfirst(__('app.description')) }}">
                    </div>

                    <x-forms.relation-select :tagName="'artist_id'" :model="$painting" :relationItems="$artists" :optionDisplay="'fullName'" />

                    <x-forms.multi-relation-select :tagName="'colors'" :model="$painting" :relationItems="$colors" />

                    <x-forms.relation-select :tagName="'location_id'" :model="$painting" :relationItems="$locations" />

                    <x-forms.relation-select :tagName="'movement_id'" :model="$painting" :relationItems="$movements" />

                    <x-forms.multi-relation-select :tagName="'methods'" :model="$painting" :relationItems="$methods" />

                    <div class="form-group">
                        <x-forms.image-input :images="[$painting->image]" :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'" />
                    </div>

                    <div class="form-group">
                        <x-forms.image-input :images="$painting->images" :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'" />
                    </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ Str::ucfirst(__('app.submit')) }}</button>
                </div>
        </form>
    </div>
@endsection
