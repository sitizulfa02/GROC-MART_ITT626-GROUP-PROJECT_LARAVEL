@extends('layouts.template')
   
@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>Edit Booking Customer</b></h2>
            </div>
        </div>
    </div>
    <br>
    
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
  
    <form action="{{ route('bookings.update',$booking->id) }}" method="POST">
        @csrf
        @method('PUT')

        <form action="{{ route('bookings.store') }}" method="POST">
    @csrf
  <br>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="user">Customer Name:</label>
                <input type="text" id="user" name="user" class="form-control" placeholder="Customer Name" value="{{ $booking->user->name }}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select id="category_id" class="form-control" name="category_id">
                        <option value="">-- Choose Category --</option>
                        @foreach ($categories as $id => $category)
                            <option value="{{ $id }}" {{ $booking->category_id == $id ? 'selected' : '' }}>
                                {{ $category }}
                            </option>
                        @endforeach
                    </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="product_id">Product:</label>
                <select id="product_id" class="form-control" name="product_id">
                        <option value="">-- Choose Product --</option>
                        @foreach ($products as $id => $product_type)
                            <option value="{{ $id }}" {{ $booking->product_id == $id ? 'selected' : '' }}>
                                {{ $product_type }}
                            </option>
                        @endforeach
                    </select>
            </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Quantity" value="{{ $booking->quantity }}">
                </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="location_id">Location:</label>
                <select id="location_id" class="form-control" name="location_id">
                        <option value="">-- Choose Location --</option>
                        @foreach ($locations as $id => $store_name)
                            <option value="{{ $id }}" {{ $booking->location_id == $id ? 'selected' : '' }}>
                                {{ $store_name }}
                            </option>
                        @endforeach
                    </select>
            </div>
        </div
        <br>
        <br>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection