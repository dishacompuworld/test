<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>All Users</title>

    {{-- <!-- Fonts --> --}}
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    
    <div class="container">
        <h1>All User</h1>
        <div class="row">
            <div class="col-6">
                <table class="table table-bordered table-striped">
                    <tr><th>Id</th><th>Name</th><th>E-Mail</th><th>City</th><th>Show</th><th>Delete</th><th>Update</th></tr>
                    @foreach ($data as $id => $user )
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->city }}</td>
                            <td><a href="{{ route('view.user',$user->id) }}" class="btn btn-primary btn-sm">Show</a></td>
                            <td><a href="{{ route('delete.user',$user->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="{{ route('update.page',$user->id) }}" class="btn btn-warning btn-sm">Update</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>



</body>
</html>