<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    {{-- <div class="container-fluid">
        <div class="row bg-danger">
            <div class="col-4">dd</div>
            <div class="col-4">rr</div>
            <div class="col-4">qq</div>
        </div>
    </div> --}}

    <div class="container my-5">
        <h1>Basic Form</h1>
        <form action="{{ route('forms.form1_data') }}" method="POST">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            {{ csrf_field() }} --}}
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control" >
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="number" name="age" placeholder="Age" class="form-control" >
            </div>

            <button class="btn btn-outline-primary mt-3 px-5">Send</button>

            {{-- <button class="btn btn-outline-primary">Send</button> --}}
            {{-- <button class="btn btn-outline-success">Send</button> --}}
            {{-- <button class="btn btn-outline-danger">Send</button> --}}
            {{-- <button class="btn btn-outline-info">Send</button> --}}
            {{-- <button class="btn btn-outline-warning">Send</button> --}}
            {{-- <button class="btn btn-outline-dark">Send</button> --}}
            {{-- <button class="btn btn-outline-light">Send</button> --}}
            {{-- <button class="btn btn-outline-secondary">Send</button> --}}
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
