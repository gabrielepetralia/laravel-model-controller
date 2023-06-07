<div class="movie-details-card bg-black text-white d-flex">
  <div class="left">
    <div class="poster">
      <img src="{{ $poster }}" alt="{{ $title }}">
    </div>
  </div>

  <div class="right px-5 py-3">
    <h2 class="mb-3 fw-semibold">{{ $title }}</h2>
    <ul class="list-unstyled">
      <li class="mb-2">
        Original Title: <span class="text-danger">{{ $original_title }}</span>
      </li>
      <li class="mb-2">
        Nationality: <span class="text-danger">{{ $nationality }}</span>
      </li>
      <li class="mb-2">
        Date: <span class="text-danger">{{ $date }}</span>
      </li>
      <li class="mb-2">
        Vote: <span class="text-danger">{{ $vote }}</span>
      </li>
    </ul>
  </div>
</div>
