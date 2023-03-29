@extends('admin.layouts.document')

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add Painting</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.paintings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="year-created">Years</label>
                <input type="number" min="1800" max="2099" step="1" value="2023" class="form-control" name="year_created" id="year-created" >
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Description">
            </div>

            <div class="form-group">
                <x-forms.image-input :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
            </div>

            <div class="form-group">    
                <x-forms.image-input :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection