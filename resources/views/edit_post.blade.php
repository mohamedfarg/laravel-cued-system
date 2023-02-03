@extends('base')
@section('title',"edit post")

@section('content')
<div class="product-form">
    <form method="POST" action=" {{ route('update',$product)}}">
        @csrf
        <label>Name:</label>
        <input type="text" name="title" value="{{$product->title}}">
        <label>Description:</label>
        <textarea name="body" value="{{$product->body}}"></textarea>
        <label>Price:</label>
        <input type="text" name="price" value="{{$product->price}}">
        <input type="submit" value="Add Product">
    </form>
</div>
@endsection
