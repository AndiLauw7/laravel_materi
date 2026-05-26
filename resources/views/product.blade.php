<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    ini halaman product
     <p>Daftar Poduk</p>
  <ul>
{{-- <li>{{$product1}}</li>
<li>{{$product2}}</li>   --}}
@foreach($products as $product)
    <li>{{$product}}</li>
@endforeach
</ul>
</body>
</html>