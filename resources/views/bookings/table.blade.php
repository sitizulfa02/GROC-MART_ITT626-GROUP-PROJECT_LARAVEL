@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>Customer Booking</b></h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bookings.create') }}"> Add Customer Booking</a>
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
            <th>Customer Name</th>
            <th>Category</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Location</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bookings as $t)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $t->user->name }}</td> {{-- Assuming 'name' is the attribute for user's name --}}
            <td>{{ $t->category->category }} - {{ $t->category->description }}</td>
            <td>{{ $t->product->product_type }} - {{ $t->product->price }}</td>
            <td>{{ $t->product->quantity }}</td>
            <td>{{ $t->location->store_name ?? 'N/A' }}</td>
            <td>
                <form action="{{ route('bookings.destroy', $t->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('bookings.edit', $t->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
