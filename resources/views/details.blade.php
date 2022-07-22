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
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <h1>{{ $course_details->title }}</h1>
                <p>
                    Creator: 123
                </p>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube-nocookie.com/embed/{{ $course_details->trailer }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreens></iframe>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h5>
                            Materi Kelas
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Trailer Kelas</a>
                            </li>
                            <li>
                                <a href="#">Installation</a>
                            </li>
                            <li>
                                <a href="#">Download Source Code</a>
                            </li>
                            <li>
                                <a href="#">How to Manage People</a>
                            </li>
                            <li>
                                <a href="#">AB Testing Marketing</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>