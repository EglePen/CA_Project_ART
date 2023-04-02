@extends('admin.layouts.document')

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add Frame</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.frames.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="card-body">
            <div class="form-group">
                <label for="dimensions">Dimensions, cm</label>
                <input type="text" class="form-control" name="dimensions" id="dimensions" placeholder="Dimensions">
            </div>
            <div class="form-group">
                <label for="price">Price, €</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Price">
            </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection