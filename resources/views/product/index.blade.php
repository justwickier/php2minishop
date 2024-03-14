<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
  /* CSS for Add New Product button */
.add-product-button {
    background-color: #4CAF50; /* Green background color */
    color: white; /* Text color */
    padding: 10px 20px; /* Add padding */
    text-align: center; /* Center text */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Make it inline */
    font-size: 16px; /* Font size */
    border: none; /* Remove border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Add cursor pointer */
}

/* Hover effect */
.add-product-button:hover {
    background-color: #45a049; /* Darker green on hover */
}
.n-success {
      
      margin: 25px;
      width: 20%;
      padding: 12px 37px 12px 12px;
      color: #333;
      border-radius: 2px;
      background: #fff;
      position: center;
      font-weight: bold;
    font-family:'cairo',serif;
    text-align: center;
        box-sizing: border-box;
    }
        
          .n-success {
      border: 2px solid #32a846;
      color: #32a846;
    }
</style>
<body>
    <div>
      @if(session()->has('success'))
      <div class="n-success">
        {{session('success')}}
      </div>
      @endif
    </div>
    <br />
    <div>
      <div>
        <a href="{{route('product.create')}}" class="add-product-button">Add New Product</a>  
      </div>
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
            <input type="submit" value="Buy" />
          </form>
        </td>
      </tr>
      @endforeach
      </table>
    </div>
</body>
</html>