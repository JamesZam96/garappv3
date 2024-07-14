<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
</head>
<body>
<div class="container">
    <h1>Shopping Cart</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div>
        <form action="{{route('confirm.order')}}" method="POST">
            @csrf
            <div>
                <label for="">Fecha</label>
                <input type="date" name="date" id="">
            </div>
            <div>
                <label for="">Nombre</label>
                <input type="text" name="name_customer" id="" value="{{Auth::user()->name}}">
            </div>
            <div>
                <label for="">Dirección</label>
                <input type="text" name="address" id="">
            </div>
            <div>
                <label for="">Teléfono</label>
                <input type="text" name="phone" id="" value="{{Auth::user()->phone}}">
            </div>
            <button type="submit"> Enviar orden</button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
                <tr>
                    <td>
                        {{ $item->product ? $item->product->name : $item->service->name }}
                    </td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->product ? $item->product->price : $item->service->price }}</td>
                    <td>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>