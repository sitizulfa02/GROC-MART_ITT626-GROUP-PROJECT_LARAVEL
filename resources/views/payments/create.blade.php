@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Payment</h2>
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

<form action="{{ route('payments.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Payment Method:</strong>
                <input type="String" name="payment_type" class="form-control" placeholder="Payment Method">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Amount:</strong>
                <input type="text" class="form-control" name="amount" placeholder="Amount">
            </div>
        </div>
    
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="{{ route('payments.index') }}"> Back</a>
        </div>
    </div>
</form>
@endsection
