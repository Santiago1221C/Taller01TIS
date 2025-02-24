<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Payment Class</title>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            text-align: center;  
            margin: 50px;  
        }  
        a.button {  
            display: inline-block;  
            padding: 10px 20px;  
            margin: 10px;  
            font-size: 16px;  
            text-decoration: none;  
            color: white;  
            background-color: blue;  
            border-radius: 5px;  
        }  
    </style>  
</head>  
<body>  
    <h1>Payment Class</h1>  
    <h2>Select an activity:</h2>  
    <a href="{{ route('payment.create') }}" class="button">Create Payment</a>  
    <a href="{{ route('payment.index') }}" class="button">List Payments</a>  
</body>  
</html>