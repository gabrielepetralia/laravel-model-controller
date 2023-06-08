@extends("layout.main")

@section("title")
    {{ $movie["title"] }}
@endsection

@section("content")
    <div class="movie-details d-flex align-items-center bg-dark py-5">
      <div class="container">

        @include("partials.movie_details_card",
          [
            "poster" => $movie["poster"],
            "title" => $movie["title"],
            "original_title" => $movie["original_title"],
            "nationality" => $movie["nationality"],
            "date" => $movie["date"],
            "vote" => $movie["vote"]
          ])

        <div class="d-flex justify-content-center mt-4">
          <a href="{{ route("home") }}" class="btn btn-danger">Return to Home</a>
        </div>

      </div>
    </div>
@endsection
