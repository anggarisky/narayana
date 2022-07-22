<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title>Nara Academy</title>
  </head>
  <body>
      @include ('components/navbar')
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-12 text-center">
                <h1>
                    Belajar Dari Mentor Berpengalaman <br> Dengan Arahan Karir Yang Baik
                </h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-10">
                <div class="row">
                    @foreach($courses as $item_courses)
                    <div class="col-lg-4">
                        <a href="{{ route('details', $item_courses->slug) }}">
                            <img src="https://buildwithangga.com/storage/assets/thumbnails/kelas%20full%20stack%20laravel%20react%20js%20bikin%20website%20streaming%20netflix%20buildwith%20angga%201%20(1).png" alt="" class="rounded mb-3 img-fluid">
                        </a>
                            <a href="{{ route('details', $item_courses->slug) }}">
                            <h4>
                                {{ $item_courses->title }}
                            </h4>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>