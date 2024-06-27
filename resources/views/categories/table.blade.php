@extends('layouts.app')

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2><b>List of Categories</b></h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('categories.create') }}"> Add New Category</a>
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
        <th>Category</th>
        <th>Description</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($categories as $s)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $s->category }}</td>
        <td>{{ $s->description }}</td>
        <td>
            <form action="{{ route('categories.destroy', $s->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('categories.show', $s->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('categories.edit', $s->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
