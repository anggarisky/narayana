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
                <h1 class="mb-5">Available Courses</h1>
                <div class="row">
                    @foreach($courses as $item_courses)
                    <div class="col-lg-4">
                        <h3>
                            Design System
                        </h3>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam sint laborum nulla tempora eligendi ea totam provident temporibus natus mollitia, quam aliquam magnam in nemo ut magni accusamus. Voluptatibus, ratione.
                        </p>
                        <p>
                            <a href="{{ route('details', $item_courses->slug) }}" class="btn btn-primary">Join Course</a>
                        </p>
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