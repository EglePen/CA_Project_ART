@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ Str::title(__('app.add_painting')) }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.paintings.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="title">{{ Str::title(__('app.title')) }}</label>
                    <input type="text" class="form-control" name="title" id="title"
                        placeholder="{{ Str::ucfirst(__('app.title')) }}">
                </div>

                <div class="form-group">
                    <label for="year-created">{{ Str::title(__('app.year')) }}</label>
                    <input type="number" min="1800" max="2099" step="1" class="form-control"
                        name="year_created" id="year-created">
                </div>

                <div class="form-group">
                    <label for="description">{{ Str::title(__('app.description')) }}</label>
                    <input type="text" class="form-control" name="description" id="description"
                        placeholder="{{ Str::ucfirst(__('app.description')) }}">
                </div>

                <x-forms.relation-select :tagName="'artists'" :relationItems="$artists" :optionDisplay="'fullName'" />

                <x-forms.multi-relation-select :tagName="'colors'" :relationItems="$colors" />

                <x-forms.relation-select :tagName="'locations'" :relationItems="$locations" />

                <x-forms.relation-select :tagName="'movements'" :relationItems="$movements" />

                <x-forms.relation-select :tagName="'methods'" :relationItems="$methods" />

                <div class="form-group">
                    <x-forms.image-input :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'" />
                </div>

                <div class="form-group">
                    <x-forms.image-input :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'" />
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ Str::ucfirst(__('app.submit')) }}</button>
            </div>
        </form>
    </div>
@endsection
