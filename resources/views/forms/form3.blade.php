<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <div class="container my-5">
        <h1>Form Validation</h1>

        {{-- @dump($errors)
        @dump($errors->any())
        @dump($errors->all()) --}}

        @include('forms.errors')

        <form action="{{ route('forms.form3_data') }}" method="POST">
            @csrf
            {{-- <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" >
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div> --}}
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" >
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" >
                @error('password')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Password" class="form-control" >
            </div> --}}

            <button class="btn btn-outline-primary mt-3 px-5">Register</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
