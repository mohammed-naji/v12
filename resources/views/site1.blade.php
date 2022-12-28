<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Page</title>
</head>
<body>

    {{-- <h1>Site 1 Main Page : <?php echo $myname ?>, age <?= $myage ?> </h1> --}}
    <h1>Site 1 Main Page : {{ $myname }}, age {{ $myage }} </h1>

    <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error dolorem omnis corrupti repudiandae? Pariatur, recusandae quo! Optio libero illum perspiciatis culpa non nihil, omnis quasi unde doloribus iste neque iure!</p> -->

    <h2>All Users</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
        </thead>

        <!-- if():

            endif

            while():

                endwhile -->

                {{-- $loop->even ? 'background: #951' : ''

                if($loop->even) {
                    'background: #951'
                }else {
                    ''
                } --}}

        <tbody>
            @foreach($users as $user)
            {{-- @dump($loop) --}}
            <tr style="{{ $loop->even ? 'background: #951' : '' }}" >
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['phone'] ?></td>
                <td><?= $user['email'] ?></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
