@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Product</h1>
    <hr>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{$product->title}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{$product->price}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Product_code</label>
            <input type="text" name="product_code" class="form-control" placeholder="Productcode" value="{{$product->product_code}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
           <textarea class="form-control" name="description" placeholder="Description" readonly>{{$product->description}}</textarea>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created_At</label>
            <input type="text" name="Created_At" class="form-control" placeholder="Created At" value="{{$product->Created_At}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated_At</label>
            <input type="text" name="Updated_At" class="form-control" placeholder="Updated At" value="{{$product->Updated_At}}" readonly>
        </div>
    </div> --}}

  
@endsection