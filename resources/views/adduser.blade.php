<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h2>Add New USer</h2>
                {{-- @if($errors->any())
                    <ul class="alert alert-danger" list-style-position="inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}
            
                <form action="{{ route('adduser') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-lable">Name</label>
                        <input type="text" value="{{ old('username') }}" name="username" class="form-control @error('username') is-invalid @enderror">
                        <span class="text-danger"> @error('username') {{ $message }} @enderror </span> 
                    </div>
                    <div class="mb-3">
                        <label class="form-lable">Email</label>
                        <input type="text" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror">
                        <span class="text-danger"> @error('email') {{ $message }} @enderror </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-lable">Password</label>
                        <input type="text" value="{{ old('password') }}" name="password" class="form-control @error('password') is-invalid @enderror">
                        <span class="text-danger"> @error('password') {{ $message }} @enderror </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-lable">City</label>
                        <input type="text" value="{{ old('city') }}" name="city" class="form-control @error('city') is-invalid @enderror">
                        <span class="text-danger"> @error('city') {{ $message }} @enderror </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>