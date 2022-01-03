<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Brands List <a href="{{ route('brands.create') }}">Add New</a> </h1>
        <table border="1" colspan="10" rowspan="10">
            <thead>
                <th>id</th>
                <th>name</th>
                <th>action</th>
            </thead>
            <tbody>
                @foreach ($brands as $key => $brand)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <th>{{ $brand->name }}</th>
                        <th>
                            <a href="{{ route('brands.edit', $brand->id) }}">Edit</a>
                            <form method="POST" action="{{ route('brands.destroy', $brand->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">DELETE</button>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
