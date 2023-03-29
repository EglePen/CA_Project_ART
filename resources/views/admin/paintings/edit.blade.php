@extends('admin.layouts.document')

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit information about {{ ($painting->title ?? '') }}, [{{ ($painting->id ?? '') }}]</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.paintings.update', $painting) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="{{ ($paininting->id ?? '') }}">
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{ ($painting->title ?? '') }}" id="title" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="year-created">Years</label>
                <input type="number" min="1800" max="2099" step="1" value="2023" class="form-control" name="year_created" value="{{ ($painting->year_created ?? '') }}" id="year_created">
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" value="{{ ($painting->description ?? '') }}" id="description" placeholder="Description">
            </div>

            <x-forms.multi-relation-select :tagName="'artists'" :model="$painting" :relationItems="$artists" :optionDisplay="'fullName'"/>

            <x-forms.multi-relation-select :tagName="'locations'" :model="$painting" :relationItems="$locations"/>

            <x-forms.multi-relation-select :tagName="'movements'" :model="$painting" :relationItems="$movements"/>

            <x-forms.multi-relation-select :tagName="'methods'" :model="$painting" :relationItems="$methods"/> 

            <div class="form-group">    
                <x-forms.image-input :images="[$painting->image]" :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
            </div>

            <div class="form-group">    
                <x-forms.image-input :images="$painting->images"  :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
            </div>
            

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection