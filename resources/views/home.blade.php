@extends("layout.main")

@section("title")
    Home
@endsection

@section("content")
<div class="home bg-dark py-5">
  <div class="container">
    <div class="row row-cols-5">

      @foreach ($movies as $movie)
        <div class="col mb-4">
          <div class="movie-card px-3">
            <a class="text-decoration-none" href="{{ route("movie_details", ["slug" => $movie["slug"]])}}">
              <div class="poster mb-3">
                <img src="{{ $movie["poster"] }}" alt="{{ $movie["title"] }}">
              </div>
              <h6 class="text-uppercase text-white">{{ $movie["title"] }}</h6>
            </a>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</div>
@endsection
