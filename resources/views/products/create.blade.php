@extends('layouts.template')
@section('content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2><b>Add New Product</b></h2>
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

<form action="{{ route('products.store') }}" method="POST">
    @csrf
<br>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="product_type" class="form-control" placeholder="Product Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" class="form-control" name="price" placeholder="Price">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Quantity:</strong>
                <input type="text" class="form-control" name="quantity" placeholder="Quantity">
            </div>
        </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Category:</strong>
                <input type="text" class="form-control" name="category" placeholder="Category">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" class="form-control" name="description" placeholder="Description">
            </div>
        </div>
       
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</form>
@endsection
