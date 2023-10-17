<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
    @forelse ($products as $product )
        <div class="card">
            <h3>{{$product->name}}</h3>
            <p>{{$product->short_description}}</p>
            <p>{{$product->description}}</p>
            <p>{{$product->price}}USD</p>
        </div>
    @empty
        <h3>No data</h3>
    @endforelse
</div>
</body>
</html>
