<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>

    {{-- fas solid
    far regualr
    fab brand --}}
    {{-- <i class="fas fa-heart"></i>
    <i class="far fa-heart"></i>
    <i class="fab fa-facebook"></i> --}}


    {{-- <i class="far fa-envelope"></i>
    <i class="fab fa-whatsapp"></i>
    <i class="far fa-calendar-days"></i> --}}

    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card shadow border-0 h-100">
                        <div class="card-body">
                            <i class="fas fa-location-dot fa-2x mb-3"></i>
                            <h3>Location</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, dicta.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card shadow border-0 h-100">
                        <div class="card-body">
                            <i class="far fa-envelope fa-2x mb-3"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">info@example.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card shadow border-0 h-100">
                        <div class="card-body">
                            <i class="fab fa-whatsapp fa-2x mb-3"></i>
                            <h3>WhatsApp</h3>
                            <a href="https://wa.me/00972592418889" class="btn btn-success">Chat With Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card shadow border-0 h-100">
                        <div class="card-body">
                            <i class="fas fa-calendar-days fa-2x mb-3"></i>
                            <h3>Working Hours</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, dicta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5">
        <h1>Contact Us Form</h1>
        <form action="{{ route('forms.contact_data') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" />
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" />
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" name="phone" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" />
                        @error('phone')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label>Subject</label>
                        <input type="text" name="subject" placeholder="Subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}" />
                        @error('subject')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" />
                        @error('image')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label>Message</label>
                        <textarea name="message" placeholder="Message" class="form-control @error('message') is-invalid @enderror" rows="4">{{ old('name') }}</textarea>
                        @error('message')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <button class="btn btn-dark px-5">Send</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
