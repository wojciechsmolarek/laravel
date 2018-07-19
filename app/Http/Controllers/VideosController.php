<?php

namespace App\Http\Controllers;

use Request;
use App\Video;

class VideosController extends Controller
{
    public function index() {
      $videos = Video::latest()->get();
      return view('videos.index')->with('videos', $videos);
    }

    // 1 movie
    public function show($id)
    {
      $video = Video::findOrFail($id);
      return view('videos.show')->with('video', $video);
    }

    public function create()
    {
      return view('videos.create');
    }

    public function store()
    {
      $input = Request::all();
      Video::create($input);
      return redirect('videos');
    }
}
