@extends('layouts.app')

@section('title', 'Product Details')

@section('content')

<h2>Product Details</h2>

<table class="table table-bordered">

    <tr>
        <th>ID</th>
        <td>{{ $product['id'] }}</td>
    </tr>

    <tr>
        <th>Name</th>
        <td>{{ $product['name'] }}</td>
    </tr>

    <tr>
        <th>Price</th>
        <td>₱{{ number_format($product['price']) }}</td>
    </tr>

    <tr>
        <th>Quantity</th>
        <td>{{ $product['quantity'] }}</td>
    </tr>

    <tr>
        <th>Category</th>
        <td>{{ $product['category'] }}</td>
    </tr>

</table>

<a href="{{ route('products.index') }}"
   class="btn btn-secondary">
    Back to All Products
</a>

@endsection