<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello cruel world Created</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
    <div>
        <label>Product Name: </label>
        <input type="text" name="productname">
    </div>
    <div>
        <label>Quantity: </label>
        <input type="number" step="1" name="quantity">
    </div>
    <div>
        <label>Price: </label>
        <input type="number" name="productprice">
    </div>
    <div>
        <label>Description: </label>
        <input type="text" name="description">
    </div>
    <div>
        <input type="submit" value="Save New Product" />
    </div>
    </form>
</body>
</html>