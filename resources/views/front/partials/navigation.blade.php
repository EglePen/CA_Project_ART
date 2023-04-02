<nav>
    <div class="logo">
        <h1><a href="{{ route('front.home') }}">art</a></h1>
    </div>
    <ul class="links">
        {{-- <li><a href="{{ route('front.home') }}">Home</a></li> --}}
        <li><a href="{{ route('front.paintings.index') }}">Paintings</a></li>
        <li><a href="{{ route('front.about') }}">About us</a></li>
        <li><a href="{{ route('front.contact') }}">Contact us</a></li>
    </ul>
</nav>