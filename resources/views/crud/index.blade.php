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

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>

            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Create at</th>
            <th>Update at</th>
            <th>Delete</th>
            <th>Delete</th>


        </tr>
        </thead>

        <tbody>

        <?php $id = 0 ?>
        @foreach($books as $book)
            <tr>
                {{--<td>{{ $book -> id }}</td>--}}

                <td>{{$id++ }}</td>
                <td>{{ $book -> title }}</td>
                <td><img src="{{ asset('storage/'.$book->image) }}" alt="" width="200px"></td>
                <td>{{ $book -> created_at->format('d/m/y') }}</td>
                <td>{{ $book -> updated_at->format('d/m/y') }}</td>
                <td><a href="{{ route('book.edit', $book->id) }}">Update</a></td>

                <td>
                    <form action="{{ route('book.delete', $book->id) }}" method="post"> </form>
                    {{ csrf_field() }}
                    @method('delete')
                    <input type="submit" value="delete">
                </td>
            </tr>
        @endforeach


</body>
</html>
