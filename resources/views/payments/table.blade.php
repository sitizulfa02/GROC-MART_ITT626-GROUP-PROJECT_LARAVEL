@extends('layouts.template')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>List of Payments</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('payments.create') }}"> Add New Payment</a>
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
        <th>No</th>
        <th>Payment Method</th>
        <th>Amount</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($payments as $s)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $s->payment_type }}</td>
        <td>{{ $s->amount }}</td>
        <td>
            <form action="{{ route('payments.destroy', $s->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('payments.show', $s->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('payments.edit', $s->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
