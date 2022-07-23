<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title>Tayooo Mo</title>
  </head>
  <body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Courses') }}
            </h2>
        </x-slot>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <p>
                        <a href="{{ route('admin.create.course') }}" class="btn btn-primary">New Course</a>
                    </p>
                </div>
            </div>
    
            <div class="row mt-5">
                <div class="col-lg-8">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $item_courses)
                            <tr>
                                <td>{{ $item_courses->title }}</td>
                                <td>
                                    <img src="{{ $item_courses->thumbnail }}" height="90" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('admin.course.manage', $item_courses->id) }}" class="btn btn-info">Manage</a>
                                    <a target="_blank" href="{{ route('details', $item_courses->slug) }}" class="btn btn-success">View</a>
                                    <a href="{{ route('admin.course.edit', $item_courses->id) }}" class="btn btn-info">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </x-app-layout>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>