@extends('base')
@section('title',"add post")

@section('content')
<div class="product-form">
    <form method="POST" action=" {{ route('store')}}">
        @csrf
        <label>Name:</label>
        <input type="text" name="title">
        <label>Description:</label>
        <textarea name="body"></textarea>
        <label>Price:</label>
        <input type="text" name="price">
        <input type="submit" value="Add Product">
    </form>
</div>
@endsection
