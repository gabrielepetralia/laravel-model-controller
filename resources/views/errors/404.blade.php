@extends("layout.main")

@section("title")
    Error 404
@endsection

@section("content")
    <div class="error-404 d-flex align-items-center bg-dark">
      <div class="container">

        <h1 class="text-danger text-center mb-5">ERROR 404 <span class="text-white">| MOVIE NOT FOUND!</span></h1>

        <div class="d-flex justify-content-center mt-5">
          <a href="{{ route("home") }}" class="btn btn-danger">Return to Home</a>
        </div>

      </div>
    </div>
@endsection
