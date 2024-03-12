<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
        }
        
        li {
          float: left;
        }
        
        li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
        
        li a:hover {
          background-color: #6a6a6a;
        }
        </style>
    <title>Document</title>
</head>
<body>
    <div>
        <nav>
            <ul class="nav-list">
                <li class="nav-item"><a href="/">Welcome</a></li>
                <li class="nav-item"><a href="/product">Product</a></li>
                <li class="nav-item"><a href="/product/create">Create</a></li>
            </ul>
        </nav>
    </div>
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