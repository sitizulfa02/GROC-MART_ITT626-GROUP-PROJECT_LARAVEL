@extends('layouts.app')

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2><b>List of Locations</b></h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('locations.create') }}"> Add New Location</a>
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
        <th>Store Name</th>
        <th>Address</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($locations as $s)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $s->store_name }}</td>
        <td>{{ $s->address }}</td>
        <td>
            <form action="{{ route('locations.destroy', $s->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('locations.show', $s->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('locations.edit', $s->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
