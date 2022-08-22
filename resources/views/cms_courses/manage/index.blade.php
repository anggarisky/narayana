<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title>Naracademy</title>
  </head>
  <body>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <p>
                    <a href="{{ route('admin.overview') }}" class="btn btn-danger">Back to Course</a>
                </p>
                <h1>Course Videos - {{ $course->title }}</h1>
                <p>
                    <a href="{{ route('admin.course.manage.create', $course->id) }}" class="btn btn-primary">Add Video</a>
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-8">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $item_videos)
                        <tr>
                            <td>{{ $item_videos->video_title }}</td>
                            <td>
                                <a href="{{ route('admin.course.manage.edit', $item_videos->id) }}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>