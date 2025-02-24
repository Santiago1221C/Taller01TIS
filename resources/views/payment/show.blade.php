@extends('layouts.app')  

@section('content')  
<div class="container">  

    @if(session('success'))  
        <div class="alert alert-success">{{ session('success') }}</div>  
    @elseif(session('error'))  
        <div class="alert alert-danger">{{ session('error') }}</div>  
    @endif  

    <h1>Payment Details</h1>  
    <p><strong>ID:</strong> {{ $payment->id }}</p>  
    <p><strong>Method:</strong> {{ $payment->payment_method }}</p>   
    <p><strong>Status:</strong> {{ $payment->status }}</p>  
    <p><strong>Order ID:</strong> {{ $payment->order_id }}</p>  

    <form action="{{ route('payment.destroy', $payment->id) }}" method="POST">  
        @csrf  
        @method('DELETE')  
        <button type="submit" class="btn btn-danger">Delete Payment</button>  
    </form>  

    
    <a href="{{ route('payment.index') }}" class="btn btn-secondary mt-3">Back to Payment List</a>  
</div>  
@endsection