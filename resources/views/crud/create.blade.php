<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<form action="{{ route('book.store') }}" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}

    <h2>Enter Information</h2>
    <div class="mb-3">
        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
               placeholder="enter title">
    </div>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
        <input type="file" class="form-control" name="image" @error('image') is-invalid @enderror">
    </div>
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
        <button type="submit" class="btn btn-outline-success">submit</button>
    </div>


</form>
</body>
</html>
