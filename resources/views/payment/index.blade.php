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

        @if (session('success'))  
            <div class="alert alert-success">  
                {{ session('success') }}  
            </div>  
        @endif  

        <a href="{{ route('payment.create') }}" class="btn btn-primary">Crear Pago</a>  
        <table class="table">  
            <thead>  
                <tr>  
                    <th>ID</th>  
                    <th>Método</th>  
                    <th>Estado</th>  
                    <th>ID de Orden</th>  
                    <th>Acciones</th>  
                </tr>  
            </thead>  
            <tbody>  
                @foreach ($payments as $payment)  
                    <tr>  
                        <td>{{ $payment->id }}</td>  
                        <td>{{ $payment->method }}</td>  
                        <td>{{ $payment->status }}</td>  
                        <td>{{ $payment->order_id }}</td>  
                        <td>  
                            <form action="{{ route('payment.destroy', $payment->id) }}" method="POST" style="display:inline;">  
                                @csrf  
                                @method('DELETE')  
                                <button class="btn btn-danger">Eliminar</button>  
                            </form>  
                            <a href="{{ route('payment.show', $payment->id) }}" class="btn btn-info">Detalles</a>  
                        </td>  
                    </tr>  
                @endforeach  
            </tbody>  
        </table>  
    </div>  
</body>  
</html>