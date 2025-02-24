<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <title>{{ $title }}</title>  
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head>  
<body>  
    <div class="container">  
        <h1>{{ $title }}</h1>  
        <h2>{{ $subtitle }}</h2>  

        @if ($errors->any())  
            <div class="alert alert-danger">  
                <ul>  
                    @foreach ($errors->all() as $error)  
                        <li>{{ $error }}</li>  
                    @endforeach  
                </ul>  
            </div>  
        @endif  

        <form action="{{ route('payment.store') }}" method="POST">  
            @csrf  
            <div class="form-group">  
                <label for="method">Payment Method</label>  
                <input type="text" name="method" id="method" class="form-control" required>  
            </div>  
            <div class="form-group">  
                <label for="status">Status</label>  
                <input type="text" name="status" id="status" class="form-control" required>  
            </div>  
            <div class="form-group">  
                <label for="order_id">Order ID</label>  
                <input type="text" name="order_id" id="order_id" class="form-control" required>  
            </div>  
            <button type="submit" class="btn btn-primary">Create Payment</button>  
        </form>  
        <a href="{{ route('payment.index') }}" class="btn btn-secondary">Return</a>  
    </div>  
</body>  
</html>