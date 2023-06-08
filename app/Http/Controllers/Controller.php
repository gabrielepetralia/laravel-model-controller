<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Movie;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
      $movies = Movie::orderBy("title")->get();
      return view("home", compact("movies"));
    }

  public function movie_details($slug)
  {
    $movie = Movie::where("slug", $slug)->first();
    if(empty($movie)) {
      abort(404);
    }
    return view("movie_details", compact("movie"));
  }
}
