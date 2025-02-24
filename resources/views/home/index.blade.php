@extends('layouts.app')  

@section('title', 'Payment')  

@section('content')  
<div class="container text-center mt-5">  
    <h1>Welcome to Payment Section</h1>  
    <p>Please, complete the next information to process your payment.</p>  
    
    <a href="{{ route('payment.create') }}" class="btn btn-primary">Start Payment</a>  
</div>  
@endsection  