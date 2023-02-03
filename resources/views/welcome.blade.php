@extends('base')
@section('title',"home")

@section('content')
<div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="bg-light p-3">
        <a class="btn btn-success mb-3" href="{{ route('add') }}">Add Operation</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Created at</th>

                    <th>Column Adjust</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                
                
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->body}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>
                        <a href="{{ route('edit',$product) }}" class="btn btn-primary">edit</a>
                        <a href="{{ route('delete',$product) }}" class="btn btn-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
