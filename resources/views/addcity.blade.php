<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New City</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    {{-- //@include('loadcity') --}}


    <div class="container">
        <div class="row">
            <div class="col-4">
                <h2>Add New City</h2>
                {{-- @if($errors->any())
                    <ul class="alert alert-danger" list-style-position="inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}
            
                <form action="{{ route('addcity') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-lable">City Name</label>
                        <input type="text" value="{{ old('cityname') }}" name="cityname" class="form-control @error('cityname') is-invalid @enderror">
                        <span class="text-danger"> @error('cityname') {{ $message }} @enderror </span> 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>