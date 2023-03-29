@extends('admin.layouts.document')

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add Artist</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.artists.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="card-body">
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first-name" placeholder="First Name">
            </div>

            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last-name" placeholder="Last Name">
            </div>

            <div class="form-group">
                <label for="date-of-birth">Date of Birth</label>
                <input type="date" class="form-control" name="date_of_birth" id="date-of-birth" placeholder="Date of Birth">
            </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection