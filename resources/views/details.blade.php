<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <title>Nara Academy</title>
  </head>
  <body>
    {{-- @include ('components/navbar') --}}
    <div class="container mx-auto">
      <div class="flex items-center gap-x-12 py-10">
        <div id="logo" class="flex flex-col">
          <span class="font-extrabold uppercase text-3xl text-secondary"
            >NARACADEMY</span
          >
          <span class="text-grey tracking-wider">Build Future Career Today</span>
        </div>
        <span
          class="border-r border-gray-100 h-14 w-[1px] relative flex"
        ></span>
        <ul class="flex gap-x-8 mr-auto">
          <li class="">
            <a href="{{ route('landing') }}" class="text-navy ">Home</a>
          </li>
          <li class="">
            <a href="{{ route('catalog') }}" class="text-navy">Catalog</a>
          </li>
          <li class="">
            <a href="https://stingy-droplet-bb0.notion.site/Learn-From-Expert-Become-Pro-086e766248bf4e2c99667e4fcf697bb0" class="text-navy">Pricing</a>
          </li>
          <li class="">
            <a href="#" class="text-navy">About</a>
          </li>
        </ul>

        @if(Auth::user())
        <ul class="flex gap-x-4">
          <li class="">
            <a href="{{ route('dashboard') }}" class="bg-secondary text-white rounded-full py-4 px-10"
              >Hello, {{ Auth::user()->name }}</a
            >
          </li>
        </ul>
        @endauth
        @guest
        <ul class="flex gap-x-4">
          <li class="">
            <a href="{{ route('dashboard') }}" class="bg-secondary text-white rounded-full py-4 px-14"
              >Login</a
            >
          </li>
          <li class="">
            <a href="{{ route('register') }}" class="bg-primary text-white rounded-full py-4 px-10"
              >Create Account</a
            >
          </li>
        </ul>
        @endguest

      </div>
    </div>
    <hr class="border-gray-100 mb-[70px]" />
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h1>{{ $course_details->title }}</h1>
                <p>
                    Creator: {{ $course_details->id_creator }}
                </p>
                <div class="row mt-5">
                    <div class="col-lg-8">
                        <div class="course-plyr">
                            <div class="plyr__video-embed ratio ratio-16x9" id="player">
                                <iframe src="https://www.youtube-nocookie.com/embed/{{ $course_details->trailer }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreens></iframe>
                                <iframe
                                    src="https://www.youtube.com/embed/{{ $course_details->trailer }}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&autoplay=1"
                                    allowfullscreen allowtransparency allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h5>
                            Materi Kelas
                        </h5>
                        <ul>
                            <li>
                                <a class="btn-preview-materi" href="#{{ $course_details->trailer }}">Trailer Kelas</a>
                            </li>
                            @auth
                            @if (Auth::user()->is_premium == 1)
                                @foreach($videos as $item_video)
                                <li>
                                    <a class="btn-preview-materi" href="#{{ $item_video->video_url }}">{{ $item_video->video_title }}</a>
                                </li>
                                @endforeach
                            @else
                                @foreach($videos as $item_video)
                                <li>
                                    <a href="#">{{ $item_video->video_title }} [Locked]</a>
                                </li>
                                @endforeach
                            @endif
                            @endauth
                            @guest
                                @foreach($videos as $item_video)
                                <li>
                                    <a href="#">{{ $item_video->video_title }} [Locked]</a>
                                </li>
                                @endforeach
                            @endguest
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <h5>
                            Tentang Kelas
                        </h5>
                        <p>
                            {{ $course_details->about }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $(document).on('click', '.btn-preview-materi', function() {
                let _this = $(this);
                let video_id = _this.attr('href').substr(1);
                $('.btn-preview-materi').removeClass('active');
                _this.addClass('active');
                $('#player').remove();
                $('.course-plyr').append(
                    '<div class="plyr__video-embed ratio video-place ratio-16x9" id="player"><iframe src="https://www.youtube.com/embed/' +
                    video_id +
                    '?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&autoplay=1" allowfullscreen allowtransparency allow="autoplay"></iframe></div>'
                );
                initPlayer()
            });
        })
    </script>
</body>
</html>