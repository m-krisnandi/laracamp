@extends('layouts.app')

@section('content')
<section class="py-2 py-lg-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3">
          <div class="sticky-top pt-4">
            <div class="list-group">
              <a
                href="#"
                class="list-group-item list-group-item-action list-group-item-dark active"
                >Materi 1</a
              >
              <a
                href="#"
                class="list-group-item list-group-item-action list-group-item-dark"
                >Materi 2</a
              >
              <a
                href="#"
                class="list-group-item list-group-item-action list-group-item-dark"
                >Materi 3</a
              >
              <a
                href="#"
                class="list-group-item list-group-item-action list-group-item-dark"
                >Materi 4</a
              >
              <a
                href="#"
                class="list-group-item list-group-item-action list-group-item-dark"
                >Materi 5</a
              >
              <a
                href="#"
                class="list-group-item list-group-item-action list-group-item-dark"
                >Materi 6</a
              >
              <a
                href="#"
                class="list-group-item list-group-item-action list-group-item-dark"
                >Materi 7</a
              >
              <a
                href="#"
                class="list-group-item list-group-item-action list-group-item-dark"
                >Materi 8</a
              >
              <a
                href="#"
                class="list-group-item list-group-item-action list-group-item-dark"
                >Materi 9</a
              >
            </div>
          </div>
        </div>
        <div class="col-lg-9 pt-4">
          <!-- Video Player START -->
          <div class="videoplayer" id="player-1">
            <div class="ratio ratio-21x9 bg-dark">
              <video
                class="video"
                src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/TearsOfSteel.mp4#t=9"
              ></video>
            </div>
            <div class="controls controls-dark auto-hide">
              <button
                class="btn btn-lg btn-video-playpause"
                data-bs-toggle="tooltip"
                title="Play Video"
                type="button"
              >
                <i class="bi bi-play-fill"></i
                ><i class="bi bi-pause-fill d-none"></i>
              </button>
              <div class="px-1 w-100">
                <div class="progress w-100">
                  <div class="progress-bar"></div>
                </div>
              </div>
              <button
                class="btn btn-lg btn-video-pip"
                title="Play picture in picture"
              >
                <i class="bi bi-pip"></i></button
              ><button
                class="btn btn-lg btn-video-fullscreen"
                title="Full Screen"
              >
                <i class="bi bi-arrows-fullscreen"></i>
              </button>
              <div class="dropup">
                <button
                  class="btn btn-lg btn-video-volume"
                  data-bs-toggle="dropdown"
                  title="Volume"
                >
                  <i class="bi bi-volume-mute-fill"></i>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-end dropup-volume dropdown-menu-dark"
                >
                  <input class="form-range form-range-volume" type="range" />
                </div>
              </div>
              <div class="dropup">
                <button
                  class="btn btn-lg"
                  data-bs-toggle="dropdown"
                  title="More..."
                >
                  <i class="bi bi-three-dots-vertical"></i>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-end dropdown-menu-dark"
                >
                  <a class="dropdown-item" href="#"
                    ><i class="bi bi-info-circle-fill"></i> About</a
                  >
                </div>
              </div>
            </div>
            <div class="overlay">
              <div class="title">Course</div>
            </div>
          </div>
          <!-- Video Player END -->
          <hr />
        </div>
      </div>
    </div>
  </section>
@endsection
