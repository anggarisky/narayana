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
                <h1>New Courses</h1>
                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.add.course.store') }}">

                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">thumbnail</label>
                      <input type="file" name="thumbnail" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Link Trailer</label>
                      <input name="trailer" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea name="about" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">About</label>
                          </div>
                      </div>
                      <div class="mb-3">
                        <div class="form-floating">
                            <select name="id_creator" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                              <option selected>Pilih Creator</option>
                              <option value="1">Angga</option>
                              <option value="21">Space Crew</option>
                            </select>
                            <label for="floatingSelect">Works with selects</label>
                          </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Save Course</button>
                  </form>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>