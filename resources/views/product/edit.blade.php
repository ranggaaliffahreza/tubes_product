@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Product</h1>
    <hr>
    <form action="{{route('product.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{$product->title}}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{$product->price}}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Product_code</label>
            <input type="text" name="product_code" class="form-control" placeholder="Productcode" value="{{$product->product_code}}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
           <textarea class="form-control" name="description" placeholder="Description">{{$product->description}}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection