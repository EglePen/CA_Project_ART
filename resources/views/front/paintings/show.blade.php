@extends('front.layouts.document')


@section('content')

<section>

    <div class="title">
        <h2>
            {{ $painting->title }}
        </h2>
    </div>

    <div class="show-painting-card-wrapper">

        <article class="show-painting-card">
            <img src=" {{ asset('storage/images/' . ($painting->image ?? '')) }}">
            <div class="show-painting-card-body">
                <div class="show-paintings-card-text">
                    <div>
                        <span>Year:</span>
                        <span> {{ ($painting?->year_created ?? '') }} m.</span>
                    </div>

                    <div>
                        <span>Artist:</span>
                        <span>{{ ($painting?->artists->pluck('first_name')->implode(', ') ?? '') }} {{ ($painting?->artists->pluck('last_name')->implode(', ') ?? '')}}</span>
                    </div>
    
                    <div>
                        <span>Location:</span>
                        <span>{{ ($painting?->locations->pluck('name')->implode(', ') ?? '') }}</span>
                    </div>

                    <div>
                        <span>Method:</span>
                        <span>{{ ($painting?->methods->pluck('name')->implode(', ') ?? '') }}</span>
                    </div>
                    <div>
                        <span>Movement:</span>
                        <span>{{ ($painting?->movements->pluck('name')->implode(', ') ?? '') }}</span>
                    </div>
                    <div>
                        <span>Colors:</span>
                        <span>{{ ($painting?->colors->pluck('name')->implode(', ') ?? '') }}</span>
                    </div>
                </div>
                <div class="show-painting-card-description">
                    {{ ($painting?->description ?? '') }}
                </div>
            </div>

            <div class="painting-parts">
                @foreach($painting->images as $image)
                <img src={{ asset('storage/images/' . ($image->name ?? '')) }}>
                @endforeach
            </div>
        </article>

        <div class="price-list-text info">
            <h2 class="title">Price List</h2>
            <p>Art offers a wide variety of diffrent dimensions for prints so you can choose the most suitable for you. Place your order by contacting us</p>
        </div>


        
            <table class=" table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Dimensions</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($frames as $frame)
                    <tr>
                        <th scope="row">{{$frame->id ?? ''}}</th>
                        <td>{{$frame->dimensions ?? ''}} cm</td>
                        <td>{{$frame->price ?? ''}} €</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>            

        <button class="button">
            <a href="{{ route('front.contact')}}"></a>
            Contact Us
        </button>


    </div>






        
</section>

@endsection