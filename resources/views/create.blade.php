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
        <h1>Create Berand <a href="{{ route('brands.index') }}">Back</a> </h1>
        <form method="POST" action="{{ route('brands.store') }}">
        @csrf
        <input type="text" name="name" id="name" value="{{ old('name') }}"> <br>
        @error('name')
            {{ $message }}
        @enderror
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
