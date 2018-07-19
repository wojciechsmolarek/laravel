@extends('master')
@section('content')

<div class="videos-header card">
  <h2>Najnowsze filmy</h2>
</div>

  @foreach ($videos as $video)
      <div class="col-xs-12 col-md-6 col-lg-4 single-video">
        <div class="card">

          <div class="embed-responsive embed-responsive-16by9" >
            <iframe class="embed-responsive-item" src="{{$video->url}}" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="card-content">
            <a href="{{url('videos', $video->id)}}">
              <h4>{{$video->title}}</h4>
            </a>
            <p>{{$video->description}}</p>
            <span class="upper-label">Dodał</span>
            <span class="video-author">Wojciech Smolarek</span>
          </div>
        </div>

    </div>

@endforeach

@stop
