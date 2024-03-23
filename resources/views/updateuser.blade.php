<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h2>Update user</h2>
                <form action="{{ route('updateuser', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-lable">Name</label>
                        <input type="text" name="username" class="form-control" value="{{ $data->name}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-lable">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $data->email}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-lable">City</label>
                        {{-- <input type="text" name="city" class="form-control" value="{{ $data->city}}"> --}}
                        <select name="city" id="">
                            @foreach ($data1 as $row)
                                <option value="{{ $row->id }}" @php
                                    if($data->city == $row->id){ echo 'selected'; }
                                @endphp>{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-lable">password</label>
                        <input type="text" name="password" class="form-control" value="{{ $data->password}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>