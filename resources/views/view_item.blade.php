<!-- resources/views/view_item.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="view_item">
        <h2>{{ $item->name }}</h2>
        <p>Brand: {{ $item->brand }}</p>
        <p>ID: {{ $item->id }}</p>
        <p>Category: {{ $item->category }}</p>
        <p>Price: {{ $item->price }}</p>
    </div>
@endsection