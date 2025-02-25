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
                <label for="method">Method</label>  
                <input type="text" name="method" id="method" class="form-control" required>  
            </div>  
            <div class="form-group">  
                <label for="status">Status</label>  
                <input type="text" name="status" id="status" class="form-control" required>  
            </div>  
            <div class="form-group">  
                <label for="order">Order</label>  
                <input type="text" name="order" id="order" class="form-control" required>  
            </div>  
            <button type="submit" class="btn btn-primary">Create Payment</button>  
        </form>  
        <a href="{{ route('payment.index') }}" class="btn btn-secondary">Return</a>  
    </div>  
</body>  
</html>