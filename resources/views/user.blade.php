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
        <h1>User Details</h1>
        <div class="row">
            <div class="col-6">
                <table class="table table-bordered table-striped">
                    @foreach ($data as $id => $user )
                        <tr><td><b>ID</b><td>{{ $user->id }}</td></tr>
                        <tr><td><b>Name</b></td><td>{{ $user->name }}</td></tr>
                        <tr><td><b>Email</b></td><td>{{ $user->email }}</td></tr>
                        <tr><td><b>City</b></td><td>{{ $user->city }}</td></tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>