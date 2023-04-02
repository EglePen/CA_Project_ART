{{-- {{dd($paintings)}} --}}


@extends('admin.layouts.document')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Paintings</h3>
                <a href="{{ route('admin.paintings.create') }}" class="btn btn-app">
                  <i class="fas fa-plus"></i> Add new
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Years</th>
                            <th>Description</th>
                            <th>Artist</th>
                            <th>Location</th>
                            <th>Movement</th>
                            <th>Method</th>
                            <th>Colors</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($paintings as $painting)
                            <tr>
                                <td>{{ ($painting->id ?? '') }}</td>
                                <td>
                                    {{-- <img width="100" src="{{ ($movie->image ?? '') }}"> --}}
                                    <img width="100" src="{{ asset('storage/images/'.($painting->image ?? $painting->images[0]->name ?? ""))}} ">
                                </td>
                                <td>{{ ($painting->title ?? '') }}</td>
                                <td>{{ ($painting->year_created ?? '') }}</td>
                                <td>{{ ($painting->description ?? '') }}</td>
                                <td>
                                    @foreach($painting->artists as $artist)
                                       <a href="{{route('admin.artists.edit', $artist)}}"> {{$artist->FullName}}
                                       </a>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($painting->locations as $location)
                                        {{$location->name}}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($painting->movements as $movement)
                                        {{$movement->name}}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($painting->methods as $method)
                                        {{$method->name}}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($painting->colors as $color)
                                        {{$color->name}}
                                    @endforeach
                                </td>
                                <td>{{ ($painting->created_at ?? '') }}</td>
                                <td>{{ ($painting->updated_at ?? '') }}</td>


                                <td>
                                    <div class="btn-group">
                                        <a href='{{ route('admin.paintings.edit', $painting) }}' type="button" class="btn btn-info">Edit</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a onclick="event.preventDefault()" class="dropdown-item delete" href="{{ route('admin.paintings.destroy', $painting) }}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection
