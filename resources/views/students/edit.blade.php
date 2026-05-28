<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Edit Students</h1>
       @if (session('success'))
       <div class="alert alert-success">
        {{ session('success') }}
       </div>
       @endif
    <form action="/students/{{ $student->id}}/update" method="POST">
       @csrf 
       @method('PATCH')

       <input type="text" name="name" value="{{ $student->name }}" placeholder="nama">
        <br>
       <input type="text" name="umur" value="{{ $student->umur }}" placeholder="umur">
        <br>
       <input type="text" name="alamat" value="{{ $student->alamat }}" placeholder="alamat">
        <br>
       <button type="submit">Update</button>
    </form>
</body>
</html>