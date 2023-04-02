@extends('front.layouts.document')

{{-- {{dd($paintings)}} --}}

@section('content')
<section>
    
    <div class="title">
        <h2>
           Our Collection
        </h2>
    </div>
   
    <div class="painting-cards">
        @foreach ($paintings as $painting)
            <article class="painting-card painting-card-hover">
                <a href="{{ route('front.paintings.show', $painting) }}"></a>
                <div>
                    <img src=" {{ asset('storage/images/' . ($painting->image ?? '')) }}">
                    <h3>
                        {{ ($painting->title ?? '') }}
                    </h3>
                </div>
                <div class="painting-card-body">
                    <div class="painting-card-text">
                        <div>
                            <span>Year:</span>
                            <span>{{ ($painting?->year_created ?? '') }} m.</span>
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
                        
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>
@endsection