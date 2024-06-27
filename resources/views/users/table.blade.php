@extends('layouts.app')

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2><b>List of Customers</b></h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Add New Customer</a>
        </div>
    </div>
</div>

<br>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Joined at</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($users as $u)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
        <td>{{ $u->phone_number ?? 'N/A' }}</td>
        <td>{{ $u->address  ?? 'N/A'}}</td>
        <td>{{ $u->created_at ? $u->created_at->format('Y-m-d H:i:s') : 'N/A' }}</td>
        <td>
            <form action="{{ route('users.destroy', $u->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('users.show', $u->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('users.edit', $u->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
