@extends('admin.layouts.document')

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit information about {{($movement->name ?? '') }}, {{($movement->id ?? '') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.movements.update', $movement) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="{{ ($movement->id ?? '') }}">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ ($movement->name ?? '') }}" id="name" placeholder="Name">
            </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection