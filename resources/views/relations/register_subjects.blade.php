<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Subjects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container my-5">
        {{-- @dump($std->subjects->find(3)) --}}
        <h2>Welcome <span class="text-primary">{{ $std->name }}</span></h2>
        <form action="{{ route('register_subjects_data') }}" method="POST">
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Hours</th>
                </tr>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>
                            <input {{ $std->subjects->find($subject->id) ? 'checked' : '' }} type="checkbox" name="subjects[]" value="{{ $subject->id }}">
                            {{ $subject->id }}</td>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->hours }}</td>
                    </tr>
                @endforeach
            </table>

            <button class="btn btn-success">Register</button>
        </form>

    </div>

</body>
</html>
