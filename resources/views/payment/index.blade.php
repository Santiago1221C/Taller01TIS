<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <title>{{ $viewData['title'] }}</title>  
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">  
</head>  
<body>  
    <div class="container">  
        <h1>{{ $viewData['title'] }}</h1>  
        <h2>{{ $viewData['subtitle'] }}</h2>  

        @if (session('success'))  
            <div class="alert alert-success">  
                {{ session('success') }}  
            </div>  
        @endif  

        <a href="{{ route('payment.create') }}" class="btn btn-primary">Create Payment</a>  
        <table class="table">  
            <thead>  
                <tr>  
                    <th>ID</th>  
                    <th>Method</th>  
                    <th>Status</th>  
                    <th>Order</th>  
                    <th>Actions</th>  
                </tr>  
            </thead>  
            <tbody>  
                @foreach ($viewData['payments'] as $payment)  
                    <tr>  
                        <td>{{ $payment->id }}</td>  
                        <td>{{ $payment->method }}</td>  
                        <td>{{ $payment->status }}</td>  
                        <td>{{ $payment->order }}</td>  
                        <td>  
                            <form action="{{ route('payment.destroy', $payment->id) }}" method="POST" style="display:inline;">  
                                @csrf  
                                @method('DELETE')  
                                <button class="btn btn-danger">Delete</button>  
                            </form>  
                            <a href="{{ route('payment.show', $payment->id) }}" class="btn btn-info">Details</a>  
                        </td>  
                    </tr>  
                @endforeach  
            </tbody>  
        </table>  
    </div>  
</body>  
</html>