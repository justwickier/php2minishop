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
          background-color: #646464;
        }
        th, td {
          padding: 5px;
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
    <h1>Hello cruel world, this is a fucking table</h1>
    <div>
      @if(session()->has('success'))
      <div>
        {{session('success')}}
      </div>
      @endif
    </div>
    <br />
    <div>
      <table border="1">
      <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      @foreach($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->productname}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->productprice}}</td>
        <td>{{$product->description}}</td>
        <td>
          <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
        </td>
        <td>
          <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" />
          </form>
        </td>
      </tr>
      @endforeach
      </table>
    </div>
</body>
</html>