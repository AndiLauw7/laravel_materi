<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table border="1">
        <a href="{{ route('students.create') }}">
            tambah
        </a>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->umur }}</td>
                <td>{{ $student->alamat }}</td>
                <td>
                    <a href="/students/{{ $student->id }}/edit">
                        edit
                    </a>

                    <form action="/students/{{ $student->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('yakin menghapus data ini?')">Hapus</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
