@extends('front.layouts.document')

@section('content')
    <div class="background-image">
        <div>
            <div class="landing-page">
                <h2>
                    Give your walls a makeover with magnificent works of famous artists
                </h2>
                <a href="{{ route('front.paintings.index') }}">Explore</a>
            </div>
        </div>
    </div>
@endsection
