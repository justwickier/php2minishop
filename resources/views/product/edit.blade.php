<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
    <h1>Hello cruel world Edit</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
    <div>
        <label>Product Name: </label>
        <input type="text" name="productname" value="{{$product->productname}}">
    </div>
    <div>
        <label>Quantity: </label>
        <input type="number" step="1" name="quantity" value="{{$product->quantity}}">
    </div>
    <div>
        <label>Price: </label>
        <input type="number" name="productprice" value="{{$product->productprice}}">
    </div>
    <div>
        <label>Description: </label>
        <input type="text" name="description" value="{{$product->description}}">
    </div>
    <div>
        <input type="submit" value="Update The Product" />
    </div>
    </form>
</body>
</html>