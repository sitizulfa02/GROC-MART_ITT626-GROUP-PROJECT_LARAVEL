@extends('layouts.template')

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2><b>Edit Product</b></h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
<br>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="product_type"><strong>Product Type:</strong></label>
                <input type="text" class="form-control" name="product_type" value="{{ $product->product_type }}" placeholder="Product Type">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="description"><strong>Description:</strong></label>
                <input type="text" class="form-control" name="description" value="{{ $product->description }}" placeholder="Description">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="price"><strong>Price:</strong></label>
                <input type="text" class="form-control" name="price" value="{{ $product->price }}" placeholder="Price">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="quantity"><strong>Quantity:</strong></label>
                <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}" placeholder="Quantity">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="category"><strong>Category:</strong></label>
                <input type="text" class="form-control" name="category" value="{{ optional($product->category)->descriptions }}" placeholder="Category">
            </div>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="{{ route('products.index') }}">Back</a>
        </div>
    </div>
</form>
@endsection
