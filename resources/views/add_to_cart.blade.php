<!-- resources/views/add_to_cart.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="add_to_cart">
        <h2>Item Added to Cart</h2>
        <p>Item: {{ $item->name }}</p>
        <p>Brand: {{ $item->brand }}</p>
        <p>ID: {{ $item->id }}</p>
        <p>Category: {{ $item->category }}</p>
        <p>Price: {{ $item->price }}</p>
    </div>
@endsection