<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $errors)
                <li>{{$errors}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" Value="{{$product -> name}}" />
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" Value="{{$product -> qty}}"/>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" Value="{{$product -> price}}"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" Value="{{$product -> description}}"/>
        </div>
        <div>
            <input type="submit" value="update" />
        </div>
    </form>
</body>
</html>
