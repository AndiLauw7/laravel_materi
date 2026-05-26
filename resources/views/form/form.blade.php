<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Students</h1>
    <form action="/students/store" method="POST">
        @csrf
         @if ($errors->any())
    {{-- <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> --}}
    @endif
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama">
    @error('name')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>
    <input type="text" name="umur" value="{{ old('umur') }}" placeholder="Umur">
        @error('umur')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>
    <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat">
        @error('alamat')
        <div style="color: red;">{{ $message }}</div>
    @enderror
        <button type="submit">
            Kirim
        </button>
    </form>
</body>
</html>