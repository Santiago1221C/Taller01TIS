@extends('layouts.app')  

@section('content')  
<div class="container">  

    @if(session('success'))  
        <div class="alert alert-success">{{ session('success') }}</div>  
    @elseif(session('error'))  
        <div class="alert alert-danger">{{ session('error') }}</div>  
    @endif  

    <h1>Payment Details</h1>  
    <p><strong>ID:</strong> {{ $viewData['payments']->id }}</p>    
    <p><strong>Method:</strong> {{ $viewData['payments']->method }}</p>   
    <p><strong>Status:</strong> {{ $viewData['payments']->status }}</p>  
    <p><strong>Order:</strong> {{ $viewData['payments']->order }}</p>    

    <form action="{{ route('payment.destroy', $viewData['payments']->id) }}" method="POST">  
        @csrf  
        @method('DELETE')  
        <button type="submit" class="btn btn-danger">Delete Payment</button>  
    </form>  

    <a href="{{ route('payment.index') }}" class="btn btn-secondary mt-3">Return to Payment List</a>  
</div>  
@endsection