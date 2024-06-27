@extends('layouts.template')

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2><b>List of Products</b></h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('products.create') }}"> Add New Product</a>
        </div>
    </div>
</div>

<br>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Category</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $s)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $s->product_type }}</td>
        <td>{{ $s->description }}</td>
        <td>{{ $s->price }}</td>
        <td>{{ $s->quantity }}</td>
        <td>{{ $s->category}}</td>
        <td>
            <form action="{{ route('products.destroy', $s->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('products.show', $s->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('products.edit', $s->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
