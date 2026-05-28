<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    ini halaman tambah students

    <form action="/students/store" method="POST">
        @csrf
        <input type="text" name="name" placeholder="nama">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <input type="text" name="umur" placeholder="umur">
        @error('umur')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <input type="text" name="alamat" placeholder="alamat">
        @error('alamat')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit" >Tambah</button>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session("success") }}
            </div>
      @endif  
    </form>

    </body>
</html>