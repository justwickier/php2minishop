<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
      
      table {
        text-align: center;
      }
      .n-succexx {
      
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
    .n-succexx {
	border: 2px solid #febf01;
	color: #febf01;
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
    <title>Product list</title>
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
    <div>
      @if(session()->has('success'))
      <div class="n-success">
        {{session('success')}}
      </div>
      @endif
    </div>
    <div>
      @if(session()->has('succexx'))
      <div class="n-succexx">
        {{session('succexx')}}
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
        <th></th>
        <th></th>
      </tr>
      @foreach($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->productname}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->productprice}}</td>
        <td>{{$product->description}}</td>
        <td>
          <a href="{{route('product.edit', ['product' => $product])}}"><input type="submit" value="Edit" /></a> 
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>